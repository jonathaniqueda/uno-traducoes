class Build
  def Build.configure(config, settings)
    # Configurando a box para levantar o ambiente
    config.vm.box = "ncaro/php7-debian8-apache-nginx-mysql"

    # Depois que levantar a box, é a hora de configurar a rede interna.
    config.vm.network :private_network, ip: settings["ip"] ||= "192.168.7.7"

    if settings['networking'][0]['public']
      config.vm.network "public_network", type: "dhcp"
    end

    # Configurando alguma opções da máquina, como memória, número de máquina levantadas e etc.
    config.vm.provider "virtualbox" do |vb|
      vb.customize ["modifyvm", :id, "--memory", settings["memory"] ||= "2048"]
      vb.customize ["modifyvm", :id, "--cpus", settings["cpus"] ||= "1"]
      vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
      vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
      vb.customize ["modifyvm", :id, "--ostype", "Debian_64"]
      vb.customize ["modifyvm", :id, "--audio", "none", "--usb", "off", "--usbehci", "off"]
    end

    # Configuração das portas.
    config.vm.network "forwarded_port", guest: 80, host: 8000, auto_correct: true
    config.vm.network "forwarded_port", guest: 443, host: 44300, auto_correct: true
    config.vm.network "forwarded_port", guest: 3306, host: 33060, auto_correct: true
    config.vm.network "forwarded_port", guest: 3000, host: 3000, auto_correct: true
    config.vm.network "forwarded_port", guest: 3001, host: 3001, auto_correct: true
    config.vm.network "forwarded_port", guest: 8080, host: 8080, auto_correct: true

    # Adicionando as portas baseada no arquivo de config.
    if settings.has_key?("ports")
      settings["ports"].each do |port|
        config.vm.network "forwarded_port", guest: port["guest"], host: port["host"], protocol: port["protocol"] ||= "tcp"
      end
    end

    # Registrando as configurações do folder que está mapeado no arquivo de config.
    if settings['folders'].kind_of?(Array)
      settings["folders"].each do |folder|
        config.vm.synced_folder folder["map"], folder["to"], type: folder["type"] ||= nil
      end
    end

    # Instalando o NGINX ou APACHE baseado na configuração setada no config. No nosso caso, instalaremos o APACHE2.
    if settings["php"] == 7
      if settings["nginx"] == true
          config.vm.provision "shell", inline: "sudo service php5-fpm stop", run: "always"
          config.vm.provision "shell", inline: "sudo service php7-fpm restart", run: "always"
      else
          config.vm.provision "shell", inline: "sudo a2dismod php5", run: "always"
          config.vm.provision "shell", inline: "sudo a2enmod php7", run: "always"
      end
    else
      if settings["nginx"] == true
          config.vm.provision "shell", inline: "sudo service php7-fpm stop && sudo service php5-fpm restart", run: "always"
      else
          config.vm.provision "shell", inline: "sudo a2dismod php7 && sudo a2enmod php5", run: "always"
      end
    end

    # Colocando o NGIX on e o APACHE2 off ou o inverso, baseado na variável de NGINX do config.
    if settings["nginx"] == true
       config.vm.provision "shell", inline: "sudo apachectl stop", run: "always"
       config.vm.provision "shell", inline: "sudo service nginx restart", run: "always"
    else
       config.vm.provision "shell", inline: "sudo service nginx stop", run: "always"
       config.vm.provision "shell", inline: "sudo apachectl start", run: "always"
    end

    # Update do composer
    config.vm.provision "shell", inline: "sudo composer self-update"

    # Instalando o npm
    config.vm.provision "shell", inline: "cd /var/www/ && sudo npm install"
  end
end