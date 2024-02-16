<!-- 3.Create a PHP program for a fitness app. The program will take the number of steps walked in a day as input and determine the fitness level based on the following rules:
If the number of steps is less than 5000, the fitness level is 'Beginner'.
If the number of steps is between 5000 and 10000 (inclusive), the fitness level is 'Intermediate'.
If the number of steps is greater than 10000, the fitness level is 'Advanced'.
Provide a PHP code snippet for this program, including the conditional statements to determine the fitness level based on the input number of steps. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
   
      <input type="number" name="step" placeholder="Input Your walked Step"> 
      <input type="submit" values="Submit" name="submit">

    </form>

    <?php
       if (isset($_POST["submit"])) {
            $input = $_POST["step"];
      
            if ($input <= 5000) {
                echo "You are a Beginner";
            } else if ($input > 5000 && $input < 10000) {
                echo "Intermediate";
            }else if($input>10000){
              echo "Advanced";
            }
        }
    ?>
</body>
</html>