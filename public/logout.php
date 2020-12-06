
<?php     
//déconnexion de la seesion courante et rederection ver l'acceuil
    session_start();
    session_destroy();
      
    header("Location: http://localhost/miniporjet/public/index.php")
;?>