<?php
//variable 
 
$temperature = 20.33;


echo "the temperature is ".$temperature;

echo "\nMy name varialbe type is: ".gettype($temperature);



/* $price = 30.24;
$age = 28; 
 */






/* echo "My name is Siaedil Basar";
echo "\n";
echo "I am a university student"; */

//variable access
function displayTemperature(){
    global $temperature;
    echo "\nToday temperature value is: ".$temperature;
}

displayTemperature();