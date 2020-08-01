<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.5/css//bootstrap.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
   <title>Login</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="?clase=Product&method=product"><img src="assets/img/Logo.png" style="width: 50px; height: 50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="?clase=security&method=form_auth">Ingresar <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="?clase=Users&method=create">Registrarse <span class="sr-only"></span></a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>
<br>
<br>
<br>
<br>
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                  <h1>Bienvenido</h1>
                  <br>
                  <br>
                  <form action="?clase=Security&method=auth_user" method="post">
                     <div class="form-group">
                       <label for="">Correo</label> 
                       <input type="text" placeholder="example@gmail.com" name="email" class="form-control">
                     </div>
                     <div class="form-group">
                       <label for="">Contraseña</label> 
                       <input type="password" name="password" class="form-control">
                     </div>
                     <button class="btn btn-danger">Ingresar</button>
                      
                     <a href="">¿Olvidó su contraseña? </a>
                  </form>                  
               </div>
            </div>
         </div>         
      </div>   
   </div>

</body>
<br>
<br>
<br>
<footer style="background-color: #262630; height: 100px;">
  <br>
  <br>

  <div class="container">
   
    <ul class="list-unstyled list-inline text-center">
      <img src="assets/img/Logo-footer.png" style="width: 150px; height: 50px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1 fa-lg">
          <i style="color: blue; background-color: white; border-radius: 50%; height: 30px;width: 30px" class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i style="color: #1EA9D7; background-color: white; border-radius: 50%; height: 30px;width: 30px" class="fab fa-twitter fa-lg"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i style="color: red; background-color: white; border-radius: 100%; height: 30px;width: 30px" class="fab fa-instagram fa-lg"> </i>
        </a>
      </li>
    </ul>
  </div>
</footer>

<script type="assets/jquery.js"></script>
<script type="assets/bootstrap-4.5/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/bootstrap-4.5/js/bootstrap.bundle.js"></script>
</html>
