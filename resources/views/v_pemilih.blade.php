<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap4/bootstrap.min.css') }}">
</head>

<body>
    @include('nav_pemilih.navigasi')
    <div class="container mt-4">
        <h4 class="text-center">Calon Kandidat</h4>
    </div>
    {{-- @if ($cek_vote != null)
        <div class="alert alert-danger">
            berhasil vote
        </div> --}}
        <div class="container">
            <div class="row">
                @foreach ($data as $dta)
                    <div class="col-sm-4">
                        <div class="container mt-5">
                            <div class="card" style="">
                                <img src="{{ asset('image/' . $dta->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kandidat {{ $loop->iteration }}</h5>

                                    <a href="/vote/{{ $dta->id }}" class="btn btn-outline-danger">Vote</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    {{-- @endif --}}






    <script src="{{ asset('Bootstrap4/bootstrap.min.js') }}"></script>
</body>

</html>
