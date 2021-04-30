<?php
    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";

    switch ($alert) {
        case "no-email" :
            echo '<div class="alert alert-danger mt-5" role="alert">
            GEEN E-MAIL INGEVULD.
          </div>';
          header("Refresh: 3; ./index.php?content=register");
        break;
        case "emailexists" : 
            echo '<div class="alert alert-danger mt-5" role="alert">
            E-mail already exists
          </div>';
          header("Refresh: 3; ./index.php?content=register");
        break;
        
        default:
            header("location: ./index.php?content=home");
        break;
    }
?>