<!--TASK IS SPLITTED INTO FRONTEND and BACKEND FOR SEPARATION OF CONCERNS (SoC) 
realized with include... in backend file-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="1.SumTwoNumbers.php">
        Operation:
        <select name="operation" id="operation">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
        <br>
        First Number:
        <input type="text" name="firstNum"/>
        <br>
        Second Number:
        <input type="text" name="secondNum"/>
        <br>
        Result:
        <input type="text" name="result" disabled="disabled"value=<?php
            if(isset($output)){
                echo $output;
            }
        ?>
        >
        <br>
        <input type="submit" value="Calculate!" name="calculate"/>
    </form>
</body>
</html>