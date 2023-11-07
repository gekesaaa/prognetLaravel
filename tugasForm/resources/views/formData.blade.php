<!DOCTYPE html>
<html lang="en">

<head>
  <!--  meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="  {{ asset('css/styleFormData.css') }}" />

  <title>Form Data Diri</title>
</head>

<body>
  <section class="inputForm" id="inputForm">
    <div class="row justify-content-center">
      <div class="col col-lg-3 mt-lg-3">
        <h1 class="heading">Form <span>Data Diri</span></h1>
      </div>
    </div>

    <div id="form" class="form mt-3 mb-5">
      <form action="/store" method="post" onsubmit="return validateForm();">
        @csrf
        <div class="container">
          <div class="row justify-content-center">
            <div class="col col-lg-6 p-5">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama') }}" />
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{old('nim') }}" />
                @error('nim')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <label class="form-check-label mb-1" for="jk">Jenis Kelamin</label>
              <div class="mb-3 d-flex ms-3" id="jk">
                <div class="form-check">
                  <input class="form-check-input border-5" type="radio" name="jk" id="pria" value="pria" checked />
                  <label class="form-check-label" for="pria">Laki - Laki
                  </label>
                </div>

                <div class="form-check ms-5">
                  <input class="form-check-input border-5" type="radio" name="jk" id="wanita" value="wanita" />
                  <label class="form-check-label" for="wanita">
                    Perempuan
                  </label>
                </div>
              </div>

              <div class="mb-3">
                <label for="hobi" class="form-label">Hobi</label>
                <input type="text" class="form-control @error('hobi') is-invalid @enderror" id="hobi" name="hobi" value="{{old('hobi') }}" />
                @error('hobi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <label class="form-check-label mb-1" for="sts">Status Penikahan</label>
              <div class="mb-3 d-flex ms-3" id="sts">
                <div class="form-check">
                  <input class="form-check-input border-5" type="radio" name="status" id="menikah" value="bekerja" checked />
                  <label class="form-check-label" for="menikah">
                    Belum Menikah
                  </label>
                </div>

                <div class="form-check ms-5">
                  <input class="form-check-input border-5" type="radio" name="status" id="single" value="menikah" />
                  <label class="form-check-label" for="single">
                    Menikah
                  </label>
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{old('email') }}" />
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{old('alamat') }}" />
                @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="nomor" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor" value="{{old('nomor') }}" />
                @error('nomor')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="col col-lg-12 d-flex justify-content-center">
                <button type="submit">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>