<?= $this->Form->create($user, ['class' => 'form-signin']) ?>
    <h1 class="h3 mb-3 fw-normal">Alterar Senha</h1>
    <?= $this->Flash->render() ?>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Digite a senha', 'label' => false]) ?>
    </div>
    <?= $this->Form->button(__('Salvar'), ['class' => 'w-100 btn btn-lg btn-primary']) ?>
    <p class="text-muted">
        Já possui cadastro? <?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']) ?>
    </p>
<?= $this->Form->end() ?>
