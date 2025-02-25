<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/UserController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);


// Users
$route->get("/users/login", [UserController::class, 'login']);
$route->get("/users/list", [UserController::class, 'list']);
$route->get("/users/register", [UserController::class, 'register']);


$route->route();