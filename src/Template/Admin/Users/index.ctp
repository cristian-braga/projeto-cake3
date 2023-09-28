<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="d-flex justify-content-between">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Lista de Usuários</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link('Cadastrar', ['controller' => 'users', 'action' => 'add'], ['class' => 'btn btn-outline-success btn-sm']) ?>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th class="d-none d-sm-table-cell" scope="col">Email</th>
                <th class="d-none d-lg-table-cell" scope="col">Data do Cadastro</th>
                <th class="text-center" scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td class="d-none d-sm-table-cell"><?= h($user->email) ?></td>
                    <td class="d-none d-lg-table-cell"><?= h($user->created) ?></td>
                    <td class="text-center">
                        <span class="d-none d-md-block">
                            <?= $this->Html->link(__('Detalhes'), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                            <?= $this->Html->link('Editar', ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#apagarRegistro">Excluir</a>
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ações
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <?= $this->Html->link(__('Detalhes'), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'dropdown-item']) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'dropdown-item']) ?>
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#apagarRegistro">Excluir</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('pagination') ?>
</div>

<div class="modal fade" id="apagarRegistro" tabindex="-1" aria-labelledby="apagarRegistroLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h1 class="modal-title fs-5" id="apagarRegistroLabel">Excluir Item</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Realmente deseja Excluir o item selecionado?
            </div>
            <div class="modal-footer">
                <?= $this->Form->postLink('Excluir', ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'btn btn-primary']) ?>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>