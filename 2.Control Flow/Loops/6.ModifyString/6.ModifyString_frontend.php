<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="string"/>
        <input type="radio" name="operation" value="palindrome"/> Check Palindrome
        <input type="radio" name="operation" value="reverse"/> Reverse String
        <input type="radio" name="operation" value="split"/> Split
        <input type="radio" name="operation" value="hash"/> Hash String
        <input type="radio" name="operation" value="shuffle"/> Shuffle String
        <input type="submit" value="Submit"/>
    </form>
    <div>
        <?php
        if(isset($output)){
            echo $output;
        }
        ?>
    </div>
</body>
</html>