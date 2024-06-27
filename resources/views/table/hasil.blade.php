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
    <div class="container mt-4">
        <h4 class="text-center">Hasil Calon Kandidat</h4>

    </div>
    <div class="container">
        <div class="row">
            @foreach ( $data as $item )
            <div class="col-sm-4">
                <div class="container mt-5">
                    <div class="card" style="">
                        <img src="{{ asset('image/'.$item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title"> ketos   : {{ $item->nama_ketos }}</h6>
                            <h6 class="card-title"> waketos : {{ $item->nama_waketos }}</h6>
                         
                            <h5>
                                {{ DB::table('hasils')->where('kandidat_id', $item->id)->count() }} sudah vote dari
                                {{ DB::table('pemilihs')->count() }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>

    <script src="{{ asset('Bootstrap4/bootstrap.min.js') }}"></script>
</body>
</html>