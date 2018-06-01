<?php 

require __DIR__.'/config/bootstrap.php';

return [
        "paths" => [
            "migrations" => __DIR__."/db/migrations",
            "seeds" => __DIR__."/db/seeds"
        ],
        "environments" => [
            "default_migration_table" => "migrations",
            "default_database" => "dev",
            "dev" => [
                "adapter" => $config['dbdriver'],
                "host" => $config['dbhost'],
                "name" => $config['dbname'],
                "user" => $config['dbuser'],
                "pass" => $config['dbpass'],
                "port" => $config['dbport'],
                "charset" => $config['dbcharset'],
                "collation" => $config['dbcollation'],
                "table_prefix" => $config['dbtable_prefix'],
                "table_suffix" => $config['dbtable_suffix'],
            ]
        ]
    ];