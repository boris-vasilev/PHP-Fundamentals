<?php

$name = $_GET["name"];
$age = $_GET["age"];
$gender = $_GET["gender"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="7.GetFormData.php" method="GET">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Name...">
    <br>
    <label for="age">Age:</label>
    <input type="text" name="age" placeholder="Age...">
    <br>
    <input type="radio" name="gender" value="Male"> Male
    <br>
    <input type="radio" name="gender" value="Female"> Female
    <br>
    <input type="submit">
</form>
<?php if (isset($name) && isset($age) && isset($gender)) {
    echo "<h1>My name is $name I am $age years old I am $gender</h1>";
} ?>
</body>
</html>
