<?php
// include dependencies
require_once '../vendor/autoload.php';

// include configuration
require_once 'config.inc.php';

// initialize smarty
global $smarty;
use Smarty\Smarty;
$smarty = new Smarty();
$smarty->setTemplateDir('/path/to/templates');
$smarty->setCompileDir('/path/to/templates_c');
$smarty->setCacheDir('/path/to/cache');
$smarty->setConfigDir('/path/to/configs');