<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action = "5.SumOfDigits.php">
        <input type="text" name="input"/>
        <input type="submit" value="Submit"/>
        <?php
        if(isset($output)){
            echo "<table border = \"1\">";
            foreach($output as $number=>$digSum){
                echo "<tr><td>$number</td><td>$digSum</td></tr>";
            }
            echo "</table>";
            
        }
        ?>
    </form>
</body>
</html>