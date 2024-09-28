<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MyBus</title>
</head>
<body class="bg-dark">
    <div class="container-fluid bg-dark mt-1">
        <div class="row">
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
    


    
</body>
</html>