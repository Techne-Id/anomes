<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <!-- My CSS -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg text-blue shadow-sm fixed-top" style="background-color: #FBDD54;">
      <div class="container">
        <span class="navbar-brand" href="#">Anomess</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php if (1 == 1) { ?>
        <div class="collapse navbar-collapse" style="font-weight: bold;"  id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="#">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="#">Login</a>
            </li>
          </ul>
        </div>
        <?php } else { ?>
        <div class="collapse navbar-collapse" style="font-weight: bold;"  id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link link" href="#">Login</a>
            </li>
          </ul>
        </div>
        <?php } ?>
      </div>
    </nav>
