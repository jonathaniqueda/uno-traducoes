<?php

return [
    'supportedLocales' => [
        'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en'],
        'pt-br' => ['name' => 'Português', 'script' => 'Latn', 'native' => 'português do Brasil', 'regional' => 'pt-br'],
        'es' => ['name' => 'Español', 'script' => 'Latn', 'native' => 'español', 'regional' => 'es'],
    ],
    'useAcceptLanguageHeader' => true,
    'hideDefaultLocaleInURL' => false,
    'localesOrder' => ['pt-br', 'en', 'es'],
];
