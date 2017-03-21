<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="GET" action =  "2.RenderStudentsInfo.php">
        Delimiter:
        <select name="delimiter" id="delimiter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
        <br>
        Names:
        <input type="text" name="names"/>
        <br>
        Ages:
        <input type="text" name="ages"/>
        <input type="submit"  name="filter"/>
    </form>
    <?php
    if(isset($output_names)&&isset($output_ages)){
        // print_r($output_names);
        if(count($output_names)!=count($output_ages)){
            echo "Incorrect input";
        }else{
            echo "<table border=\"1\"><thead><tr><th>Names</th><th>Ages</th></tr></thead><tbody>";
            for($counter=0; $counter<count($output_names);$counter++){
                echo "<tr><td>$output_names[$counter]</td><td>$output_ages[$counter]</td></tr>";
            }
            echo "</tbody></table>";
        }
    }
    ?>
</body>
</html>