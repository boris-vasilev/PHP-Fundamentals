<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="4.PrimesInRange.php">
        Starting Index:
        <input type="text" name="min"/>
        <br>
        End:
        <input type="text" name="max"/>
        <br>
        <input type="submit" value="Submit"/>
    </form>
    <div>
        <?php
        if(isset($_GET["min"])&&isset($_GET["max"])){
            foreach ($numbersList as $value) {
                $isPrime=true;
                for($i=2;$i<=sqrt($value);$i++){
                    if($value%$i==0){
                      $isPrime=false;
                      break;
                    }
                }
                if($isPrime){
                    echo "<b>$value </b>";
                }else{
                    echo $value." ";
                }
            }
        }
        ?>
    </div>
</body>
</html>