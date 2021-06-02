<?php

require_once '../php/listar.php';

$dados = listarAnimalId($_GET['ID']);

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
        <title>Alterar animal - VetSet</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <a class="navbar-brand" href="#">
                    <!-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
                    VetSet
                  </a>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../php/homepage.php">Home</a>
                      </li>
                    </ul>
                    <form class="d-flex">
                    </form>
                  </div>
                </div>
              </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="mt-5 d-flex align-items-center flex-column">
                    <h3>Alterar animal</h3>
                </div>
                <form action="../php/alterar_animal.php?ID=<?php echo $dados['ID']; ?>" method="POST">
                    <div class="mt-3 d-flex align-items-center flex-column">
                        <div class="col-lg-6">
                            <label for="NOME" class="form-label">Nome:* </label>
                            <input type="text" name="NOME" class="form-control" id="name" aria-describedby="nameHelp" required>

                            <label for="TIPOANIMAL" class="form-label mt-3">Tipo do animal:* </label>
                            <input type="text" name="TIPOANIMAL" class="form-control" id="tipoAnimal" aria-describedby="tipoAnimalHelp" required>

                            <label for="RACA" class="mt-3 form-label">Raça:* </label>
                            <input type="text" name="RACA" class="form-control" id="raca" aria-describedby="racaHelp" required>

                            <label for="PESO" class="mt-3 form-label">Peso:* </label>
                            <input type="text" name="PESO" class="form-control" id="peso" aria-describedby="pesoHelp" required>

                            <label for="PORTE" class="mt-3 form-label">Porte:* </label>
                            <input type="text" name="PORTE" class="form-control" id="porte" aria-describedby="porteHelp" required>

                            <label for="IDADE" class="form-label mt-3">Idade:* </label>
                            <input type="text" name="IDADE" class="form-control" id="idade" aria-describedby="cityHelp" required>

                            <button type="submit" class="mt-4 float-end btn btn-outline-success">Alterar</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        
                    </div>                  
                </form>
            </div>
        </div>
    </body>
    <footer class="mt-5 bg-success">
        <p class="d-block text-center text-light">&copy Todos os direitos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>