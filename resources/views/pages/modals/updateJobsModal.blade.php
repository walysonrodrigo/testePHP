<!-- MODAL EDITAR -->
<div class="modal fade" id="editModalJob" tabindex="-1" aria-labelledby="editModalJobLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalJobLabel">Editar Vaga</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editForm">
          <input type="hidden" name="id">
          <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select" id='type' name='type'>
              <option selected>Tipo da vaga</option>
              <option value="CLT">CLT</option>
              <option value="PJ">PJ</option>
              <option value="FL">FreeLancer</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="active" class="form-label">Ativa</label>
            <select class="form-select" id="active" name="active">
              <option value="1">Ativar</option>
              <option value="0">Desativar</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
      </div>
    </div>
  </div>
</div>