<h3>Bem vindo <?= $user['name'] ?></h3>
<?= $this->Html->link(__('Sair'), ['controller' => 'users', 'action' => 'logout']) ?>