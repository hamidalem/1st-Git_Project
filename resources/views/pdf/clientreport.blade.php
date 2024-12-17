<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
            padding-bottom: 20px;
            color: rgb(47, 47, 222);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>Clients Report</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Fonction</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->idclient }}</td>
                    <td>{{ $item->FirstName }}</td>
                    <td>{{ $item->LastName }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->fonction ? $item->fonction->Fonction : 'No Fonction' }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
