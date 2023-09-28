<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="d-flex justify-content-between">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Usuário</h2>
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
        <label for="name" class="form-label">Nome</label>
        <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Seu melhor email', 'label' => false]) ?>
    </div>
    <div class="col-md-6">
        <label for="username" class="form-label">Usuário</label>
        <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Nome de usuário', 'label' => false]) ?>
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