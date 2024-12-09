<?php
//pass or fail
$marks = 39;

/* if($marks < 33){
    echo "Failed!";
}else{
    echo "Passed!";
} */


//nested condition

/* if($marks >= 33){
    echo "Congrats! You are passed.";
    if($marks > 50){
        echo "You are selected for the programming department!";
    }else{
        echo "Please contact to the HR.";
    }
}else{
    echo "Sorry! You are failed.";
} */

//ternary operator
/* $result = ($marks<30)?"Failed":"Passed";
echo "You are: $result"; */

//switch case
switch($marks){
    case $marks<33:
        echo "F";
        break;
    case $marks >= 33 && $marks < 40:
        echo "D";
        break;
    case 44:
        echo "B";
        break;
    default:
    echo "Unknown Grade. Try another.";
}
