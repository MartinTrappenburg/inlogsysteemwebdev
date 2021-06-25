<?php
	#code hier
    require_once("./connect.php");
    require("./functions.php");
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);
    var_dump($_POST);
?>