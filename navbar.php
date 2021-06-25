<?php
  if (isset($_GET["content"])) {
    $active = $_GET["content"];
  } else {
    $active = "";
  }
?>
<div id="navbaralign"  class="bg-dark">
  <nav class="navbar container navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href=""><img src="./img/icon/favicon.ico" height="32" width="32px" alt=""> Music Library v1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link <?php if ($active == "home" || $active == "") {echo "active";} ?>" href="./index.php?content=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "genres") {echo "active";} ?>" href="./index.php?content=genres">Genres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "moshpit") {echo "active";} ?>" href="./index.php?content=moshpit ">Moshpit calculator(BMI)</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  <?php if ($active == "contact" || $active == "login" || $active == "register") {echo "active";} ?>" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item <?php if ($active == "contact") {echo "active";} ?>" href="./index.php?content=contact">Contact</a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <?php
      	  if (isset($_SESSION["id"])) {
            switch ($_SESSION["userrole"]) {
              case 'user':
                
              break;
              case 'admin':
                echo 'li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle'; echo (in_array($active, ["a-user", "a-reset_password"])) ? "active" : "";  echo '" href="#" id="navbarDropdownMenuLinkRight" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                  <a class="dropdown-item'; if ($active == "a-user") {echo "active";} echo '" href="./index.php?content=a-user">users</a>
                  <a class="dropdown-item'; if ($active == "a-reset_password") {echo "active";} echo '" href="./index.php?content=a-reset_password">reset password</a>
                </div>';
              break;
              case 'moderator':
                # code...
              break;
              case 'root':
                # code...
              break;
              default:
              break;
            }
            echo '<li class="nav-item">
                    <a class="nav-link" href="./index.php?content=logout">logout</a>
                  </li>';
          } else {
            echo '<li class="nav-item">
            <a class="nav-link" href="./index.php?content=login">login</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="./index.php?content=register">register</a>
        </li>';
          }
        ?>
      </ul>
    </div>
  </nav>
</div>