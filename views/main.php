<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shareboard</title>
    <link rel="stylesheet" href="<?php echo ROOT_URL;?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL;?>assets/css/style.css">
  </head>
    <body>
      <nav class="navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Shareboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL;?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL;?>shares">Shares</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-md-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL;?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL;?>users/register">Register</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>

    <div class="container">
      <div class="row mt-4">
        <?php require $view;?>
      </div>
    </div>
  </body>
</html>
