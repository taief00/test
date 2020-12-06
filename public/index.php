<?php
  
  // Include database file
  include '../php/product/product.php';
    session_start();
  $productObj = new produits();

  // Delete record from table

     
?> 


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>beauty crush</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

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
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <?php
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

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
         <img src="../php/product/img_dir/nv1.jpg" width="100%" height="100%" fill="#777">  
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container" >
          <!-- parite 1-->
          <div class="carousel-caption text-left">
                     
            <h1>GIVENCHY  L’INTERDIT</h1>

            <p>Givenchy signe L’INTERDIT sa nouvelle fragrance. Hommage à une féminité audacieuse. Ne rien s'interdire. Ne rien se laisser interdire.</p>
            <p><a class="btn btn-lg btn-primary" href="../public/product.php" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
                 <img src="../php/product/img_dir/nv2.jpg" width="100%" height="100%" fill="#777">  

        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption">
            <h1>MY WAY GIORGIO ARMANI </h1>
            <p>My Way, la nouvelle Eau de Parfum florale pour femme de Giorgio Armani propose aux femmes un modèle de féminité naturelle et authentique. Elle transporte l'esprit et les sens, invite à la découverte du monde, à des rencontres inoubliables, à des expériences d’exception.</p>
            <p><a class="btn btn-lg btn-primary" href="../public/product.php" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
                         <img src="../php/product/img_dir/nv3.jpg" width="100%" height="100%" fill="#777">  

        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1> DOLCE & GABBANA The Only One 2 .</h1>
            <p>
Description

The Only One 2 : le deuxième chapitre de la saga The Only One.</p>
            <p><a class="btn btn-lg btn-primary" href="../public/product.php" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <!--partie2-->
    <div class="row">
      <div class="col-lg-4">
        <img src="../php/product/img_dir/p1.jpg">
        <h2> BOURJOIS Délice De Poudre Highlighting Palette</h2>
        <p> La plus délicieuse des palettes illuminatrices pour une peau exquise et qui vous fera fondre de plaisir !</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="../php//product/img_dir/p2.jpg">
        <h2> CLARINS Mission Perfection Sérum </h2>
        <p>Taches, dyschromies, zones d’ombre, marques liées à l’acné, teint terne, rougeurs…
Fruit d’une avancée scientifique majeure, ce sérum anti-taches avant-gardiste dédié à toutes les femmes combat les désordres pigmentaires et fait renaître la plus belle des lumières, sans dénaturer la carnation.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="../php//product/img_dir/p3.jpg">
        <h2> ISADORA Fond De Teint Active All Day Wear</h2>
        <p>Le fond de teint IsaDora Active All Day Wear est la solution parfaite.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
<!--partie 3-->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"> Coffret <br> Eros Femme Eau De Parfum <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Eros, dieu de l'amour, rencontre son véritable amour, Eros pour Femme. Leur attraction est immédiate, mais qui séduit qui? Versace dévoile avec le nouveau parfum Eros pour Elle la puissance d'une femme qui tient à son indépendance..</p>
      </div>
      <div class="col-md-5">
        <img  src="../php/product/img_dir/c1.jpg" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Coffret <br> Gentleman Eau De Parfum 100 Ml <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Ce coffret contient :<br>
-Gentleman Eau De Parfum 100 ml<br> 
-Miniature Eau De Parfum 15 ml.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img  src="../php/product/img_dir/c2.jpg" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Coffret <br> CH Pour Femme Prive Eau De Parfum 80 Ml . <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Ce coffret contient :<br>

      -CH Pour Femme Privé Eau De Parfum 80 ml <br>

         Lait Pour Le Corps 75 ml.</p>
      </div>
      <div class="col-md-5">
        <img  src="../php/product/img_dir/c3.jpg" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2020-2021 Company, esprit. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
