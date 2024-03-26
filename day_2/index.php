




<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Day 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="index.php" method="GET">
        <label>username</label>
    <input type="text" name="username"/>
    <br />

    <label>Password</label>
    <input type="password" name="password"/>
    <br />

    <input type="submit" value="login"/>
    
        </form>
    </body>
</html> -->




<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Day 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="index.php" method="POST">
        <label>username</label>
    <input type="text" name="username"/>
    <br />

    <label>Password</label>
    <input type="password" name="password"/>
    <br />

    <input type="submit" value="login"/>
    
        </form>
    </body>
</html>
 -->


 <!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Day 2 (ORDER)</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="index.php" method="post">
            <label>
                Quantity:
            </label><br />
            <input type="text" name="quantity" >
            <input type="submit" value="total">


        </form>
     
    </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Day 2 (ORDER)</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <form action="index.php" method="post">
            <label>
                x:
            </label><br />
            <input type="text" name="x" >
            <input type="submit" value="total">
        </form>
     
    </body>
</html>


<?php

// echo "{$_GET["username"]} <br />";
// echo "{$_GET["password"]} <br />";

// echo "{$_POST["username"]} <br />";
// echo "{$_POST["password"]} <br />";

// $item = "pizza";
// $price = 5.99;
// $quantity = $_POST["quantity"];

// $total = $quantity * $price;

// echo "you have ordered $quantity $item at $price each <br />";
// echo "your total $total"

$x = $_POST["x"];

$total = null;

// math func's
// abc!
// round!
// floor!
// ceil!
// pow
// sqrt!
// max!
// min!
// pi!
// rand()!

$total = rand(1,6);



echo $total;

?>
