<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MS Code - Projeto Estoque 2024</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="/public/assets/css/styles.css" rel="stylesheet">
</head>

<body>
  <main>
    <div class="border-bottom mb-2">
      <div class="container">
        <header class="d-flex flex-wrap justify-content-center align-items-center py-3">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img class="me-2" src="/public/assets/images/logotipo.svg" width="53">
            <span class="fs-4">MS Code - Estoque</span>
          </a>

          <ul class="nav nav-pills d-flex align-items-center">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Início</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Vendas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="vendas_realizadas.html">Vendas realizadas</a></li>
                <li><a class="dropdown-item" href="nova_venda.html">Nova venda</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Produtos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="produtos.html">Estoque</a></li>
                <li><a class="dropdown-item active" href="categorias.html">Categorias</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="#" class="btn btn-outline-danger m-0 ms-4" aria-current="page">Sair</a></li>
          </ul>
        </header>
      </div>
    </div>

    <div class="container py-5">
      <div class="mb-4">
        <?php
          if (isset($data['categoria'])) {
            echo "<h1>Editar categoria</h1>";
          } else {
            echo "<h1>Nova categoria</h1>";
          }
        ?>
      </div>

      <div class="w-50 mt-2">
      <?php
        if (isset($data['categoria'])) {
          echo "<form action='/categorias/cadastrar/salvar?id={$data['categoria']['id']}'>";
        } else {
          echo '<form action="/categorias/cadastrar/salvar">';
        }
      ?>
        <?php if (isset($data['categoria'])) { ?>
          <div class="mb-3">
            <label for="id" class="form-label">Id: </label>
            <input type="number" class="form-control" id="id" name="id" readonly value="<?php echo $data['categoria']['id']; ?>">
          </div>
        <?php } ?>

          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <?php
              if (isset($data['categoria'])) {
                echo '<input type="text" class="form-control" name="nome" id="nome" value="' . $data['categoria']['nome'] . '">';
              } else {
                echo '<input type="text" class="form-control" name="nome" id="nome">';
              }
            ?>
          </div>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
