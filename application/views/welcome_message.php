<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin Template · Bootstrap</title>

   <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?= base_url();?>assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" id="formLogin">
      <img class="mb-4" src="<?php echo base_url();?>assets/img/icono.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Acceder</h1>
      <label for="inputUsuario" class="sr-only">Usuario</label>
      <input type="text" id="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>
      <label for="inputDni" class="sr-only">DNI</label>
      <input type="password" id="inputDni" class="form-control" placeholder="DNI" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <input class="btn btn-lg btn-primary btn-block" type="button" value="Acceder" id="acceder"></input>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  const formulario=document.getElementById("acceder");
  const inputUsuario=document.getElementById("inputUsuario");
  const inputDni=document.getElementById("inputDni");
  eventListener();


  function eventListener(){
    formulario.addEventListener('click',enviarDatosLogin);
  }

  //ajax con jquery
  function enviarDatosLogin(e){
    e.preventDefault();
    if(inputUsuario.value==="13242" && inputDni.value==="44358696E"){
      $.ajax({
   
        url:"http://212.225.255.130:8010/ws/accesotec/"+inputUsuario.value+"/"+inputDni.value,
        //data:{usuario:inputUsuario.value,dni:inputDni.value},
        type:"get",
        crossDomain:true,
        dataType:"jsonp",

        success:function(data){
          console.log("mostrar datos");
          
        },
        error:function(error){
          console.log(error)
        },
        headers:{
          'Access-Control-Allow-Origin': '*'
        }
      });
      //console.log(inputUsuario.value,inputDni.value);
    }
  }
  /* $.ajax({
    url:"http://212.225.255.130:8010/ws/accesotec/usuario/dni"
  }); */


/* function enviarDatosLogin(e){
  if(window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();

  }else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState === 4 && xmlhttp.status ===200){
      if(xmlhttp.responseXML !== null){
        console.log(xmlhttp.responseXML);
      }
    }
  }
  xmlhttp.open("GET","http://212.225.255.130:8010/ws/accesotec/13242/44358696E",true );
  xmlhttp.send();
} */
</script>
</body>
</html>
