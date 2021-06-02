<?php

require_once '../php/listar.php';

$dados = listarConsultaId($_GET['ID']);

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
        <title>Alterar consulta - VetSet</title>
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
                        <a class="nav-link active" aria-current="page" href="../php/homepage-admin.php">Home</a>
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
                    <h3>Alterar consulta</h3>
                </div>
                <form action="../php/alterar_consulta.php?ID=<?php echo $dados['ID']; ?>" method="POST">
                    <div class="mt-3 d-flex align-items-center flex-column">
                        <div class="col-lg-6">
                          <label for="TIPOCONSULTA" class="form-label">Tipo de Consulta:* </label>
                            <input type="text" name="TIPOCONSULTA" class="form-control" id="tipoConsulta" aria-describedby="tipoConsultaHelp" required>

                            <label for="DATA" class="form-label mt-3">Data:* </label>
                            <input type="date" name="DATA" class="form-control" id="data" aria-describedby="dataHelp" required>

                            <label for="HORA" class="mt-3 form-label">Horário:* </label>
                            <input type="time" name="HORA" class="form-control" id="hora" aria-describedby="horaHelp" required>

                            <label for="PACIENTE" class="mt-3 form-label">Paciente:* </label>
                            <input type="text" name="PACIENTE" class="form-control" id="paciente" aria-describedby="pacienteHelp" required>

                            <label for="VETERINARIO" class="mt-3 form-label">Veterinário:* </label>
                            <input type="text" name="VETERINARIO" class="form-control" id="veterinario" aria-describedby="veterinarioHelp" required>

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