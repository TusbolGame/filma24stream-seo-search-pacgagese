<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Filma me titra shqip | Seriale me titra Shqip, Seriale turke me titra shqip", // set false to total remove
            'description'  => 'Faqja me e mire shqiptare per te pare filma me titra shqip, seriale me titra shqip, sereiale turke me titra shqip', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['filma me titra shqip', 'seriale me titra shqip', 'seriale turke me titra shqip', 'filma aksion me titra shqip'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => "Filma me titra shqip | Seriale me titra Shqip, Seriale turke me titra shqip",
            'bing'      => "Filma me titra shqip | Seriale me titra Shqip, Seriale turke me titra shqip",
            'alexa'     => "Filma me titra shqip | Seriale me titra Shqip, Seriale turke me titra shqip",
            'pinterest' => "Filma me titra shqip | Seriale me titra Shqip, Seriale turke me titra shqip",
            'yandex'    => "Filma me titra shqip | Seriale me titra Shqip, Seriale turke me titra shqip",
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Filma me titra shqip | Seriale me titra Shqip, Seriale turke me titra shqip', // set false to total remove
            'description' => 'Faqja me e mire shqiptare per te pare filma me titra shqip, seriale me titra shqip, sereiale turke me titra shqip', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => 'filma24.stream',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
