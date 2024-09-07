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
            <span class="fs-4">MS Code - Produtos</span>
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
              <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
      <div class="mb-4">
        <h1><?php
            if (isset($data['produto'])) {
              echo 'Editar';
            } else {
              echo 'Novo';
            } ?> produto</h1>
      </div>
      <div class="w-50 mt-2">
        <form action="/app/estoque/salvar<?php
          if (isset($data['produto'])) {
            echo "?id=" . $data['produto']['id'];
          } else {
            echo "";
          }?>" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="<?php echo $data['produto']['nome'] ?>">
          </div>
          <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" style="resize:none;" rows="5" placeholder="<?php echo $data['produto']['descricao'] ?>"></textarea>
          </div>
          <div class="row">
            <div class="mb-3 col-4">
              <label for="categoriaId" class="form-label">Categoria Id:</label>
              <input type="number" class="form-control" id="categoriaId" name="categoriaId" placeholder="<?php echo $data['produto']['categoria_id'] ?>">
            </div>
            <div class="mb-3 col-4">
              <label for="quantidade" class="form-label">Quantidade:</label>
              <input type="number"
                <?php
                if (isset($data['produto'])) {
                  echo 'disabled';
                } else {
                  echo '';
                } ?>
                class="form-control" id="quantidade" name="quantidade" placeholder="<?php echo $data['produto']['quantidade_disponivel'] ?>">
            </div>
            <div class="mb-3 col-4">
              <label for="valor" class="form-label">Valor:</label>
              <input type="text" class="form-control" id="valor" name="valor" placeholder="<?php echo $data['produto']['valor'] ?>">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">
            <?php
            if (isset($data['produto'])) {
              echo 'Atualizar';
            } else {
              echo 'Salvar';
            } ?></button>
        </form>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>