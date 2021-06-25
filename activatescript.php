<?php
    require("./connect.php");
    require("./cleanup.php");
    $id = sanitize($_POST["id"]);
    $pwh = sanitize($_POST["pwh"]);
    $password = sanitize($_POST["password"]);
    $passwordcheck = sanitize($_POST["passwordcheck"]);

    if (empty($_POST["password"]) || empty($_POST["passwordcheck"])) {
        header("LOCATION: ./index.php?content=error&alert=password-empty&id=$id&pwh=$pwh");
    } elseif (strcmp($password, $passwordcheck)) {
        header("LOCATION: ./index.php?content=error&alert=bad-match&id=$id&pwh=$pwh");
    } else {
        $sql = "SELECT * FROM `register` WHERE `id` = $id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            $record = mysqli_fetch_assoc($result);
            if ($record["activated"]) {
                header("LOCATION ./index.php?content=error&alert=account-already-active");
            }else {
                $newpassword = password_hash($passwordcheck, PASSWORD_BCRYPT);
                $sql = "UPDATE `register` SET `password` = '$newpassword', `activated` = 1 WHERE `id` = $id";
                if (mysqli_query($conn, $sql)) {
                    header("LOCATION ./index.php?content=error&alert=password-changed");
                } else {
                    header("LOCATION ./index.php?content=error&alert=password-change-failed&id=$id&pwh=$pwh");
                }
            }
        } else {
            header("LOCATION: ./index.php?content=error&alert=no-id-pwh-match");
        }
    }
?>