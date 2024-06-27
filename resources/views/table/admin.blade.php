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
        <a href="/admin/tambah"><button class="btn btn-success">Tambah +</button></a>
        <div class="row">
            <div class="card-body">
                <table class="table table-Active table-hover shadow-lg">
                  <thead class="table table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>              
                      <th scope="col">email</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $data as $dt )
                        
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $dt->name }}</td>
                      <td>{{ $dt->email }}</td>
                      <td>
                        <a href="/admin/delete/{{ $dt->id }}"><button class="btn btn-danger">Hapus</button></a>
                        <a href="/admin/edit/{{ $dt->id }}"><button class="btn btn-warning">Edit</button></a>

                      </td>
                    </tr>
                    @endforeach
            
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    <script src="{{ asset('Bootstrap4/bootstrap.min.js') }}"></script>
</body>
</html>