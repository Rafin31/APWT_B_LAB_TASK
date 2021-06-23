<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>

<body>

    <div class="header">
        <h1>Sign Up here</h1>
    </div>
    <div class="form">

        <form method="post">

            @csrf
            Full Name : <input type="text" name="Fname" value="{{old('Fname')}}"><br>
            <div class="div" style='color:red'> {{ $errors->first('Fname') }}</div>

            User Name : <input type="text" name="user_name" value="{{old('user_name')}}"><br>
            <div class="div" style='color:red'> {{ $errors->first('user_name') }}</div>

            Email : <input type="Email" name="email" value="{{old('email')}}"><br>
            <div class="div" style='color:red'> {{ $errors->first('email') }}</div>

            Password : <input type="password" name="password"><br>
            <div class="div" style='color:red'> {{ $errors->first('password') }}</div>

            Confirm Password : <input type="password" name="con_password"><br>
            <div class="div" style='color:red'> {{ $errors->first('con_password') }}</div>

            Company Name : <input type="text" name="company_name" value="{{old('company_name')}}"><br>
            <div class="div" style='color:red'> {{ $errors->first('company_name') }}</div>

            Phone Number : <input type="text" name="number" value="{{old('number')}}"><br>
            <div class="div" style='color:red'> {{ $errors->first('number') }}</div>

            City : <input type="text" name="city" value="{{old('city')}}"><br>
            <div class="div" style='color:red'> {{ $errors->first('city') }}</div>

            Country : <input type="text" name="country" value="{{old('country')}}"><br>
            <div class="div" style='color:red'> {{ $errors->first('country') }}</div>

            <input type="submit" name="submit" value="Sign Up">
        </form>
    </div>

</body>

</html>