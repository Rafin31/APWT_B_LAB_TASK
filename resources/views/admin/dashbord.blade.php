<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashbord</title>
</head>
<table>
    <thead>
        <h1>Welcome Admin || {{session('user_name')}} </h1>
    </thead>
    <tr>
        <td><a href="{{route('customerLists')}}">Customer List </a>|</td>
        <td><a href="http://">Manage Company</a>|</td>
        <td><a href="http://">Manage Stuff</a></td>
    </tr>
    <tr>
        <td><a href="{{route('logout')}}">logout</a></td>
    </tr>
</table>

<body>

</body>

</html>