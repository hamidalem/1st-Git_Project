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
            margin-bottom: 50px;
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
            <td class="ttd" style="width:20%"><img src="C:\laragon\www\TPHIS\resources\views\images\naftal.png"></td>
            <td class="ttd" style="width:60%"><h3>Fonctions Report</h3></td>
 <td>
<pre>Classement : Br.CBR
Reference : 594 000
</pre></td>
        </tr>
    </table>

    <table class="t2">

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

    <table class="t1">
        <thead>
            <th>Fait a Cheraga, Le</th>
            <th>Signture De Directeur</th>
            <th>Signture De Chef De Service</th>


        </thead>
        <tr>
            <td style="width:20%; height:100px;"></td>
            <td style="width:60%;height:100px;"></td>
            <td tyle="width:20%; height:100px;"></td>


        </tr>
    </table>





</body>
</html>
