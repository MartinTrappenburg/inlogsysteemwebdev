<?php
	#code here
    require_once("./connect.php");
    require("./cleanup.php");
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    if (empty($email) || empty($password)) {
        header("Location: ./index.php?content=error&alert=loginform-empty");
    } else {
        $sql = "SELECT * FROM `register` WHERE `email`= '$email'";
        $result = mysqli_query($conn, $sql);
        if (!mysqli_num_rows($result)) {
            # code...
            header("Location: ./index.php?content=error&alert=email-unknown");
        } else {
            # code...
            $record = mysqli_fetch_assoc($result);
            if (!$record["Activated"]) {
                # code...
                header("Location: ./index.php?content=error&alert=not-active");
            } else {
                # code...
            }
            
        }
        

    }
    var_dump($_POST);
?>