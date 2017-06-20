<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Custom\Exception\ValidateException;
use App\Custom\Request\RequestMessage;
use Illuminate\Http\Request;
use Validator;
use Mailgun;

class IndexController extends Controller
{
    /**
     * @return string
     */
    public function home(Request $req, $contact = null)
    {
        if ($req->isMethod('POST')) {
            //Lógica para o form de contato
            $validate = Validator::make($req->all(), [
                'servico_desejado' => 'required',
                'email' => 'required|email',
                'fixo' => 'required',
                'fixo' => 'required',
                'observacao' => 'string',
            ]);

            if ($validate->fails()) {
                throw new ValidateException($validate->errors());
            }

            $all = $req->all();
            $result = Mailgun::send('email.novo-contato', $all, function ($message) use ($all) {
                $message->to(getenv('EMAIL_CONTATO'), !empty($all['nome']) ? $all['nome'] : '')
                    ->testmode(false)
                    ->from(getenv('EMAIL_CONTATO'), 'Contato - UNO Traduções')
                    ->replyTo(getenv('EMAIL_CONTATO'), 'Contato - UNO Traduções')
                    ->subject('Nova solicitação de orçamento');
            });

            if (preg_match("/^Queued/im", $result->http_response_body->message)) {
                $contact = new Contato($req->all());
                $contact->save();
            } else {
                throw new \Exception('Erro ao enviar a messagem');
            }

            return RequestMessage::success();
        }

        return view('page.welcome', ['contact' => $contact]);
    }

    /**
     * @return string
     */
    public function empresa()
    {
        return view('page.quem-somos.empresa');
    }

    /**
     * @return string
     */
    public function tresPilares($anchor)
    {
        return view('page.quem-somos.missao-visao-valores', ['anchor' => $anchor]);
    }

    /**
     * @return string
     */
    public function servicos($type = null)
    {
        return view('page.servicos.home', ['tipo_servico' => $type]);
    }

    /**
     * @return string
     */
    public function trabalheConosco()
    {
        return view('page.trabalhe-conosco');
    }
}
