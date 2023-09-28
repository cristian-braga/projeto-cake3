<h3>Seja bem vindo!</h3>
<p>
  Olá, <?= $name ?>!
  Para continuar, clique no link para validar seu email:
</p>
<p>
  <?= "<a href='" . $host_name . "/users/conf-email/" . $cod_val_email . "'>Confirmar email</a>" ?>
</p>