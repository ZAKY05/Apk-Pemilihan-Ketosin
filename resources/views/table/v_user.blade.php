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
      <a href="/tambahK"><button class="btn btn-success">Tambah +</button></a>
      <div class="row mt-3">
        <table class="table table-hover shadow-lg">
          <thead class="table table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama ketos</th>
              <th scope="col">Nama waketos</th>
              <th scope="col">Image</th>
              <th scope="col">visi</th>
              <th scope="col">misi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $data as $dts )
              
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $dts->nama_ketos }}</td>
              <td>{{ $dts->nama_waketos}}</td>
              <td><img src="{{ asset('image') .'/'.$dts->image }}" width="70px" class="img-thumbnail" alt=""></td>

              {{-- <td></td> --}}
              <td>{{ $dts->visi}}</td>
              <td>{{ $dts->misi}}</td>
              <td>
                <a href="/deleteK/{{ $dts->id }}"><button class="btn btn-danger">Hapus</button></a>
                <a href="/formeditK/{{ $dts->id }}"><button class="btn btn-warning">Edit</button></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <script src="{{ asset('Bootstrap4/bootstrap.min.js') }}"></script>
</body>
</html>