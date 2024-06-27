<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap4/bootstrap.min.css') }}">
</head>
<body class="bg bg-gradient-dark">
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mx-auto" style="width: 20rem;">
                    <img class="justify-content-center mx-auto" src="{{  asset('img/kpo (1).png')}}" width="200px" alt="">
                   <div class="card-body">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                      </form>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('Bootstrap4/bootstrap.min.js') }}"></script>
</body>
</html>