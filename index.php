<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
require_once('app/config/route.php');

// Recebe a requisição do usuário
$request = $_SERVER['REQUEST_URI'];


// Verifica qual controller e método devem ser executados
switch ($request) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;

    case '/login':
        $controller = new AuthController();
        $controller->login();
        break;

    case '/logout':
        $controller = new AuthController();
        $controller->logout();
        break;

    case '/login/authenticate':
        $controller = new AuthController();
        $controller->authenticate();
        break;

    case '/users':
        $controller = new UserController();
        $controller->index();
        break;

    case '/calculadora':
        $controller = new CalculadoraController();
        $controller->index();
        break;

    case '/users/register':
        $controller = new UserController();
        $controller->register();
        break;


    case '/users/create':
        $controller = new UserController();
        $controller->createUser();
        break;

    case '/dashboard':
        $controller = new DashboardController();
        $controller->index();
        break;

    case '/robo':
        $controller = new RoboController();
        $controller->index();
        break;

    case '/robo/executar':
        $controller = new RoboController();
        $controller->executarRobo();
        break;

    case '/testeJoao':
        $controller = new TesteJoaoController();
        $controller->index();
        break;
    case '/testeBryan':
        $controller = new TesteBryanController();
        $controller->index();
        break;


    default:
        http_response_code(404);
        require_once('404.php');
        break;
}