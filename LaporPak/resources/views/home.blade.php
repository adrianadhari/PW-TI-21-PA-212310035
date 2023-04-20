<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <title>LapokPak!</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body style="background-color: aliceblue">


    {{-- Header --}}
    <nav class="navbar navbar-expand-lg shadow" style="background-color: #ffffff;">
        <div class="container">
          <a class="navbar-brand fw-bolder" href="/">
            <img src="/assets/img/logo.png" width="30" height="30"> LaporPak!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fw-bold" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold" href="#">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold" href="#">Cek Laporan</a>
              </li>
            </ul>
            <a href="#"><img src="/assets/img/user.png" width="30"></a>
          </div>
        </div>
    </nav>
    {{-- Header --}}

      <div class="container">

        {{-- Hero --}}
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <img src="/assets/img/bg.png" width="600">
            </div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bold d-inline">MELINDUNGI</br>MENGAYOMI</h1>
                <h1 class="display-5 d-inline">DAN</h1>
                <h1 class="display-5 fw-bold">MELAYANI MASYARAKAT</h1>
            </div>
        </div>
        {{-- Hero --}}

        {{-- Content --}}
        <div class="laporan p-3 rounded-4" style="background-color: #ffffff;">
            <div class="row mb-2">
                <div class="col-md">
                    <h4 class="fw-bold">Laporan Terbaru</h4>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-md-2">
                    <img src="/assets/img/laporan-1.jpg" class="rounded" width="200px" height="200px">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md">
                            <p class="fw-light">Adrian Adhari - 20 April 2023</p>
                            <p class="fw-bold">Menganggu sekali!</p>
                            <p>apakah sekarang bole pasang meja makan di trotoar dan meja bakar ayam di trotoar???</p>
                            <div style="margin-top: 20px;width: 15px; height: 15px; background-color: yellow; border-radius: 100px; display:inline-block"></div><p class="d-inline"> Dalam Proses</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border border-secondary">
            <div class="row d-flex align-items-center">
                <div class="col-md-2">
                    <img src="/assets/img/laporan-2.jpg" class="rounded" width="200px" height="200px">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md">
                            <p class="fw-light">Fildza Fatharani Nur Shabrina - 19 April 2023</p>
                            <p class="fw-bold">Mohon perbaikan jalan amarilis 2 rt006 rw009 kel kedungwaringin kec tanah sareal</p>
                            <p>Assalamu'alaikum wr wb, Mohon utk perbaikan jalan dilingkungan rt006 rw009 kel. kdw kec. tansar  L...</p>
                            <div style="margin-top: 20px;width: 15px; height: 15px; background-color: green; border-radius: 100px; display:inline-block"></div><p class="d-inline"> Selesai</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border border-secondary">
            <div class="row d-flex align-items-center">
                <div class="col-md-2">
                    <img src="/assets/img/laporan-3.jpg" class="rounded" width="200px" height="200px">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md">
                            <p class="fw-light">Abu Jahal - 19 April 2023</p>
                            <p class="fw-bold">selokan ditimbun</p>
                            <p>Izin melaporkan, selokan di depan pasar pamoyanan tidak ada atau di timbun, sehingga air tidak meng...</p>
                            <div style="margin-top: 20px;width: 15px; height: 15px; background-color: green; border-radius: 100px; display:inline-block"></div><p class="d-inline"> Selesai</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border border-secondary">
        </div>
        {{-- Content --}}

       </div>

    {{-- Footer --}}
    <footer class="shadow-lg text-end" style="height: 40px; background-color: #ffffff">
        <p style="line-height: 40px; padding-right: 7px">LaporPak! | Kebijakan Privasi | &copy; Copyright 2023. Adrian Adhari</p>
    </footer>
    {{-- Footer --}}

    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>