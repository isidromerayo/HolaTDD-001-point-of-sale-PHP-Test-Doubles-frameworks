<?php

define('BASE_PATH', __DIR__ . '/../');
define('APPLICATION_PATH', BASE_PATH . '/src');
define('TEST_PATH', BASE_PATH . '/tests');
define('APPLICATION_ENV', 'testing');

set_include_path(
        '.'
        . PATH_SEPARATOR . BASE_PATH . '/src'
        . PATH_SEPARATOR . get_include_path()
);

date_default_timezone_set('Europe/Madrid');

error_reporting(E_ALL | E_STRICT);

spl_autoload_register(function($class)
{
    $file = __DIR__.'/../src/'.strtr($class, '\\', '/').'.php';
    if (file_exists($file)) {
        require $file;
        return true;
    }
});
