<?php

return [
    'db' => [
        'driver'         => 'Pdo',
        'dsn'            => 'mysql:dbname=db_albumzf2;host=localhost',
        'driver_options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ],
    ],
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter\Adapter'
                    => 'Zend\Db\Adapter\AdapterServiceFactory',
        ],
    ],
];
/*
return [
  'db' => [
      'driver' => 'Pdo',
      'dsn'    => sprintf('sqlite:%s/data/zftutorial.db', realpath(getcwd())),
  ],
];
*/
