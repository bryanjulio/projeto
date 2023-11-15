<?php

class HomeView
{
    public function render()
    {
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">

            <head>
                <meta charset="UTF-8">
                <title>Sistema Administrativo</title>
                <!-- Adicione o CSS do Bootstrap -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            </head>

            <body>
                <!-- Menu de navegação -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="#">Sistema Administrativo</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Início</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Seção de recursos -->
                <section class="py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Recurso 1</h5>
                                        <p class="card-text">Descrição do Recurso 1</p>
                                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Recurso 2</h5>
                                        <p class="card-text">Descrição do Recurso 2</p>
                                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Recurso 3</h5>
                                        <p class="card-text">Descrição do Recurso 3</p>
                                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Botão de login -->
                <section class="bg-light py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mx-auto text-center">
                                <h2>Faça login para acessar o sistema administrativo</h2>
                                <a href="/login" class="btn btn-primary mt-3">Fazer Login</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Adicione o JavaScript do Bootstrap -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                    crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                    crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                    crossorigin="anonymous"></script>

            </body>

        </html>

        <?php
    }
}