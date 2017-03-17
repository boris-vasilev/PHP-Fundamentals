<?php

$name = "Gosho";
$phone="0882-321-423";
$age=24;
$address="Hadji Dimitar";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td,th,table{
            border-width: thin;
            border-style: solid;
        }
        table{
            border-collapse: collapse;
        }
        th,td{
            padding: 10px;
        }
        td{
            text-align: right;
        }
        th{
            text-align: left;
            background-color: darkorange;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <td><?=$name ?></td>
        </tr>
        <tr>
            <th>Phone number</th>
            <td><?=$phone?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?=$age?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?=$address?></td>
        </tr>
    </table>
</body>
</html>
