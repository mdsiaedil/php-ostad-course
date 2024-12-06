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

class Test {
    public $weather = "Cold"; // Class property
    public $price = 10;

    function weatherValue() {
        // Use $this->weather to access the class property
        return $this->weather;
    }
}

$weatherObj = new Test();
echo "\n";

echo "The direct access value is: ".$weatherObj ->weather;
// Call the method to access the `weather` property
$myVal = $weatherObj->weatherValue();
echo "\nFunction value is: " . $myVal;

// Update the `weather` property
$weatherObj->weather = "Hot";
echo "\n";
echo $weatherObj->weather;


