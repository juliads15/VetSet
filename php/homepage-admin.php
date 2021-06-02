<?php

    require_once '../php/listar.php';

    $dados = listarConsultas();

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
        <title>Lista de Consultas - VetSet</title>
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
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../php/lista-veterinarios.php">Lista de Veterinários</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../php/estoque.php">Estoque</a>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <a class="btn btn-outline-light ms-2" href="../src/index.html">Sair</a>
                    </form>
                  </div>
                </div>
              </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Lista de Consultas</h3>
                    <hr>
                </div>
                <div class="col-md-4 text-right h2">
                    <a class="btn btn-primary" href="../src/cadastro-consulta.html"><i class="fa fa-plus"></i> Cadastrar Consulta </a>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tipo consulta</th>
                                <th>Data</th>
                                <th>Horário</th>
                                <th>Paciente</th>
                                <th>Veterinário</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($dados) : ?>
        
                            <?php foreach($dados as $consulta) : ?>
                            <tr>
                                <td><?php echo $consulta['ID']; ?></td>
                                <td><?php echo $consulta['TIPOCONSULTA']; ?></td>
                                <td><?php echo $consulta['DATA']; ?></td>
                                <td><?php echo $consulta['HORA']; ?></td>
                                <td><?php echo $consulta['PACIENTE']; ?></td>
                                <td><?php echo $consulta['VETERINARIO']; ?></td>				
                                <td>
                                    <a href="../php/editar_consulta.php?ID=<?php echo $consulta['ID']; ?>" class="btn btn-info">Alterar</a>
                                    <a href="../php/excluir_consulta.php?ID=<?php echo $consulta['ID']; ?>" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
        
                            <?php endforeach; ?>
        
                            <?php else : ?>
                            <tr>
        
                            <td colspan="6">Nenhum registro encontrado.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
        
                </div>
                <div class="col-md-2"></div>
        
            </div>
        </div>
    </body>
    <footer class="mt-5 bg-success">
        <p class="d-block text-center text-light">&copy Todos os direitos reservados</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>