<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="d-flex justify-content-between">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Usuário</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link('Listar', ['controller', 'users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>
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
    <div class="col-md-6">
        <label for="password" class="form-label">Senha</label>
        <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'No mínimo 6 caracteres', 'label' => false]) ?>
    </div>
    <br>
    <div class="col-12">
        <?= $this->Form->button('Cadastrar', ['class' => 'btn btn-primary']) ?>
    </div>
<?= $this->Form->end() ?>