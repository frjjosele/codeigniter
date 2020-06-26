<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>PTV Telecom</title>
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/icono.png" sizes="16x16">
    <style>
.wrapper {
  position: relative;
  width: 400px;
  height: 200px;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  
}

.signature-pad {
  position: absolute;
  left: 0;
  top: 0;
  width:400px;
  height:200px;
  border: 1px solid black;
}
    </style>
  </head>
  <body class="text-center">
       <br>

     <div class="row">
          <div class="col-md-4 offset-md-4">
               <form id="formulario" method="POST" action="<?=base_url();?>fpdf/crearPdf.php" target="_blank">
                    <img class="mb-4" src="<?php echo base_url();?>assets/img/icono.png" alt="" width="72" height="72">
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" disabled class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" value="<?=$Email?>"  >
                    </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                      <div class="col-sm-10">
                      <input type="text" disabled class="form-control" id="inputNombre" name="inputNombre" value="<?=$Nombre?>" >
                    </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputFirma" class="col-sm-2 col-form-label">Firmar</label>
                      <div class="col-sm-10">
                      <div class="wrapper">
                        <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
                      </div>
                      <br>
                      <button id="clear" type="button" class="btn btn-primary">Borrar Firma</button>
                    </div>
                    </div>
                    <input type="hidden" name="base64" value="" id="base64">
                    <button type="button" class="btn btn-primary" id="aceptar" target="_blank">Aceptar</button>
                    <a href="<?= base_url();?>clogin" class="btn btn-primary" >Atrás</a>
               </form>
          </div>   
          
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      const formularioAceptar=document.getElementById("aceptar");
      const formulario=document.getElementById("formulario");
      const inputEmail=document.getElementById('inputEmail');
      const inputNombre=document.getElementById('inputNombre');
      //Canvas para firmar
         var canvas = document.getElementById('signature-pad');


         
    
    // Adjust canvas coordinate space taking into account pixel ratio,
    // to make it look crisp on mobile devices.
    // This also causes canvas to be cleared.
    function resizeCanvas() {
        // When zoomed out to less than 100%, for some very strange reason,
        // some browsers report devicePixelRatio as less than 1
        // and only part of the canvas is cleared then.
        var ratio =  Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
    }
    
    window.onresize = resizeCanvas;
    resizeCanvas();
    
    var signaturePad = new SignaturePad(canvas, {
      backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
    });    
    document.getElementById('clear').addEventListener('click', function () {
      signaturePad.clear();
    });
    
    //Fin del canvas para firmar
  formularioAceptar.addEventListener('click',function(e){
    var ctx = document.getElementById("signature-pad");
    var image = ctx.toDataURL(); // data:image/png....
    document.getElementById('base64').value = image;
    inputEmail.disabled=false;
    inputNombre.disabled=false;

    formulario.submit();
    alert("Operación realizada con éxito");
    inputEmail.disabled=true;
    inputNombre.disabled=true;
    inputEmail.value="";
    inputNombre.value="";
    signaturePad.clear();




    });
    </script>
  </body>
</html>