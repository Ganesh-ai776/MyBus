<!DOCTYPE html>
<html>

<head>
    <title>MyBus </title>
    <link rel="stylesheet" href="../css/login.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>

<body>
    <div class="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h2>Login(User/User-Admin) </h2>
            <label for="username">Email:</label>
            <input type="text" id="username" name="email"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            {{-- <input type="radio" id="html" name="fav_language" value="Admin">
            <label for="html">Admin</label><br>
            <input type="radio" id="css" name="fav_language" value="User-Admin">
            <label for="css">User-Admin</label><br>
            <input type="radio" id="javascript" name="fav_language" value="User">
            <label for="javascript">User</label> --}}

            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>
