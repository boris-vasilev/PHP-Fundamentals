<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="nyears"/>
        <input type="submit" value="Submit"/>
    </form>
    <?php
    echo "<table border=\"1\">
        <tr>
            <th>
                Year
            </th>
            <th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>
                Total
            </th>
        </tr>";
    foreach($yearExpensesList as $key=>$value){
        echo"<tr>
            <td>$key</td>";
            for($i=1;$i<=13;$i++){
                echo "<td>$value[$i]</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>