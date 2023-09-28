<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="d-flex justify-content-between">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Perfil</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link('Editar', ['controller' => 'Users', 'action' => 'editPerfil'], ['class' => 'btn btn-outline-warning btn-sm']) ?>
            <?= $this->Html->link('Editar Senha', ['controller' => 'Users', 'action' => 'editSenhaPerfil'], ['class' => 'btn btn-outline-dark btn-sm']) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ações
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><?= $this->Html->link('Editar', ['controller' => 'Users', 'action' => 'editPerfil'], ['class' => 'dropdown-item']) ?></li>
                <li><?= $this->Html->link('Editar Senha', ['controller' => 'Users', 'action' => 'editSenhaPerfil'], ['class' => 'dropdown-item']) ?></li>
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

        <?= $this->Html->link('Alterar Foto', ['action' => 'alterarFotoPerfil'], ['class' => 'btn btn-outline-primary btn-sm']) ?>
    </dd>
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $user->id ?></dd>
    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= $user->name ?></dd>
    <dt class="col-sm-3">Email</dt>
    <dd class="col-sm-9"><?= $user->email ?></dd>
    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9"><?= $user->username ?></dd>
</dl>