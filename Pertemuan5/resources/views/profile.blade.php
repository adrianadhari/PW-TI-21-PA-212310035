<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tabel Akademik</title>
    <style>
        table, th, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            width: 400px;
        }
        th {
            background-color: grey;
        }
        td {
            text-align: left;
        }
        .checked {
            color: orange;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Course</th>
            <th>Type</th>
            <th>Rate</th>
        </tr>
        <tr>
            <td rowspan="2">{{ $data[0]['Course'] }}</td>
            <td>{{ $data[0]['Type'] }}</td>
            <td>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </td>
        </tr>
        <tr>
            <td>{{ $data[1]['Type'] }}</td>
            <td>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </td>
        </tr>
        <tr>
            <td>{{ $data[2]['Course'] }}</td>
            <td>{{ $data[2]['Type'] }}</td>
            <td>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </td>
        </tr>
        <tr>
            <td>{{ $data[3]['Course'] }}</td>
            <td>{{ $data[3]['Type'] }}</td>
            <td>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </td>
        </tr>
    </table>
</body>
</html>