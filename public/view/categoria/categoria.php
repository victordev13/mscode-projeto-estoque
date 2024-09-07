<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MS Code - Projeto 2024</title>
  <link rel="icon" type="image/x-icon" href="https://mediacdn.simonetti.com.br/media/favicon/websites/1/favicon-1_1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="/assets/css/styles.css" rel="stylesheet">
</head>

<body>
  <main>
    <div class="border-bottom mb-2">
      <div class="container">
        <header class="d-flex flex-wrap justify-content-center align-items-center py-3">
          <a href="/app" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img class="me-2" src="/assets/images/logotipo.svg" width="53">
            <span class="fs-4">MS Code - Categorias</span>
          </a>
          <ul class="nav nav-pills d-flex align-items-center">
            <li class="nav-item"><a href="/app" class="nav-link" aria-current="page">Início</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Vendas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/app/venda">Vendas realizadas</a></li>
                <li><a class="dropdown-item" href="/app/venda/nova">Nova venda</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle Active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Produtos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/app/estoque">Estoque</a></li>
                <li><a class="dropdown-item" href="/app/categoria">Categorias</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="/" class="btn btn-outline-danger m-0 ms-4" aria-current="page">Sair</a></li>
          </ul>
        </header>
      </div>
    </div>
    <div class="container py-5">
      <div class="mb-4 d-flex flex-row justify-content-between">
        <h1>Categorias</h1>
        <div>
          <a href="/app/categoria/nova" class="btn btn-primary"><i class="bi bi-plus"></i>Nova categoria</a>
        </div>
      </div>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col-1 text-align-right">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['categorias'] as $categoria) { ?>
            <tr>
              <th scope="row"><?php echo $categoria['id']; ?></th>
              <td><?php echo $categoria['nome']; ?></td>
              <td class="col-1 text-align-right">
                <a href="categoria/editar?id=<?php echo $categoria['id']; ?>" class="btn btn-secondary btn-sm"><i class="bi bi-pencil"></i></a>
                <a href="categoria/excluir?id=<?php echo $categoria['id']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>