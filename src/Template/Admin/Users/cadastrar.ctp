<?= $this->Form->create($user, ['class' => 'form-signin']) ?>
    <h1 class="h3 mb-3 fw-normal">Cadastrar</h1>
    <?= $this->Flash->render() ?>
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Digite seu nome', 'label' => false]) ?>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Seu melhor email', 'label' => false]) ?>
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Usuário</label>
        <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Digite o usuário', 'label' => false]) ?>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Digite a senha', 'label' => false]) ?>
    </div>
    <?= $this->Form->button(__('Cadastrar'), ['class' => 'w-100 btn btn-lg btn-success']) ?>
    <p class="text-muted">
        Já possui cadastro? <?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']) ?>
    </p>
<?= $this->Form->end() ?>
