<?php
    if (empty($_POST["email"])) {
        header("location: ./index.php?content=error&alert=no-email");
    } else {
        require_once("./connect.php");
        require("./cleanup.php");
        $emailclean = sanitize($_POST["email"]);
        $sql = "SELECT * FROM `register` WHERE `email` = '$emailclean'";

        $results = mysqli_query($conn, $sql);
    }

    if (mysqli_num_rows($results)) {
        header("LOCATION: ./index.php?content=error&alert=emailexists");
    } else {
        $password = "testwachtwoord";
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
    }
?>