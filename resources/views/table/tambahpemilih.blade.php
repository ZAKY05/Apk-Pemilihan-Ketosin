<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap4/bootstrap.min.css') }}">
</head>
<body>
    @include('nav_user.usernav')
    <div class="container mt-5">
        <h2 class="text-center mt-3 mb-4">Daftarkan Pemilih</h2>
        <div class="card">
            <div class="card-body">
                <form action="/insertP" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Nama</label>
                      <input type="text" name="name" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">NISN</label>
                      <input type="number" name="NISN" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                      <label for="inputPassword4" class="form-label">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="inputPassword4">
                    </div>
                    
                    
                    <div class="col-12 mt-4">
                      <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('Bootstrap4/bootstrap.min.js') }}"></script>
</body>
</html>