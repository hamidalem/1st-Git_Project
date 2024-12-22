<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        body{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        .t1{
border: 1px solid black;
 width: 100%;
 text-align: center;
 font-family: Arial, Helvetica, sans-serif;
 border-collapse: collapse;
 margin-bottom: 50px;
}

.ttd{
 border: 1px solid black;
 text-align: center;


}
img{
 width: 90px;
}
pre{
 font-family: Arial, Helvetica, sans-serif;
 font-size: small;
 font-weight: bold;
}
thead{
    font-size: 10pt;
}

        h4{
            text-align: left;
            font-family: Arial, Helvetica, sans-serif;
            padding-bottom: 20px;
            color: rgb(0, 0, 0);

            margin-left: 50px;


        }
        .t2 {

            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 100px;
        }
        .t2, th, td {
            border: 1px solid #000000;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
    <table class="t1">
        <tr>
            <td class="ttd" style="width:10%"><img src="C:\laragon\www\TPHIS\resources\views\images\naftal.png"></td>
            <td class="ttd" style="width:80%"><h3>Clients Report</h3></td>

<td > <img src="data:image/png;base64,{{ $base64Image }}" alt="QR Code"></td>

        </tr>
    </table>


    <table class="t2">
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
                <tr style="text-transform: uppercase;">
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

    <table class="t1">
        <thead>
            <th>Fait a Cheraga, Le</th>
            <th>Signture De Directeur</th>
            <th>Signture De Chef de Service</th>


        </thead>
        <tr>
            <td style="width:20%; height:100px;"></td>
            <td style="width:60%;height:100px;"></td>
            <td tyle="width:20%; height:100px;"></td>


        </tr>
    </table>





</body>
</html>
