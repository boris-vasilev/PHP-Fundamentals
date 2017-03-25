<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Number</th>
            <th>Square Root</th>
        </tr>
        <?php
            foreach ($arr as $key=>$value){
                echo "<tr>
                    <td>".
                        $key.
                    "</td>
                    <td>".
                        $value.
                    "</td>
                </tr>";
            }
        ?>
        <tr>
            <td>-</td>
            <td><?php echo array_sum($arr);?></td>
        </tr>
    </table>
</body>
</html>