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
        <h4 class="text-center">Selamat datang dihalaman admin</h4>

    </div>
    <div class="container">
        <div class="row">  
            <div class="col-sm-4">
                <div class="container mt-5">
                    <div class="card" style="">
                        {{-- <img src="{{ asset('img/Kandidat 1.png') }}" width="50px" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                         
                            <h6 class="text-center">
                                <a href="/user">Kandidat</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container mt-5">
                    <div class="card" style="">
                        {{-- <img src="{{ asset('img/Kandidat 2.png') }}" width="50px" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                         
                            <h6 class="text-center">
                                <a href="/tabelpemilih">Pemilih</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container mt-5">
                    <div class="card" style="">
                        {{-- <img src="{{ asset('img/Kandidat 3.png') }}" width="50px" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                         
                            <h6 class="text-center">
                                
                                <a href="/hasil">Hasil</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script src="{{ asset('Bootstrap4/bootstrap.min.js') }}"></script>
</body>
</html>