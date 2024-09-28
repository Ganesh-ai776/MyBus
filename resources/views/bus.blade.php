<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <link rel="stylesheet" href="../css/card.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MyBus</title>
</head>

<body class="bg-dark">
    <div class="cotainer ">
        @isset($bus_company)
            <div class=" text-light text-center">
                <h1>COMPANIES</h1>
            </div>
        @endisset
        @isset($bus_data)
            <div class=" text-light text-center">
                <h1>BUSES</h1>
            </div>
        @endisset
        <div class="row my-5 mx-5 ">
            @if (isset($bus_data) && Auth::check())


                @foreach ($bus_data as $b_data)
                    <div class="col-md-3 my-4 text-light">
                        <div id="bus_card" class="card bg-dark p-2 " style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body px-2">
                                <h5 class="card-title">Bus Name : {{ $b_data->b_name }}</h5>
                                <h6 class="card-title">Bus Number : {{ $b_data->b_number }}</h6>
                                <h6 class="card-title">Bus : {{ $b_data->b_type }}</h6>
                                <h6 class="card-title">Price : {{ $b_data->price }}</h6>
                                <h6 class="card-title">Destination : {{ $b_data->from }} - {{ $b_data->to }} </h6>
                                <a href="{{ route('bus_detail', $b_data->id) }}" class="btn btn-outline-danger">Book</a>
                                {{-- <a href="#" class="btn btn-outline-primary">Book</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
                <footer class="sticky-bottom">
                    <div class="container">
                        <div class="row my-5 mx-5">
                            <a href="{{ route('dashboard') }}" class="btn btn-outline-warning">Back</a>


                        </div>

                    </div>

                </footer>
            @elseif (isset($not_found) && Auth::check())
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                        aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        {{$not_found}}
                    </div>
                </div>
                <div class="row my-5 mx-5">
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-warning">Back</a>


                </div>
            @elseif(isset($admin_bus_data, $c_id) && Auth::check())
                @foreach ($admin_bus_data as $b_data)
                    <div class="col-md-3 my-4 text-light">
                        <div id="bus_card" class="card bg-dark p-2 " style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body px-2">
                                <h5 class="card-title">Bus Name : {{ $b_data->b_name }}</h5>
                                <h6 class="card-title">Bus Number : {{ $b_data->b_number }}</h6>
                                <h6 class="card-title">Bus : {{ $b_data->b_type }}</h6>
                                <h6 class="card-title">Price : {{ $b_data->price }}</h6>
                                <h6 class="card-title">Destination : {{ $b_data->from }} - {{ $b_data->to }} </h6>
                                <a href="{{ route('Edit-Bus-Details', $b_data->id) }}"
                                    class="btn btn-outline-warning">Edit</a>
                                {{-- <a href="{{ route('delete-Bus-Details', $b_data->id) }}" class="btn btn-outline-danger">Delete</a> --}}
                                {{-- <a href="#" class="btn btn-outline-primary">Book</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
                <footer class="sticky-bottom">
                    <div class="container">
                        <div class="row my-5 mx-5">
                            <a href="{{ route('Add-Bus-Page', $c_id) }}" class="btn btn-outline-info">Add-Bus</a>


                        </div>
                        <div class="row my-5 mx-5">
                            <a href="{{ route('dashboard') }}" class="btn btn-outline-warning">Back</a>


                        </div>

                    </div>

                </footer>
            @elseif (isset($bus_company))
                @foreach ($bus_company as $b_company)
                    <div class="col-md-3 my-4 text-light">
                        <div id="bus_card" class="card bg-dark p-2 " style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body px-2">
                                <h5 class="card-title">Name : {{ $b_company->c_name }}</h5>
                                <h6 class="card-title">Address :{{ $b_company->c_address }}</h6>
                                {{-- <h6 class="card-title">Bus : </h6> --}}
                                {{-- <h6 class="card-title">Destination : </h6> --}}
                                <a href="{{ route('Admin-Busses', $b_company->id) }}"
                                    class="btn btn-outline-danger">Show Bus</a>
                                {{-- <a href="#" class="btn btn-outline-primary">Book</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach


        </div>

    </div>
    <footer class="sticky-bottom">
        <div class="container">
            <div class="row my-5 mx-5">
                <a href="{{ route('Add-company-page') }}" class="btn btn-outline-success">Add your Company</a>


            </div>
            <div class="row my-5 mx-5">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-warning">Back</a>


            </div>

        </div>

    </footer>
@else
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <div>
            This page is not accesseble !
        </div>
    </div>
    <a class="btn btn-outline-primary" href="{{ route('dashboard') }}"> Go to Home</a>

    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
