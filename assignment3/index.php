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

echo "Rishita's average mark is = {$average}";

echo "<br>";
echo "<br>";





// Grade Message

$mark = 85;

if($mark>=80 && $mark<=100){
    echo "You got: A+";
}

elseif($mark>=70 && $mark<=79){
    echo "You got: A";
}

elseif($mark>=60 && $mark<=69){
    echo "You got: A-";
}

elseif($mark>=50 && $mark<=59){
    echo "You got: B";
}

elseif($mark>=40 && $mark<=49){
    echo "You got: C";
}

elseif($mark>=0 && $mark<=39){
    echo "Sorry, Failed!";
}
else{
    echo "You entered wrong mark, please enter 1 - 100";
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