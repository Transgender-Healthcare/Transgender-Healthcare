<?php
session_start();

// read .env INI file for configuration information
global $settings;
$settings = parse_ini_file('.env', true);

// include dependencies
require_once __DIR__ . "/../vendor/autoload.php";

// autoload required classes
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
        require_once __DIR__ . '/../classes/' . $class . '.php';
    });


// setup PicoPDO
$GLOBALS['_PICO_PDO'] = new PDO('mysql:host='.$settings['database']['hostname'].';dbname=tghc-dev', $settings['database']['username'], $settings['database']['password']);


// initialize smarty
global $smarty;
use Smarty\Smarty;
$smarty = new Smarty();
$smarty->setTemplateDir('/path/to/templates');
$smarty->setCompileDir('/path/to/templates_c');
$smarty->setCacheDir('/path/to/cache');
$smarty->setConfigDir('/path/to/configs');

