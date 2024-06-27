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
        <h2 class="text-center mt-3 mb-4">Edit Data Kandidat</h2>
        <div class="card">
            <div class="card-body">
                <form action="/updatekandidat/{{ $data->id}}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Nama Ketos</label>
                      <input type="text" name="nama_ketos" value="{{ $data->nama_ketos }}" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Nama Waketos</label>
                      <input type="text" name="nama_waketos" value="{{ $data->nama_waketos }}" class="form-control" id="inputPassword4">
                    </div>
                   
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Gambar</label>
                      <input type="file" name="image" value="{{ $data->image }}" class="form-control" id="image">
                    </div>
                   
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Visi</label>
                      <input type="text" name="visi" value="{{ $data->visi }}" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                      <label for="inputPassword4" class="form-label">Misi</label>
                      <input type="text" name="misi" value="{{ $data->misi }}" class="form-control" id="inputPassword4">
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