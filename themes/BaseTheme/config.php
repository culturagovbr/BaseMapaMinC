<?php
return [
    //  ================= LGPD =================
    'module.LGPD' => [
        'termsOfUsage' => [
            'title' => 'Termos e Condições de Uso',
            'text' => file_get_contents(__DIR__ . '/config/lgpd-terms/terms-of-usage.html'),
            'buttonText' => 'Aceito os termos e condiçoes de uso'
        ],
        'privacyPolicy' => [
            'title' =>  'Política de Privacidade',
            'text' => file_get_contents(__DIR__ . '/config/lgpd-terms/privacy-policy.html'),
            'buttonText' => 'Aceito a política de privacidade'
        ],
        'termsUse' => [
            'title' =>  'Autorização de Uso de Imagem',
            'text' => file_get_contents(__DIR__ . '/config/lgpd-terms/images-use.html'),
            'buttonText' => 'Autorizo o uso de imagem'
        ],
    ],
];
