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
        <h2 class="text-center mt-3 mb-4">Editkan Admin</h2>
        <div class="card">
            <div class="card-body">
                <form action="/admin/update/{{ $data->id }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Nama</label>
                      <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" name="email" value="{{ $data->email }}" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" name="password" value="{{ $data->password }}" class="form-control" id="inputPassword4">
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