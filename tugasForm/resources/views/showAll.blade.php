<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="  {{ asset('css/styleshow.css') }}">
    <title>{{ $title }}</title>
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

        <div class="showing mt-5 bg-white text-dark">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            {{ $user->nama }}
                        </td>
                        <td>
                            {{ $user->nim }}
                        </td>
                        <td>
                            <a href="/show/{{$user->nim}}" class="btn btn-sm btn-primary mr-2 mb-2">
                                Detail
                            </a>
                            <a href="/edit/{{$user->nim}}" class="btn btn-sm btn-primary mr-2 mb-2">
                                Edit
                            </a>
                            <form action="/delete/{{$user->nim}}" method="post" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger mb-2" onclick="return confirm('apakah data akan dihapus ?') ">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>