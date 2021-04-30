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
          <a class="nav-link <?php if ($active == "pricing") {echo "active";} ?>" href="./index.php?content=pricing">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  <?php if ($active == "contact" || $active == "login" || $active == "register") {echo "active";} ?>" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item <?php if ($active == "contact") {echo "active";} ?>" href="./index.php?content=contact">Contact</a>
            <a class="dropdown-item <?php if ($active == "login") {echo "active";} ?>" href="./index.php?content=login">login</a>
            <a class="dropdown-item <?php if ($active == "register") {echo "active";} ?>" href="./index.php?content=register">Register</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>