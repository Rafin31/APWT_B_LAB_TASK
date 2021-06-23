<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users List</title>
</head>

<body>

    <table border="1">
        <th>user ID</th>
        <th>Full Name</th>
        <th>user Name</th>
        <th>user Email</th>
        <th>user Phone Number</th>
        <th>user Company</th>
        <th>user City</th>
        <th>user Country</th>
        <th>user Type</th>
        <th>Action</th>


        @foreach ($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->Full_name}}</td>
            <td>{{$user->user_name}}</td>
            <td>{{$user->Email}}</td>
            <td>{{$user->Phone_Number}}</td>
            <td>{{$user->Company}}</td>
            <td>{{$user->City}}</td>
            <td>{{$user->Country}}</td>
            <td>{{$user->User_type}}</td>
            <td><button>Edit</button>||<button>Delete</button></td>
        </tr>

        @endforeach





    </table>


</body>

</html>