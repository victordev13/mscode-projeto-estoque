<div class="container py-5">
  <div class="mb-4">
    <?= isset($data['categoria'])
      ? '<h1>Editar categoria</h1>'
      : '<h1>Nova categoria</h1>'
    ?>
  </div>
  <div class="w-50 mt-2">
    <form action="/app/categoria/salvar" method="POST">
      <div class="mb-3">
        <label for="id" class="form-label">Id: </label>
        <input type="email" class="form-control" id="id"
          <?= isset($data['categoria'])
            ? 'readonly'
            : 'disabled'
          ?>
          value="
            <?= isset($data['categoria'])
              ? $data['categoria']['id']
              : '0'
            ?>"
          name="id" style="background-color: #bcbcbc;">
      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($data['categoria']['nome']) ? $data['categoria']['nome'] : '' ?>">
      </div>
      <button type="submit" class="btn btn-primary">
        <?= isset($data['categoria'])
          ? "Atualizar"
          : "Salvar";
        ?>
      </button>
    </form>
  </div>
</div>