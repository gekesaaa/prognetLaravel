<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="  {{ asset('css/styleShowData.css') }}">
  <title>Halooo {{ $title }}</title>
</head>

<body>
  <div class=" container">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="row justify-content-center">
      <div class="col col-lg-3">
        <div class="title mt-5">Menampilkan data</div>
      </div>
    </div>

    <div class="showing mt-5">
      <div class="row justify-content-center">
        <div class="col col-lg-1 rounded-start border-2 border-bottom ">
          <p>Nama :</p>
        </div>
        <div class="col col-lg-6 rounded-end border-2 border-bottom">
          <p>{{ $nama }}</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col col-lg-1 rounded-start border-2 border-bottom ">
          <p>NIM :</p>
        </div>
        <div class="col col-lg-6 rounded-end border-2 border-bottom">
          <p>{{ $nim }}</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col col-lg-1 rounded-start border-2 border-bottom">
          <p>Jenis Kelamin :</p>
        </div>
        <div class="col col-lg-6 rounded-end border-2 border-bottom">
          <p>{{ $gender }}</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col col-lg-1 rounded-start border-2 border-bottom">
          <p>Hobi :</p>
        </div>
        <div class="col col-lg-6 rounded-end border-2 border-bottom">
          <p>{{ $hobi }}</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col col-lg-1 rounded-start border-2 border-bottom">
          <p>email :</p>
        </div>
        <div class="col col-lg-6 rounded-end border-2 border-bottom">
          <p>{{ $email }}</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col col-lg-1 rounded-start border-2 border-bottom">
          <p>Alamat :</p>
        </div>
        <div class="col col-lg-6 rounded-end border-2 border-bottom">
          <p>{{ $alamat }}</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col col-lg-1 rounded-start border-2 border-bottom">
          <p>Telpon :</p>
        </div>
        <div class="col col-lg-6 rounded-end border-2 border-bottom">
          <p>{{ $nomor }}</p>
        </div>
      </div>


    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>