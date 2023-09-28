<div class="d-flex justify-content-between">
  <div class="mr-auto p-2">
    <h2 class="display-4 titulo">Editar Foto</h2>
  </div>
  <div class="p-2">
    <span class="d-none d-md-block">
      <?= $this->Html->link(__('Detalhes'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'btn btn-outline-primary btn-sm']) ?>
    </span>
    <div class="dropdown d-block d-md-none">
      <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Ações
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><?= $this->Html->link(__('Detalhes'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'dropdown-item']) ?></li>
      </ul>
    </div>
  </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($user, ['type' => 'file']) ?>
  <div class="row">
    <div class="col-md-6">
      <label class="form-label">Foto (150x150)</label>
      <?= $this->Form->control('imagem', ['type' => 'file', 'class' => 'form-control', 'onchange' => 'previewImagem()', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
      <?php
        if ($user->imagem !== null) {
          $imagem_antiga = '../../files/user/' . $user->id . '/' . $user->imagem;
        } else {
          $imagem_antiga = '../../files/user/icone_usuario.png';
        }
      ?>
      <img src="<?= $imagem_antiga ?>" alt="<?= $user->name ?>" id="preview-img" class="img-thumbnail" style="width: 150px; height: 150px;">
    </div>
  </div>
  <br>
  <div class="col-12">
    <?= $this->Form->button('Salvar', ['class' => 'btn btn-primary']) ?>
  </div>
<?= $this->Form->end() ?>