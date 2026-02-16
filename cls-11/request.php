<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Registration</h1>
    <!-- <form action="<?php $_SERVER["PHP_SELF"]?>" method="post"> -->
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <!-- <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"> -->
        <br>
        <input type="submit" value="Register">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "button hit koreche <br/>";
        $name = $_REQUEST["name"];
        
        if(empty($name)){
            echo "name field is empty <br/>";
        }else{
            echo $name;
        }
    }
    ?>
</body>
</html>