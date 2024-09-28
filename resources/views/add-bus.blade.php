<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyBus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
        }

        .main h2 {
            color: #4caf50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 15px;
            border-radius: 10px;
            border: none;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="main">
        <h2>ADD BUS</h2>
        <form action="{{ route('Add-Bus') }}" method="post">
            @csrf
            <label for="first">Bus-Name :</label>
            <input type="text" id="first" name="b_name" required />
            <label for="first">Bus-Number :</label>
            <input type="text" id="first" name="b_number" required />
            <label for="first">From :</label>
            <input type="text" id="first" name="from" required />
            <label for="first">To :</label>
            <input type="text" id="first" name="to" required />
            <label for="first">Price :</label>
            <input type="text" id="first" name="price" required />
            <label for="gender">Bus-Type :</label>
            <select id="gender" name="b_type" required>
                <option value="AC">
                    AC
                </option>
                <option value="Non-AC">
                    Non-AC
                </option>
                
            </select> 
            <input type="hidden"  name="c_id" value="{{$id}}" required />
            <input type="hidden"  name="u_id" value="{{Auth::user()->id}}" required />

            {{-- <label for="last">Last Name:</label>
            <input type="text" id="last" name="last" required /> --}}
{{-- 
            <label for="email">Company-Address :</label>
            <input type="text" id="email" name="c_address" required />
            <input type="hidden"  name="u_id" value="{{Auth::user()->id}}" required /> --}}

            
            
            <button type="submit">
                ADD
            </button>
        </form>
    </div>
    
</body>
</html>