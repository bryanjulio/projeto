<?php

class AuthController
{
    public function login()
    {
        // Verifica se o usuário já está autenticado
        if (isset($_SESSION['user_id'])) {
            // Redireciona para a página principal
            header('Location: /dashboard');
            exit();
        }

        // Cria uma instância da view
        $view = new LoginView();

        // Renderiza o formulário de login
        $view->render();
    }

    public function authenticate()
    {
        // Obtém o email e senha enviados pelo formulário de login
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Obtém os dados do usuário do banco de dados
        $model = new UserModel();
        $user = $model->getUserByEmail($email);

        // Verifica se o usuário existe e se a senha está correta
        if ($user && $senha === $user['senha']) {
            // Armazena os dados do usuário na sessão
            session_start();
            $_SESSION['user_id'] = $user['id'];

            // Redireciona para a página de dashboard
            header('Location: /dashboard');
            exit();
        } else {
            // Se o usuário não existe ou a senha está incorreta, exibe uma mensagem de erro
            $view = new LoginView();
            $view->render(['error' => 'Email ou senha inválidos']);
        }
    }


    public function logout()
    {
        // Inicia a sessão
        session_start();

        // Destroi a sessão
        session_destroy();

        // Redireciona para a página de login
        header('Location: /login');
        exit();
    }
}