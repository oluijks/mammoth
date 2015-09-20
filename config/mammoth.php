<?php

/**
 * Main application config file
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

return [

    'version'       => '0.0.1',

    'admin_email'   => 'admin@mammoth-app.com',
    'theme'         => 'default',
    'show_ads'      => true,

    'support_ie8'   => true,

    'modules' => [
        'Admin',
        'Auth',
        'Blog',
        'Forum',
        'Pages',
        'Herd',
        'Search',
        'Sitemap',
    ],

    'ga_code'       => 'UA-XXXXX-X',
];
