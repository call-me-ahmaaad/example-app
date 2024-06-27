<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .avatar{
            border-radius: 50%;
        }
    </style>
</head>

<body>
    @php
        $i = 1;
    @endphp
    <table>
        <thead>
            <tr>No.</tr>
            <tr>Avatar</tr>
            <tr>Name</tr>
            <tr>Age</tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $i }}</td>
                    <td><img class="avatar" src="{{ asset('storage/' . $employee->avatar) }}" alt="Default Profile" height="45px"></td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->age }} years old</td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
        </tbody>
    </table>
</body>

</html>
