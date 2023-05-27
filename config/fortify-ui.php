<?php

return [
    /**
     * Set the default favicon url
     * 
     * Default: 'https://fav.farm/👻'
     */
    'favicon' => 'https://fav.farm/👻',

    /**
     * Enable/Disable Socialite
     * 
     * Default: false
     */
    'use_socialite' => true,

    /**
     * Enable/Disable Two Factor Authentication
     * 
     * Default: false
     */
    'terms_of_service' => [
        /**
         * Enable/Disable Terms of Service
         * 
         * Default: false
         */
        'enabled' => true,

        /**
         * Set the default Terms of Service url
         * 
         * Default: 'https://example.com/terms'
         */
        'url' => 'https://example.com/terms',
    ],
];
