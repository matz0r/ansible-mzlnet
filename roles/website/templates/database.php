<?php

return array(

	'fetch' => PDO::FETCH_CLASS,

	'default' => 'mysql',

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => __DIR__.'/../database/production.sqlite',
			'prefix'   => '',
		),

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => '{{ mzl_db_host }}',
			'database'  => '{{ mzl_db_database }}',
			'username'  => '{{ mzl_db_user }}',
			'password'  => '{{ mzl_db_pw }}',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

	),

	'migrations' => 'migrations',

);
