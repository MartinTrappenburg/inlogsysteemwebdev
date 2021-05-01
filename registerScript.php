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
    $mut = microtime();
    $time = explode("", $mut);
    $password = $time[1] * $time[0] * 1000000;
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $onehour = mktime(1, 0,0, 1, 1, 1970);
    $d = date("d-m-Y", ($time[1] + $onehour));
    $t = date("H:i:s", ($time[1] + $onehour));
    $sql = "INSERT INTO `register` (`id`, `email`, `password`, `userrole`) VALUES (NULL, '$emailclean', '$password_hash', 'user')";

    if (mysqli_query($conn, $sql)) {
        $id = mysqli_insert_id($conn);
        $to = $emailclean;
        $subject = "Confirmation Email";
        $message = '<!doctype html>
                    <html lang="en">
                    <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                    
                        <!-- Bootstrap CSS -->
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
                    
                        <title>Hello, world!</title>
                    </head>
                    <body>
                        <h2>Dear user,</h2>
                        <p>An account was just created with this e-mail address. To complete the verification please click on the link below.</p>
                        <p>Click <a href="http://local.inlogsysteem.org/index.php?content=activate&id=' . $id .'&pwh=' . $password_hash . '">here</a> to activate your account and change the password.</p>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>';
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "FROM: admin@musicsystem.com\r\n";
        $headers .= "Cc: moderator@musicysystem.com";
        mail($to, $subject, $message, $headers);
        header("LOCATION: ./index.php?content=error&alert=register-success");
    } else {
        header("LOCATION: ./index.php?content=error&alert=register-error");
    }
}?>
