<?php

return array(
    
    'base_path' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Aplikasi n Teknologi Web',
    /*
     * base url for domain and path 
     */
    'base_url' => 'http://localhost/framework/',
    /* default router where the default class and action should be call
     * controller is a class name
     * action is a function name
     * 
     */
    'default_router' => array(
        'controller' => 'welcome',
        'action' => 'index'),
    /*
     * modules is an autoload mechanism
     */
    'modules' => array(),
    /*
     * database configuration
     * we can use multiple database connection at same time
     */
    'database' => array(
        /*
         * the first database configuration
         */
        'db' => array(
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'database',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'prefix' => '',
        ),
    /*
      'sqlite' => array(
      'driver' => 'sqlite',
      'database' => 'application',
      'prefix' => '',
      ),
      'oracle' => array(
      'driver' => 'oracle',
      'connection_string' => '',
      'username' => '',
      'password' => ''),
      'mysql' => array(
      'driver' => 'mysql',
      'host' => 'localhost',
      'database' => 'database',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
      'prefix' => '',
      ),
      'pgsql' => array(
      'driver' => 'pgsql',
      'host' => 'localhost',
      'database' => 'database',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
      'prefix' => '',
      'schema' => 'public',
      ),
      'sqlsrv' => array(
      'driver' => 'sqlsrv',
      'host' => 'localhost',
      'database' => 'database',
      'username' => 'root',
      'password' => '',
      'prefix' => '',
      ),
      /* second database
     * 
     */
    //"db" => array()
    ),
    'encoding' => 'UTF-8',
    'timezone' => 'UTC'
);
