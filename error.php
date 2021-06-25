<?php
$alert = (isset($_GET["alert"])) ? $_GET["alert"] : "default";
$id = (isset($_GET["id"])) ? $_GET["id"] : "";
$pwh = (isset($_GET["pwh"])) ? $_GET["pwh"] : "";
$email = (isset($_GET["email"]))? $_GET["email"]: "";

switch ($alert) {
  case "no-email":
    echo '<div class="alert alert-danger mt-5" role="alert">
            GEEN E-MAIL INGEVULD.
          </div>';
    header("Refresh: 3; ./index.php?content=register");
    break;
  case "emailexists":
    echo '<div class="alert alert-danger mt-5" role="alert">
            E-mail already exists
          </div>';
    header("Refresh: 3; ./index.php?content=register");
    break;
  case "register-error":
    echo '<div class="alert alert-danger mt-5" role="alert">
            Something went wrong, contact your administrator.
          </div>';
    header("Refresh: 3; ./index.php?content=register");
    break;
  case "register-success":
    echo '<div class="alert alert-success" role="alert">
            Succesfully Registered. You will receive a confirmation e-mail soon!
          </div>';
    header("Refresh: 3; ./index.php?content=login");
    break;
  case "hacker-alert":
    echo '<div class="alert alert-danger mt-5" role="alert">
            Nice try bitch
          </div>';
    header("Refresh: 3; ./index.php?content=register");
    break;
  case "password-empty":
    echo '<div class="alert alert-danger mt-5" role="alert">
            One or more of the password fields were not filled in.
          </div>';
    header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
    break;
  case "bad-match":
    echo '<div class="alert alert-danger mt-5" role="alert">
          The passwords were not identical. Please try again.
        </div>';
    header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
    break;
  case "no-id-pwh-match":
    echo '<div class="alert alert-danger mt-5" role="alert">
        You are not in our database. You will now be redirected to our registration page.
      </div>';
    header("Refresh: 3; ./index.php?content=register");
    break;
    case "password-changed":
      echo '<div class="alert alert-success mt-5" role="alert">
          Password changed successfully
        </div>';
      header("Refresh: 3; ./index.php?content=home");
      break;
      case "password-change-failed":
        echo '<div class="alert alert-danger mt-5" role="alert">
            Unable to update password.
          </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
      case "account-already-active":
        echo '<div class="alert alert-danger mt-5" role="alert">
            Account has already been activated.
          </div>';
        header("Refresh: 3; ./index.php?content=home");
        break;
        case "loginform-empty":
          echo '<div class="alert alert-danger mt-5" role="alert">
              THE FIELDS ARE EMPTY. FILL IT IN AGAIN.
            </div>';
          header("Refresh: 3; ./index.php?content=login");
          break;  
        case "email-unknown":
          echo '<div class="alert alert-danger mt-5" role="alert">
              Unknown login credentials.
            </div>';
          header("Refresh: 3; ./index.php?content=login");
          break;  
          case "not-active":
          echo '<div class="alert alert-danger mt-5" role="alert">
              Your account is inactive. Check your e-mail' . $email . ' for the activation link
            </div>';
          header("Refresh: 3; ./index.php?content=login");
          break;  
  default:
    header("location: ./index.php?content=home");
    break;
}
?>