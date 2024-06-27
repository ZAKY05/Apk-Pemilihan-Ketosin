<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap4/bootstrap.min.css') }}">
</head>
<body>
       
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <img src="{{ asset('img/kpo (1).png') }}" width="60px" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href=""> <span class="sr-only">(current)</span></a>
                </li>
           
              
              </ul>
              <a class="nav-link" href="/logout"><button class="btn btn-danger">Logout</button></a>
             
            </div>
          </nav>
           
    <script src="{{ asset('Bootstrap4/bootstrap.min.js') }}"></script>
</body>
</html>