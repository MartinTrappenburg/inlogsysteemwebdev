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
            header("Location: ./index.php?content=error&alert=email-unknown");
        } else {
            $record = mysqli_fetch_assoc($result);
            if (!$record["activated"]) {
                header("Location: ./index.php?content=error&alert=not-active");
            } elseif (!password_verify($password, $record["password"])) {
                header("Location: ./index.php?content=error&alert=email-unknown");
            } else {
                $_SESSION["id"] = $record["id"];
                $_SESSION["userrole"] = $record["userrole"];
                switch($record["userrole"]) {
                    case 'user' :
                        header("Location: ./index.php?content=chome");
                    break;

                    case 'admin' :
                        header("Location: ./index.php?content=ahome");
                    break;

                    case 'moderator' :
                        header("Location: ./index.php?content=mhome");
                    break;

                    case 'root' :
                        header("Location: ./index.php?content=rhome");
                    break;
                }
            }
            
        }
        

    }
    var_dump($_POST);
?>