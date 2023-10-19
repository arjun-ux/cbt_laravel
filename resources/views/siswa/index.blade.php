<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Name</th>
            <th>Role Id</th>
            <th>Role Nama</th>
        </thead>
        <tbody>
            @foreach ($getSiswa as $d)
            <tr>
                {{-- <td>{{ $d->name }}</td> --}}
                <td>{{ $d->name }}</td>
                <td>{{ $d->role_id }}</td>
                <td>{{ $d->Role->role_name }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>
