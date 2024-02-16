<!-- Simulate a traffic light system using if-else statements. Log the appropriate message for each color of the 
traffic light (e.g., "Green - Go," "Yellow - Slow down," "Red - Stop"). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form Method="POST"><input type="text" name="input" placeholder="Color Name">
    <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
 if (isset($_POST["submit"])){
     $input=$_POST["input"];
    //  $submit=$_POST["submit"];
    // echo "hero";
    if($input=="red"){
        echo "STOP";
    }
     else if($input=="yellow"){
         echo "Slow Down";
     }
     else if($input=="green"){
        echo "Go";
     }
 }



?>