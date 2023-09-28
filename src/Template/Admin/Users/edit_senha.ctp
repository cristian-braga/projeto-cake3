<div class="d-flex justify-content-between">
  <div class="mr-auto p-2">
    <h2 class="display-4 titulo">Editar Senha</h2>
  </div>
  <div class="p-2">
    <span class="d-none d-md-block">
      <?= $this->Html->link('Listar', ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>
      <?= $this->Html->link(__('Detalhes'), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
      <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#apagarRegistro">Excluir</a>
    </span>
    <div class="dropdown d-block d-md-none">
      <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Ações
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><?= $this->Html->link('Listar', ['controller' => 'users', 'action' => 'index'], ['class' => 'dropdown-item']) ?></li>
          <li><?= $this->Html->link(__('Detalhes'), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'dropdown-item']) ?></li>
          <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#apagarRegistro">Excluir</a></li>
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

<div class="modal fade" id="apagarRegistro" tabindex="-1" aria-labelledby="apagarRegistroLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h1 class="modal-title fs-5" id="apagarRegistroLabel">Excluir Item</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja Excluir o item selecionado?
      </div>
      <div class="modal-footer">
        <?= $this->Form->postLink('Apagar', ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'btn btn-secondary']) ?>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>