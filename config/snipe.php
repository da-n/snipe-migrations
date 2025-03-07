<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Storage Locations
    |--------------------------------------------------------------------------
    | By default, SnipeMigrations will store snipe files and database snapshots
    | in /vendor/drfraker/snipe-migrations/snapshots. If you would like to
    | change the location of the files, update the paths below.
    */
    'snapshot-location'  => base_path('vendor/drfraker/snipe-migrations/snapshots/').'snipe_snapshot.sql',
    'snipefile-location' => base_path('vendor/drfraker/snipe-migrations/snapshots/').'.snipe',

    /*
    |--------------------------------------------------------------------------
    | Database Seeding
    |--------------------------------------------------------------------------
    | By default SnipeMigrations will refresh the database, run all migrations,
    | and start each test with an empty database. If you would like to seed
    | the database after refreshing it, enable the setting below. A custom
    | class can be set, otherwise, the default DatabaseSeeder will run.
    */
    'seed-database'      => false,
    'seed-class'         => 'DatabaseSeeder',

];
