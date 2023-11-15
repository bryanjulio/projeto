<?php

class HomeController {
    public function index() {
        // Cria uma instância da view
        $view = new HomeView();

        // Renderiza a view
        $view->render();
    }
}
