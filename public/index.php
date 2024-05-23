<?php
require_once '../config/config.php';
require_once '../app/Controllers/UserController.php';

$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'user';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerClassName = ucfirst($controllerName) . 'Controller';

$controllerFilePath = '../app/Controllers/' . $controllerClassName . '.php';
if (!file_exists($controllerFilePath)) {
    die('Controller not found.');
}

require_once $controllerFilePath;
$controller = new $controllerClassName($redis);

if (!method_exists($controller, $actionName)) {
    die('Action not found.');
}

$controller->{$actionName}();
