<div class="container py-5">
  <div class="mb-4">
    <h1>{{titulo}} categoria</h1>
  </div>
  <div class="w-50 mt-2">
    <form action="/app/categoria" method="POST">
      <div class="mb-3">
        <label for="id" class="form-label">Id: </label>
        <input type="email" class="form-control" id="id" readonly value="{{idValue}}" name="id" style="background-color: #bcbcbc;">
      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="{{nome}}">
      </div>
      <button type="submit" class="btn btn-primary">{{submitButton}}</button>
      <input type="text" value='{{editOrSave}}' name="editOrSave" hidden>
    </form>
  </div>
</div>