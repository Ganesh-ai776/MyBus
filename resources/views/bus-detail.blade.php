<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../css/single-card.css" />
    <title>MyBus</title>
</head>

<body>
   

    <!--Movie select option-->
    <div class="movie-container">
         
        
            
    

        <label> Select Bus-Type :</label>
        <select id="ac">
            <option value="{{$bus_data->price}}">{{$bus_data->b_type}}</option>
            {{-- <option value="300">AC</option> --}}
            {{-- <option value="250">Jailer (RS.250)</option> --}}
        </select>
    </div>

    <!--Showcase-->
    <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>Available</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat sold"></div>
            <small>Booked</small>
        </li>
    </ul>

    <!--Main Container-->
    <div class="container">
        {{-- <div class="screen"></div> --}}

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            {{-- <div class="seat"></div>
        <div class="seat"></div> --}}
        </div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            {{-- <div class="seat"></div> --}}
            {{-- <div class="seat"></div> --}}
            {{-- <div class="seat"></div> --}}
        </div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            {{-- <div class="seat sold"></div> --}}
            {{-- <div class="seat sold"></div> --}}
        </div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            {{-- <div class="seat"></div> --}}
            {{-- <div class="seat"></div> --}}
        </div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            {{-- <div class="seat"></div> --}}
            {{-- <div class="seat"></div> --}}
            {{-- <div class="seat"></div> --}}
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            <div class="seat"></div>
            <div class="seat sold"></div>
            {{-- <div class="seat sold"></div> --}}
            {{-- <div class="seat sold"></div> --}}
            {{-- <div class="seat"></div> --}}
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            <div class="seat"></div>
            <div class="seat sold"></div>
            {{-- <div class="seat sold"></div> --}}
            {{-- <div class="seat sold"></div> --}}
            {{-- <div class="seat"></div> --}}
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            {{-- <div class="seat"></div> --}}
            <div class="seat"></div>
            <div class="seat sold"></div>
            {{-- <div class="seat sold"></div> --}}
            {{-- <div class="seat sold"></div> --}}
            {{-- <div class="seat"></div> --}}
        </div>


    </div>

    <p class="text">
         selected Seat : <span id="count">0</span> 
    </p>
    <p class="text">
        Price RS. <span id="total"> 0</span>
    </p>

    <form  action="{{route('b_data_store')}}" method="POST">
        @csrf
        <input  type="hidden" value="{{$bus_data->b_name}}" name="bus_name">
        <input  type="hidden" value="{{$bus_data->b_number}}" name="bus_number">
        <input id="seat_count" type="hidden" value="" name="seat_count">
        <input id="t_price" type="hidden" value="" name="price">
        <input id="submit" type="submit" value="Book">
    </form>

    <script src="../js/script.js"></script>
</body>

</html>
