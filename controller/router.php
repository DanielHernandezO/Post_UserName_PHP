<?php
require_once(__DIR__ .'/../controller/handler/UserController.php');
require_once(__DIR__ .'/../service/UserService.php');
require_once(__DIR__ .'/../repository/UserRepository.php');
require_once(__DIR__ .'/../configuration/DbConnection.php');
$userRepository = new UserRepository($connection);
$userService = new UserService($userRepository);
$userController = new UserController($userService);
$userController->saveUser();
?>