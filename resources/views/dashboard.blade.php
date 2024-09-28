<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/destination.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

    <title>MyBus</title>
</head>

<body style="background-color:#9797a1">
    <div>
        {{-- < class="container"> --}}
        {{-- @include("components/navbar.blade.php"); --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                <img class="navbar-brand" id="img" src="../image/bus-logo.png" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        {{-- {{$user=null}} --}}

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>

                            <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" style="color:blue" href="{{ route('business') }}">Create
                                        Your Business</a></li>
                                {{-- <li> {{ $user->name}}</li> --}}
                                {{-- <li> {{ Auth::user()->email }}</li> --}}
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">setting</a></li>
                                @if (Auth::check())
                                    <hr class="dropdown-divider">
                                    <a href="{{ route('logout') }}"><button onclick="alert('are you sure ?')"
                                            class="btn btn-outline-danger" type="submit">Logout</button></a>
                                @endif

                            </ul>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> {{strToUpper( $user->name)}}</a>
                        </li> --}}

                        @if (Auth::check() && Auth::user()->role == 'user')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Booking
                                </a>
                                <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                    {{-- <li><a class="dropdown-item" href="#">Action</a></li> --}}
                                    {{-- <li> {{ $user->name}}</li> --}}
                                    <li> </li>
                                    <li>
                                        {{-- <hr class="dropdown-divider"> --}}
                                    </li>
                                    <li><a href="{{ route('Booking-details') }}"><button class="btn btn-outline-danger"
                                                type="submit">Booking
                                                Details</button></a></li>
                                    {{-- <hr class="dropdown-divider"> --}}

                                </ul>
                            </li>
                        @endif
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Bus or Company-Name" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>


                </div>
            </div>
        </nav>
        <div class="container-fluid bg-dark text-light">
            <div class="row ">
                <div class="col-md-6 text-center p-5  ">
                    <h1>Welcome to MyBus</h1>
                    <h3>choose your own bus</h3>
                    <h3>Travel Savely</h3>
                    <div class="row" id="login_box"> {{-- style="border:1px solid red" --}}
                        <div class="col-md-6 m-5">
                            @if (Auth::check())
                                <img style="border-radius:100px;hight:150px;width:150px;" src="{{asset('/storage/'.Auth::user()->image)}}" alt="">
                                <h1 id=name>{{ strToUpper(Auth::user()->name) }}</h1>
                                @if (Auth::user()->role == 'user-admin')
                                    <a class="btn btn-success" href="{{ route('user-admin') }}">go to user-admin</a>
                                @endif
                            @else
                                <a href="{{ route('loginPage') }}"><button type="button"
                                        class="btn btn-outline-info m-3">Login</button></a>

                                <a href="{{ route('Bus-Registration', 'user') }}"><button type="button"
                                        class="btn btn-outline-warning">Sign Up</button></a>
                                {{-- <button id="myBtn">sig up</button> --}}
                            @endif

                        </div>

                    </div>
                </div>
                <div class="col-md-6 p-3 bg-dark">

                    <img src="https://freepngimg.com/thumb/bus/3-2-bus-picture.png" class="img-fluid rounded"
                        alt="...">
                </div>
            </div>
        </div>
        {{-- </div> --}}


     <div class="container-fluid bg-dark mt-1 p-5" style="display:flex;justify-content:center;">
        <div class="main bg-dark">
            <h2>FIND YOUR BUS</h2>
            <form action="{{route('Find-Bus')}}" method="post">
                @csrf
                <label for="first">From :</label>
                <input type="text" id="first" name="from" required />

                {{-- <label for="last">Last Name:</label>
                            <input type="text" id="last" name="last" required /> --}}

                <label for="email">To :</label>
                <input type="text" id="email" name="to" required />
                {{-- <input type="hidden" name="u_id" value="{{ Auth::user()->id }}" required /> --}}



                <button id="d_s" type="submit">
                    FIND
                </button>
            </form>
        </div>
    </div>
        {{-- <input class="btn btn-success" type="submit"> --}}




        <div class="container-fluid bg-dark mt-1">
            <div class="row text-center ">
                @isset($c_data)


                    @foreach ($c_data as $c_p_data)
                        <div class="col-md-2 my-5">
                            <div class="card bg-dark text-light">
                                <img src="" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $c_p_data->c_name }}</h5>
                                    <p class="card-text">{{ $c_p_data->c_address }}</p>
                                </div>

                                <div class="card-body">
                                    {{-- <a href="#" class="card-link">Card link</a> --}}
                                    <a href="{{ route('Buses', $c_p_data->id) }}" class="card-link"><button
                                            class="btn btn-primary" type="submit">Check</button></a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endisset
            </div>
        </div>








    </div>
    <footer>
        <div class="container-fluid bg-dark text-light mt-1">
            <div class="row">
                <div class="col-md-4">
                    <p>Email : gm4094214@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <p>Contact : +917001543619</p>
                </div>
                <div class="col-md-4">
                    <p>2022-2024 / <a href="">MyBus.com</a></p>

                </div>
            </div>
        </div>
    </footer>
    </div>
    <script src="../js/modal.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
