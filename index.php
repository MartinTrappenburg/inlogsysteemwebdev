<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <link rel="shortcut icon" href="./img/icon/favicon.ico" type="image/x-icon">
    <title>Well, shit.</title>
  </head>


  <body>
    <h1>Hello, world!</h1>
    <!--banner-->
    <main>
      <section class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php include("./banner.php"); ?>
          </div>
        </div>
      </section>

      <!--navbar-->
      <section class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php include("./navbar.php"); ?>
          </div>
        </div>
      </section>

      <!--content-->
      <section class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php include("./content.php"); ?>
          </div>
        </div>
      </section>

      <!--footer-->
      <section class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php include("./footer.php"); ?>
          </div>
        </div>
      </section>

    </main>
   


    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
  </body>
</html>