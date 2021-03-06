<!DOCTYPE html>
<html lang="pl">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Ankiety PE-EL</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
               <a class="navbar-brand" href="{{ route('main') }}">ANKIETY PE-EL</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                    @if (Route::has('login'))
                    <ul class="navbar-nav">
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="#">Strona główna</a>
                              </li>
                              @auth
                                   <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                                   </li>
                              @else
                                   <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                   </li>
                                   @if (Route::has('register'))
                                        <li class="nav-item">
                                             <a class="nav-link" href="{{ route('register') }}">Rejestracja</a>
                                        </li>
                                   @endif
                              @endauth
                    </ul>
                    @endif
               </div>
          </div>
     </nav>
     @yield('maincontent')

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>