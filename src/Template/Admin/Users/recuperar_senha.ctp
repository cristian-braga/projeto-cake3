<?= $this->Form->create($user, ['class' => 'form-signin']) ?>
    <h1 class="h3 mb-3 fw-normal">Recuperar Senha</h1>
    <?= $this->Flash->render() ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Seu melhor email', 'label' => false]) ?>
    </div>
    <?= $this->Form->button(__('Recuperar'), ['class' => 'w-100 btn btn-lg btn-warning']) ?>
    <p class="text-muted">
        Já possui cadastro? <?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']) ?>
    </p>
<?= $this->Form->end() ?>
