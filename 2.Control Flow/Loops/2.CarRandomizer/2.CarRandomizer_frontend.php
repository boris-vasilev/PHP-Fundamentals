<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        table{
            margin-top: 10px;
            border-style:solid;
            border-color:blue;
            border-width:1px;
            border-spacing:0;
        }
    </style>
</head>
<body>
    <form action="2.CarRandomizer.php">
        <input type="text" name="cars"/>
        <input type="submit" value="Submit"/>
    </form>
    <?php
    if(isset($carList)){
        echo "<table border=\"1\">
        <tr>
            <th>
                Car
            </th>
            <th>
                Color
            </th>
            <th>
                Count
            </th>
        </tr>";
        foreach ($carList as $car) {
            echo "
                <tr>
                    <td>$car[0]</td>
                    <td style=\"background-color:$car[1]\"></td>
                    <td>$car[2]</td>
                </tr>
            ";
        }
        echo "</table>";
    }
    ?>
</body>
</html>