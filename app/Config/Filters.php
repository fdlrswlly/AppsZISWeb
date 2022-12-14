<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;


class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'     => \CodeIgniter\Filters\CSRF::class,
        'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot' => \CodeIgniter\Filters\Honeypot::class,
        'isLoggedIn' =>\App\Filters\FilterLogin::class,
        'isLoggedInUser' => \App\Filters\FilterUser::class
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [
        'isLoggedIn' => ['before' =>
        [
        'home/dashboard',
        'DataMuzzaki/*',
        'DataMustahiq/*',
        'BayarZakat/datatransaksi',
        'KategoriAsnaf/*',
        'Penyaluran/*',
        'JenisZakat/*',
        'laporan/*',
        'SendEmail'
        ]
        ],
        'isLoggedInUser' => ['before' => 
        [
            'bayarzakat/input',
            'zakatku/*'
        ]]
    ];
}
