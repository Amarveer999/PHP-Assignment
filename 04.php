<!-- 4 .Develop a PHP program for a grading system. The program will take a student's score as input and determine the grade based on the following rules:
If the score is less than 60, the grade is 'F'.
If the score is between 60 and 70 (inclusive), the grade is 'D'.
If the score is between 71 and 80 (inclusive), the grade is 'C'.
If the score is between 81 and 90 (inclusive), the grade is 'B'.
If the score is greater than 90, the grade is 'A'.
Provide a PHP code snippet for this program, including the conditional statements to determine the grade based on the input score -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
<input type="number" name="marks" placeholder="Inter Your Marks">
<input type="submit" name="submit">

    </form>
    <?php
    

     if (isset($_POST["submit"])){
        $Marks=$_POST["marks"];

        if($Marks<60){
            echo "F";
        }else if($Marks>=60 && $Marks<=70){
            echo "D";

        }else if($Marks>70 && $Marks<=80){
            echo "C";
        }else if($Marks>81 && $Marks<=90){
            echo "B";
        }else if($Marks>90 && $Marks <=100){
        echo "A";
     }
    }
    


   ?>

</body>
</html>