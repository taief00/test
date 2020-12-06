<?php
  
  // Include database file
  include '../php/product/product.php';
    session_start();
  $productObj = new produits();

  

     
?> 




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Produits</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        
      </div>
    </div>
  </div>
   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <?php
    //affichage de nom de l'utilisateur courant
        if(!empty($_SESSION['id'])){   
            echo"<a class='navbar-brand'> Welcome " . $_SESSION['username'] . "</a>";
        }
    ?>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../public/index.php">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../public/product.php">Produits</a>
      </li>
     
     
    </ul>
    <form action="login.php" class="form-inline my-2 my-lg-0">
      <?php
        if(!empty($_SESSION['id'])){
          echo"<a class='nav-link' href='logout.php'>logout <span class='sr-only'>(current)</span></a>";
        }
        else{
          echo"<button class='btn btn-outline-success my-2 my-sm-0' type='submit'>login</button>";
          echo"<a class='nav-link' href='signup.php'>signup <span class='sr-only'>(current)</span></a>";


        }

     
      ?>

    </form>
  </div>
</nav>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1> Produits</h1>
      
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <!-- affichage de la liste produits-->
         <?php 
          $prods = $productObj->displayData(); 
          
          foreach ($prods as $prod) {
        ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <?php $img= $prod['image'] ;?>
        <?php echo " <img  class='bd-placeholder-img card-img-top' width='100%' height='225' src='$img'>";?>
            <div class="card-body">
              <p class="card-text"><?php echo $prod['name'] ?></p>
              <div class="d-flex justify-content-between align-items-center">
              
                <small class="text-muted"><?php echo $prod['price'] ?></small>
              </div>
            </div>
          </div>
            
        </div>
         <?php } ?>
       
      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
   
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
