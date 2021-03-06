<?php

return [
    /*
     * Here goes the application configuration.
     */
    'app' => [

        /*
         * Here goes the application name.
         */
        'name' => 'Laravel Zero',

        /*
         * Here goes the application version.
         */
        'version' => '1.0.0',

        /*
         * If true, development commands won't be available as the app
         * will be in the production environment.
         */
        'production' => false,

        /*
         * Here goes the application default command. If you remove this
         * line, the list of commands will appear.
         */
        'default-command' => App\Commands\HelloCommand::class,

        /*
         * Here goes the application list of commands. Besides the default
         * command the user can also call any of the commands specified below.
         */
        'commands' => [
            // App\Commands\YourNewCommand::class,
        ],

        /*
         * Here goes the application list of Laravel Service Providers.
         * Enjoy all the power of Laravel on your console.
         */
        'providers' => [
            App\Providers\AppServiceProvider::class,
        ],
    ],

    /*
     * Here goes the application cache configuration. In order to keep
     * it simple we use the `array` driver. Fell free to use another
     * driver that checking the cache compomenent documentation.
     */
        'cache' => [
            'default' => 'array',
            'stores' => [
                'array' => [
                    'driver' => 'array',
                ],
            ],
        ],

    /*
     * Here goes the illuminate/database component configuration. Once
     * installed, the configuration below is used to configure your
     * database component.
     */
    'database' => [
        /*
         * If true, migrations commands will be available.
         */
        'with-migrations' => true,

        /*
         * Here goes the application database connection configuration. By
         * default, we use `sqlite` as driver. Fell free to use another
         * driver that checking the database compomenent documentation.
         */
        'connections' => [
            'default' => [
                'driver'   => 'sqlite',
                'database' => __DIR__.'/../database/database.sqlite',
            ],
        ],
    ],
];
