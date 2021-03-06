<?php

$dbconfig = [

	'mysqli' => [
		'DSN'          => '',
		'hostname'     => 'localhost',
		'username'     => 'travis',
		'password'     => '',
		'database'     => 'test',
		'DBDriver'     => 'MySQLi',
		'DBPrefix'     => 'db_',
		'pConnect'     => false,
		'DBDebug'     => (ENVIRONMENT !== 'production'),
		'cacheOn'     => false,
		'cacheDir'     => '',
		'charset'      => 'utf8',
		'DBCollat'     => 'utf8_general_ci',
		'swapPre'      => '',
		'encrypt'      => false,
		'compress'     => false,
		'strictOn'     => false,
		'failover'     => [],
		'saveQueries' => true,
	],

    'postgres' => [
	    'DSN'          => '',
	    'hostname'     => 'localhost',
	    'username'     => 'postgres',
	    'password'     => '',
	    'database'     => 'test',
	    'DBDriver'     => 'Postgre',
	    'DBPrefix'     => 'db_',
	    'pConnect'     => false,
	    'DBDebug'     => (ENVIRONMENT !== 'production'),
	    'cacheOn'     => false,
	    'cacheDir'     => '',
	    'charset'      => 'utf8',
	    'DBCollat'     => 'utf8_general_ci',
	    'swapPre'      => '',
	    'encrypt'      => false,
	    'compress'     => false,
	    'strictOn'     => false,
	    'failover'     => [],
	    'saveQueries' => true,
    ]

];
