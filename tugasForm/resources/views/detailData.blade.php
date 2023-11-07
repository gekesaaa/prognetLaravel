<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="  {{ asset('css/styleshowdetail.css') }}">
    <title>{{ $title }}</title>
</head>

<body>
    <div class=" container">
        <div class="row justify-content-center">
            <div class="col col-lg-3">
                <div class="title mt-5">Menampilkan data</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="showing mt-5 rounded-3">
                <p>Nama {{$user->nama}} </p>
                <p>nim {{$user->nim}} </p>
                <p>Jenis Kelamin {{$user->jk}} </p>
                <p>Hobi {{$user->hobi}} </p>
                <p>Status {{$user->status}} </p>
                <p>Email {{$user->email}} </p>
                <p>Alamat {{$user->alamat}} </p>
                <p>nomor {{$user->nomor}} </p>
            </div>
        </div>


    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>