<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- My CSS -->
  <link rel="stylesheet" href="  {{ asset('css/style.css') }}" />

  <title>My Portofolio | Ayu Esa</title>
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Pemrograman Internet D</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Project</a>
          </li>
          <!-- <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbo Tron -->
  <section class="jumbotron text-center">
    <img src="img/foto.jpg" alt="Ayu Esa" width="200" class="rounded-circle img-thumbnails" />
    <h1 class="display-4">Ayu Esa</h1>
    <p class="lead">Mahasiswa Universitas Udayana</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#f3f4f5" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,149.3C384,149,480,171,576,154.7C672,139,768,85,864,96C960,107,1056,181,1152,197.3C1248,213,1344,171,1392,149.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>

  <!-- Akhir Jumbo Tron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Biodata Saya</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-md-6">
          <div class="info">
            <p><span>Nama : </span> I Gusti Ayu Esa Sidhi Aksarani</p>
            <p><span>Nim : </span> 2205551020</p>
            <p><span>Kelas : </span> Pemrograman Internet D</p>
            <p>
              <span>Email : </span> aksarani.2205551020@student.unud.ac.id
            </p>
            <p><span>Telepon : </span> 081338142057</p>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffebcd" fill-opacity="1" d="M0,32L40,42.7C80,53,160,75,240,74.7C320,75,400,53,480,53.3C560,53,640,75,720,96C800,117,880,139,960,154.7C1040,171,1120,181,1200,165.3C1280,149,1360,107,1400,85.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
  </section>
  <!-- Akhir About -->

  <!-- Project -->
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Tugas - Tugas</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/project/biodata.png" class="card-img-top" alt="Project 1" />
            <div class="card-body">
              <p class="card-text">
                Tugas Javascript yang menampilkan form untuk menginputkan
                biodata
                <a href="/formData">Klik di sini</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/project/comingsoon.png" class="card-img-top" alt="Project 2" />
            <div class="card-body">
              <p class="card-text">waiting.....</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/project/comingsoon2.png" class="card-img-top" alt="Project 3" />
            <div class="card-body">
              <p class="card-text">Waiting.....</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#f3f4f5" fill-opacity="1" d="M0,224L30,197.3C60,171,120,117,180,101.3C240,85,300,107,360,133.3C420,160,480,192,540,202.7C600,213,660,203,720,181.3C780,160,840,128,900,122.7C960,117,1020,139,1080,133.3C1140,128,1200,96,1260,96C1320,96,1380,128,1410,144L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
  </section>
  <!-- <div class="card" style="width: 18rem">
        <img src="img/project/biodata.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Tugas Javascript</h5>
          <p class="card-text">
            Tugas membuat form untuk menginputkan biodata
          </p>
          <a href="./tugasform.html" class="btn btn-primary">Lihat Tugas</a>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img
          src="img/project/comingsoon.png"
          class="card-img-top"
          alt="..."
        />
        <div class="card-body">
          <h5 class="card-title">Tugas Selanjutnya</h5>
          <p class="card-text">Waiting....</p>
          <a href="#" class="btn btn-primary">soon</a>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img
          src="img/project/comingsoon2.png"
          class="card-img-top"
          alt="..."
        />
        <div class="card-body">
          <h5 class="card-title">Tugas Selanjutnya</h5>
          <p class="card-text">Waiting....</p>
          <a href="#" class="btn btn-primary">soon</a>
        </div>
      </div> -->
  <!-- Akhir Peoject -->

  <!-- Contact -->
  <!-- <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  aria-describedby="name"
                />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  aria-describedby="email"
                />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section> -->
  <!-- Akhir Contact -->

  <!-- Footer -->
  <footer class="bg-secondary text-white text-center">
    <p>
      Created with love by
      <a href="http" class="text-white fw-bold"> Ayu Esa</a>
    </p>
  </footer>
  <!-- Akhir Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>