<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>

    <div class="header">
        <h1>Log In</h1>
    </div>
    <div class="form">
        <form method="post">
            @csrf
            User Name : <input type="text" name="uname" value="{{old('uname')}}"> <br>
            <div style="color: red">{{$errors->first('uname')}}</div>
            Password : <input type="password" name="password"><br>
            <div style="color: red">{{$errors->first('password')}}</div>
            <input type="submit" name="submit" value="Login">
        </form>
        <div>

        </div>
    </div>

</body>

</html>