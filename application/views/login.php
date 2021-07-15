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
        <div class="collapse navbar-collapse" style="font-weight: bold;"  id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link link" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row align-items-center justify-content-center mt-5" style='min-height: 80vh'>
        <div class="container shadow p-3 bg-yellow">
          <div class="col-md-12 mt-2">
            <center><h5>JANGAN PAKE SECRETO, PAKE INI AJA</h4></center>
            <p>Masuk bla bla bla bla</p>
            <form action="">
              <input type="text" name="" id="" placeholder="Username" class="form-control" style="margin: .5rem 0 .5rem 0; border-left: 0; border-top: 0; border-right: 0; background-color: #FCFAF5; border-radius: .25rem;">
              <input type="password" name="" id="" placeholder="Password" class="form-control" style="margin: .5rem 0 .5rem 0; border-left: 0; border-top: 0; border-right: 0; background-color: #FCFAF5; border-radius: .25rem;">
              <p class="text-end mt-3 mb-0">Lupa Password?</p>
              <button type="submit" class="btn btn-light text-blue" style="font-family: 'Montserrat'; font-weight: bold; width: 100%;">Masuk</button>
              
              <p class="text-center mb-0 mt-3">Belum punya akun? <a href="<?= base_url('main') ?>" style="text-decoration: none;" class="fw-bold text-blue">&nbsp; Daftar</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <footer class="text-center p-3 text-blue mt-3">
      <h5 style="font-weight: 500">Supported By : Techne.Id</h5>
      <p> © 2021 Dibangun dengan  <i class="bi bi-suit-heart-fill text-blue"></i> by : <a style="text-decoration: none;" class="fw-bold text-blue" href="https://www.linkedin.com/in/ishamashi/">SleepyHead</a></p>
    </footer>
  </body>
</html>