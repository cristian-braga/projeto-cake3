<div class="d-flex justify-content-between">
  <div class="mr-auto p-2">
    <h2 class="display-4 titulo">Editar Senha</h2>
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
<?= $this->Form->create($user) ?>
  <div class="col-md-6">
    <label for="password" class="form-label">Senha</label>
    <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'No mínimo 6 caracteres', 'value' => '', 'label' => false]) ?>
  </div>
  <br>
  <div class="col-12">
    <?= $this->Form->button('Salvar', ['class' => 'btn btn-primary']) ?>
  </div>
<?= $this->Form->end() ?>