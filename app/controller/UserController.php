<?php
class UserController
{
    private $view; // adiciona uma propriedade para a view
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }
    public function index()
    {
        session_start();
        // Verifica se o usuário está autenticado
        if (!isset($_SESSION['user_id'])) {
            // Redireciona para a página de login
            header('Location: /login');
            exit();

        }
          $user = $this->model->getUserById($_SESSION['user_id']);

        // Cria uma instância da view
        $this->view = new UserView($user);

        $this->view->render();

    }
    public function register()
    {
        session_start();
        // Verifica se o usuário está autenticado
        if (!isset($_SESSION['user_id'])) {
            // Redireciona para a página de login
            header('Location: /login');
            exit();
        }

        // Obtém os dados do usuário logado

        $user = $this->model->getUserById($_SESSION['user_id']);

        // Cria uma instância da view
        $this->view = new UserView($user);

        // Renderiza a view
        $this->view->renderCreateForm();
    }


    public function createUser()
    {
        // Adicione este código
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $nivel = $_POST['nivel'];
        $empresa = $_POST['empresa'];
        $senha = $_POST['senha'];

        $this->model->createUser($name, $email, $telefone, $data_nasc, $cidade, $estado, $endereco, $nivel, $empresa, $senha);

        header('Location: /dashboard');
    }


// outros métodos do UserController
}