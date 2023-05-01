<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Gender</th>
            <th>Alamat</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td style="text-align: center">{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['npm'] }}</td>
            <td>{{ $student['gender'] }}</td>
            <td>{{ $student['alamat'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>