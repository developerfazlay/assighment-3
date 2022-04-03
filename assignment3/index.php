<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-3 by Fazlay Rabbi</title>
</head>
<body>

<?php 

echo "<u>Assignment-3 by Fazlay Rabbi</u>";
echo "<br>";
echo "<br>";
echo "<br>";
//No#1 Questions Answer:


// Average

$SubjectA = 75;
$SubjectB = 80;
$SubjectC = 65;
$SubjectD = 90;

$total = ($SubjectA+$SubjectB+$SubjectC+$SubjectD);
$average = $total/4;

echo "Rishita's average average is = {$average}";

echo "<br>";
echo "<br>";





// Grade Message



if($average>=80 && $average<=100){
    echo "You got: A+";
}

elseif($average>=70 && $average<=79){
    echo "You got: A";
}

elseif($average>=60 && $average<=69){
    echo "You got: A-";
}

elseif($average>=50 && $average<=59){
    echo "You got: B";
}

elseif($average>=40 && $average<=49){
    echo "You got: C";
}

elseif($average>=0 && $average<=39){
    echo "Sorry, Failed!";
}
else{
    echo "You entered wrong average, please enter 1 - 100";
}


echo "<br>";
echo "<br>";


//No#2 Questions Answer:


$bike_function = "headlight";

switch($bike_function){
    case "start":
        echo "Bike start";
        break;
    case "stop":
        echo "Bike stop";
        break;
    case "break":
        echo "Bike on Break";
        break;  
    case "gear":
        echo "Bike on gear";
        break;
    case "signal":
        echo "Signal light On";
        break;   
    case "headlight":
        echo "Headlight On";
        break; 
    default:
         echo "Bike now on default mode";
    

}






?>
    
</body>
</html>
