<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction Report</title>
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

    <h1>Fonctions Report</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID Fonction</th>
                <th scope="col">Fonction</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->idfonction }}</td>
                    <td>{{ $item->Fonction }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
