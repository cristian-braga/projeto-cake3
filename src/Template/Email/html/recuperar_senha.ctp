<h3>Seja bem vindo!</h3>
<p>
  Olá, <?= $name ?>!
  Para continuar, clique no link para recuperar sua senha:
</p>
<p>
  <?= "<a href='" . $host_name . "/users/atualizar-senha/" . $recuperar_senha . "'>Confirmar email</a>" ?>
</p>