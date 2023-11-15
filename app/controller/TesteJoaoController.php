<?php

class TesteJoaoController
{
    public function index()
    {
        // Inicia a sessão
        session_start();

        // Verifica se o usuário está autenticado
        if (!isset($_SESSION['user_id'])) {
            // Redireciona para a página de login
            header('Location: /login');
            exit();
        }

        // Obtém o nível de acesso do usuário

        // Cria uma instância da view
        $view = new testeJoao();

        $model = new TestesModel();
        $nivelAcesso = $model->getNivelAcesso($_SESSION['user_id']);
        // Renderiza a página de dashboard, passando o nível de acesso do usuário como parâmetro
        
        $view->render(['nivelAcesso' => $nivelAcesso]);
    }

}