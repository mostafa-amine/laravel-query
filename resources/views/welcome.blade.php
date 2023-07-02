<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                {{-- <th>Shops Count</th> --}}
                <th>shop country</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
            <tr>
                <td>{{ $result->id }}</td>
                <td>{{ $result->name }}</td>
                <td>{{ $result->city->country->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>