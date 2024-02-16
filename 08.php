<?php
function assign_grade($score){
if($score>=90){


 return("Grade A");
}
elseif($score>=80){
    return("Grade B");
 }
 elseif($score>=70){
    return("Grade C");

 }
 elseif($score>=60){
    return("Grade D");
 }
 else{
    return"Grade F";
 }
}
$student_score=85;
$grade="$student_score";
echo"Studenent score $student_score. garde $grade";



?>