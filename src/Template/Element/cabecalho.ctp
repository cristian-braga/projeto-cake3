<nav class="navbar navbar-expand navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="sidebar-toggle text-light mr-3"><span class="navbar-toggler-icon"></span></a>
    <a class="navbar-brand" href="#">Início</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown">
            <?php if (!empty($perfilUser->imagem)) { ?>
              <?= $this->Html->image('../files/user/' . $perfilUser->id . '/' . $perfilUser->imagem, ['class' => 'rounded-circle', 'width' => 20, 'height' => 20]) ?> &nbsp;
            <?php } else { ?>
              <?= $this->Html->image('../files/user/icone_usuario.png', ['class' => 'rounded-circle', 'width' => 20, 'height' => 20]) ?> &nbsp;
            <?php } ?>
            <span class="d-none d-sm-inline"><?= current(str_word_count($perfilUser->name, 2)) ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li><?= $this->Html->link('<i class="fas fa-user"></i> Perfil', ['controller' => 'users', 'action' => 'perfil'], ['class' => 'dropdown-item', 'escape' => false]) ?></li>
            <li><?= $this->Html->link('<i class="fas fa-sign-out-alt"></i> Sair', ['controller' => 'users', 'action' => 'logout'], ['class' => 'dropdown-item', 'escape' => false]) ?></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>