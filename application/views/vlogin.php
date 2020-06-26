<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>PTV Telecom</title>
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/icono.png" sizes="16x16">
   <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?= base_url();?>assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

    <form class="form-signin" id="formLogin" action="<?= base_url();?>clogin/recibo" method="post">
      <img class="mb-4" src="<?php echo base_url();?>assets/img/icono.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Acceder</h1>
      <label for="inputUsuario" class="sr-only">Usuario</label>
      <input type="text" id="inputUsuario" class="form-control" name="usuario" placeholder="Usuario" required autofocus>
      <label for="inputDni" class="sr-only">DNI</label>
      <input type="password" id="inputDni" class="form-control" name="dni" placeholder="DNI" required>
      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Aceptar" id="acceder" name="acceder"></input>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
