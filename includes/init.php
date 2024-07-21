<?php
session_start();

// include dependencies
require_once __DIR__ . "/../vendor/autoload.php";

// autoload required classes
spl_autoload_register(function ($class) {
        $class = str_replace('\\', '/', strtolower($class));
        require_once __DIR__ . '/../classes/' . $class . '.php';
    });


// setup PicoPDO
$GLOBALS['_PICO_PDO'] = new PDO('mysql:host=localhost;dbname=tghc-dev', 'tghc-dev', ')8CcJTWQBzuYYb(g');


// initialize smarty
global $smarty;
use Smarty\Smarty;
$smarty = new Smarty();
$smarty->setTemplateDir('/path/to/templates');
$smarty->setCompileDir('/path/to/templates_c');
$smarty->setCacheDir('/path/to/cache');
$smarty->setConfigDir('/path/to/configs');

