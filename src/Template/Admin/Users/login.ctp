<?= $this->Form->create('post', ['class' => 'form-signin']) ?>
    <?= $this->Html->image('login.jpg', ['class' => 'mb-4', 'alt' => 'Login']) ?>
    <h1 class="h3 mb-3 fw-normal">Área Restrita</h1>
    <?= $this->Flash->render() ?>
    <div class="mb-3">
        <label for="username" class="form-label">Usuário</label>
        <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Digite o usuário', 'label' => false]) ?>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Digite a senha', 'label' => false]) ?>
    </div>
    <?= $this->Form->button(__('Acessar'), ['class' => 'w-100 btn btn-lg btn-primary']) ?>
    <p class="text-muted">
        <?= $this->Html->link(__('Cadastrar'), ['controller' => 'Users', 'action' => 'cadastrar']) ?> - 
        <?= $this->Html->link(__('Esqueceu a senha?'), ['controller' => 'Users', 'action' => 'recuperarSenha']) ?>
    </p>
<?= $this->Form->end() ?>
