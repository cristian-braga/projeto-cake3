<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="d-flex justify-content-between">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Usuário</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link('Listar', ['controller' => 'Users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>
            <?= $this->Html->link('Editar', ['controller' => 'Users', 'action' => 'edit', $user->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>
            <?= $this->Html->link('Editar Senha', ['controller' => 'Users', 'action' => 'editSenha', $user->id], ['class' => 'btn btn-outline-dark btn-sm']) ?>
            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#apagarRegistro">Excluir</a>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ações
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><?= $this->Html->link('Listar', ['controller' => 'Users', 'action' => 'index'], ['class' => 'dropdown-item']) ?></li>
                <li><?= $this->Html->link('Editar', ['controller' => 'Users', 'action' => 'edit', $user->id], ['class' => 'dropdown-item']) ?></li>
                <li><?= $this->Html->link('Editar Senha', ['controller' => 'Users', 'action' => 'editSenha', $user->id], ['class' => 'dropdown-item']) ?></li>
                <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#apagarRegistro">Excluir</a></li>
            </ul>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<dl class="row">
    <dt class="col-sm-3">Foto</dt>
    <dd class="col-sm-9">
        <?php if (!empty($user->imagem)) { ?>
            <?= $this->Html->image('../files/user/' . $user->id . '/' . $user->imagem, ['class' => 'rounded-circle', 'width' => 120, 'height' => 120]) ?> &nbsp;
        <?php } else { ?>
            <?= $this->Html->image('../files/user/icone_usuario.png', ['class' => 'rounded-circle', 'width' => 120, 'height' => 120]) ?> &nbsp;
        <?php } ?>

        <?= $this->Html->link('Alterar Foto', ['action' => 'alterarFotoUsuario', $user->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
    </dd>
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($user->id) ?></dd>
    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= h($user->name) ?></dd>
    <dt class="col-sm-3">Email</dt>
    <dd class="col-sm-9"><?= h($user->email) ?></dd>
    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9"><?= h($user->username) ?></dd>
    <dt class="col-sm-3 text-truncate">Data de Cadastro</dt>
    <dd class="col-sm-9"><?= h($user->created) ?></dd>
    <dt class="col-sm-3 text-truncate">Última Alteração</dt>
    <dd class="col-sm-9"><?= h($user->modified) ?></dd>
</dl>
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
                <?= $this->Form->postLink('Apagar', ['controller' => 'Users', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>