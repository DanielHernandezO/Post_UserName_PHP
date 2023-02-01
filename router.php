<?php
define('CWD', getcwd());
require_once CWD . '/controller/handler/UserController.php';
require_once CWD .'/service/UserService.php';
require_once CWD .'/repository/UserRepository.php';
require_once CWD .'/configuration/DbConnection.php';
$userRepository = new UserRepository($connection);
$userService = new UserService($userRepository);
$userController = new UserController($userService);
$userController->saveUser();
?>