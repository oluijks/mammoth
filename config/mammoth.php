<?php

/**
 * Main application config file.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

return [

    'version' => '0.0.2',
    'admin_email' => 'admin@mammoth-development.tk',
    'theme' => 'default',
    'show_ads' => true,
    'google_recaptcha' => true,

    'support_ie8' => true,

    // Active modules
    'modules' => [
        'Admin',
        'Auth',
        'Blog',
        'Forum',
        'Pages',
        'Herd',
        'Search',
        'Sitemap',
        'Webshop',
    ],

    'ga_code' => 'UA-72526016-1',
];
