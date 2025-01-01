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
                                      } ?>" method="POST">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($data['produto']['nome']) ? $data['produto']['nome'] : '' ?>">
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" style="resize:none;" rows="5"><?= isset($data['produto']['descricao']) ? $data['produto']['descricao'] : '' ?></textarea>
      </div>
      <div class="row">
        <div class="mb-3 col-4">
          <label for="categoriaId" class="form-label">Categoria:</label>
          <select class="form-select" aria-label="Default select example" name="categoriaId" id="categoriaId">
            <?php foreach ($data['categoria'] as $categoria) : ?>
              <?php if ($categoria['id'] === $data['produto']['categoria_id']): ?>
                <option selected><?= $categoria['nome'] ?></option>
                <?php continue; ?>
              <?php endif ?>
              <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="mb-3 col-4">
          <label for="quantidade" class="form-label">Quantidade:</label>
          <input type="number"
            <?= isset($data['produto']) ? 'disabled' : '' ?>
            class="form-control" id="quantidade" name="quantidade" value="<?= isset($data['produto']['quantidade_disponivel']) ? $data['produto']['quantidade_disponivel'] : '' ?>">
        </div>
        <div class="mb-3 col-4">
          <label for="valor" class="form-label">Valor:</label>
          <input type="text" class="form-control" id="valor" name="valor" value="<?= isset($data['produto']['valor']) ? $data['produto']['valor'] : '' ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">
        <?= isset($data['produto']) ? 'Atualizar' : 'Salvar' ?>
      </button>
    </form>
  </div>
</div>