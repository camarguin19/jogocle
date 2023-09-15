<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
    <body class= "bg-secondary">
        <nav class="navbar bg-primary-subtle">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    <img src="" alt="" width="100px">
                </a>
            
            </div>
        </nav>

    <div class= "container text-center mt-5">
            <h2>Cadastro do Usuário</h2>
            <p>Preencha as informções abaixo e clique no botão cadastrar para criar seu cadatro.
            </p>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <input class= "form-control" type="text" name="" id="" placeholder= "Nome">
                </div>
                <div class="col-md-6">
                    <input class= "form-control" type="text" name="" id="" placeholder= "Sobrenome">
                </div>
            </div>   
            <div class="row mt-3"> 
                <div class="col-md-6">
                    <input class="form-control" type="email" name="" id="" placeholder= "email">

                </div>
                <div class="col-md-6">
                    <input class="form-control" type="password" name="" id="" placeholder= "Senha">
                </div>
            </div>   
            <div class="row mt-3">
                <div class="col-md-6">
                    <input class= "form-control" type="date" name="" id="" placeholder= "Data de Nascimento">
                </div> 
                    <div class="col-md-6">
                        <select class="form-control" name="sexo" id="">
                            <option value="">Selecione</option>
                            <option value="Fem">Feminino</option>
                            <option value="Masc">Masculino</option>
                            <option value="Indeterminado">Prefiro não dizer</option>
                        </select>
                    </div>

            </div>
                <div class= "mt-3">
                <input class= "btn btn-success btn-lg" type="submit" value="Cadastrar">
                <a class= "btn btn-dark btn-lg" href="index.php">Já tenho uma conta</a>
                </div>
        </form>

    </div>
   
        <footer class="footer py-3 bg-dark fixed-bottom">
            <div class= "container text-center">

                <p class="text-light">Todos os direitos reservados - 2023</p>

            </div>

        </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>

<?php

