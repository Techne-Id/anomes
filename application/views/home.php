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
        <span class="navbar-brand" href="#">Username</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
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
      </div>
    </nav>
    <div style='min-height: 80vh'>
      <div class="container p-3 mt-5 bg-yellow">
        <div class="col-md-12 mt-2">
          <center><h5>KIRIM PESAN ANONIM</h4></center>
          <p>Username tidak akan pernah tahu yang mengirim pesan ini</p>
          <form action="">
            <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Tulis Pesan Anonim"></textarea>
            <button type="submit" class="btn btn-light text-blue mt-3" style="font-family: 'Montserrat'; font-weight: bold; width: 100%;">Kirim</button>
          </form>
        </div>
      </div>
      
      <div class="container p-3 mt-3 bg-yellow">
        <h3 class="text-center mb-0">Beranda Username</h3>
      </div>
  
      <div class="container p-3 mt-3 bg-yellow">
        <h5>Pesan</h5>
        <p class="p-1" style="border: solid 1px; border-radius: .25rem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, maxime nulla! Ipsa ab eum vero aliquid eligendi impedit, iure voluptatum voluptates reiciendis.</p>
        <textarea name="" class="form-control" id="" cols="30" rows="2" placeholder="Komentar"></textarea>
        <input type="submit" class="btn btn-light text-blue mb-2" style="font-family: 'Montserrat'; font-weight: bold; width: 100%;" value="Kirim">
        <p class="p-1 mt-1 mb-0" style="border: solid 1px; border-radius: .25rem; font-weight: bold;">Balasan Dari Pemilik Halaman</p>
        <p class="p-1 mt-1 mb-0" style="border: solid 1px; border-radius: .25rem">Komentar yang masuk</p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <footer class="text-center p-3 text-blue mt-3">
      <h5 style="font-weight: 500">Supported By : Techne.Id</h5>
      <p> © 2021 Dibangun dengan  <i class="bi bi-suit-heart-fill text-blue"></i> by : <a style="text-decoration: none;" class="fw-bold text-blue" href="https://www.linkedin.com/in/ishamashi/">SleepyHead</a></p>
    </footer>
  </body>
</html>