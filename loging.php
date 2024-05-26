<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <style>
    body{
      background:	#2F4F4F; /*color degradado */
      background:linear-gradient(to right,#	#696969, #ffe159);
    }
    .bg{
      background-image: url(inicio.jpg);
      background-position:center center;
    }
  </style>
  </head>

<body>
<div class="container w-auto bg-primary mt-auto rounded shadow">
  <div class="row">

     <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">  <!--bgpara que el contenido sea responsive -->
<!-- d-none(es para hacer desaparecer inmediatamnete) -->
     </div>

    <div class="col bg-white p-5 rounded-end">
        <div class="text-center">
          <img src="logo.png" whidth="20" alt="">
        </div>

        <h2 class="py-5 mb-3 fw-bold text-center pt-5">ingrese usuario</h2>
        <form action="validar.php" method="post"> 
  <!--  mb=marginboton  -->
         <br><br>
          <div class="form-group" > 
          USUARIO<input type="text" name="usuario" class="form-control"  id=""> <br>
          </div> 
    
          <div class="form-GROUP" > 
          CONTRASEÑA:<input type="password" name="clave" class="form-control"  id=""><br>
          </div> 
          <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">Recordarme  </label>
          </div>
          <div class="d-grid">
            <button  class="btn btn-primary" type="submit">INGRESAR</button>
          </div> 
          <div>
           <span>si es nuevo, <a href="#">registrate aquí</a> </span><br>
           <span>si olvido su contraseña, <a href="#">recupera aquí</a></span>
          </div>
        </form>
<!-- separar loging con redes -->

    </div>
  </div>
</div>
</body>
</html>