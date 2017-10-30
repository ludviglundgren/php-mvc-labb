<?php

//include files
require('config.php');

require('Classes/Bootstrap.php');
require('Classes/Controller.php');
require('Classes/Model.php');

require('Controllers/home.php');
require('Controllers/shares.php');
require('Controllers/users.php');

require('Models/home.php');
require('Models/share.php');
require('Models/user.php');

// use Site\config;

// use Site\Classes\Bootstrap;
// use Site\Classes\Controller;
// use Site\Classes\Model;

// use Site\Controllers\Home;
// use Site\Controllers\Users;
// use Site\Controllers\Shares;

// use Site\Model\HomeModel;
// use Site\Model\UserModel;
// use Site\Model\ShareModel;

// function autoloader($classname)
// {
//     $lastSlash = strpos($classname, '\\') + 1;
//     $classname = substr($classname, $lastSlash);
//     $directory = str_replace('\\', '/', $classname);
//     $filename = __DIR__ . '/' . $directory . '.php';
//     require_once($filename);
// }

// spl_autoload_register('autoloader');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if ($controller) {
    $controller->executeAction();
}