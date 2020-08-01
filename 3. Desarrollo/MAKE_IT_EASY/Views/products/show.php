
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Detalles</title>

  <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.5/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="Inicio.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

<style>
            body {
  padding-top: 3rem;
  color: #5a5a5a;
}


.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
.featurette-divider {
  margin: 5rem 0; 
}
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}
.image{
  height: 350px;
  width: 350px;
  border-radius: 100%;
}



  
    </style>
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="?clase=Product&method=product"><img src="assets/img/Logo.png" style="width: 50px; height: 50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav" style="margin-right: 14rem">
      </ul>
      <form class="form-inline" action="?clase=Product&method=product" method="POST">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <p class="nav-item">
          <a class="nav-link" href=" "><i class="fas fa-cart-arrow-down fa-lg" style="color: #25D2E2;"></i></a>
      </p>
             <ul style="list-style: none;">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-lg" style="color: #13D433"></i><span><strong style="color: white;">&nbsp;<?php echo $_SESSION['USER']->names.' '.$_SESSION['USER']->last_names ?></strong></span></a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="?clase=Users&method=Index">Crear Usuario</a>
          <a class="dropdown-item" href="?clase=Product&method=create">Crear Producto</a>
          <a class="dropdown-item" href="?clase=Product&method=Index">Cerrar Sesión</a>
        </div>
      </li>
      </ul> 
  </nav>
  <br>
  <br>
  <br>
<?php
           $product=parent::show_id($_GET['id']);
          ?>
<div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <img src="FILES/IMG/<?php echo $product->image ?>" class="image">
      </div>
        <div class="card">
        <div class="card-body">
        <h2><strong style="color: blue"><?php echo $product->product_name ?></strong></h2>
        <br>
        <h3><strong style="color: green">$ <?php echo $product->price ?></strong> </h3>
        <br>
        <h3 style="color: black"> <?php echo $product->description ?> </h3>
        <br>
        
        
        <p><a class="btn btn-danger" href="" role="button"><i class="fas fa-cart-arrow-down"></i>&nbsp;Añadir al Carrito</a></p>
          <a class="btn btn-outline-success" href="?clase=product&method=product">Cancelar</a>
        </div>
        </div>
      </div>
    </div> 
</div>


  </nav>
</header>
<br>
<br>
<br>
<br>

</body>

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
