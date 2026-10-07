<?php
//1. Write a PHP script to put a string in an array, use the (var_dump) to view the array. 


$string = "Twinkle, twinkle, little star.";

$array = explode(",", $string);

var_dump($array);



//Write a PHP script to print the next letter of the inputted letter.

echo "<br>";
echo "<br>";
echo "<br>";

$letter = "a";


if ($letter == "z") {
    echo "a";
} else {
    $letter++;
    echo $letter;
}

echo "<br>";
echo "<br>";


//3. Write a PHP script to insert a string at the specified position in a given string. 


$string = "The brown fox";

$result = substr_replace($string, " quick", 3, 0);

echo $result;


//4. Remove zeros
$string = "0000657022.24";

$result = ltrim($string, "0");

echo $result;

echo "<br>";
echo "<br>";

//5. Remove trailing dashes

$string = "The quick brown fox jumps over the lazy dog---";

$result = rtrim($string, "-");

echo $result;






echo "<br>";
echo "<br>";
//6. First 5 words
$string = "The quick brown fox jumps over the lazy dog";

$words = explode(" ", $string);

$firstFive = array_slice($words, 0, 5);

$result = implode(" ", $firstFive);

echo $result;



echo "<br>";
echo "<br>";





echo "<br>";
echo "<br>";




//Write a PHP script to remove comma(s) from the following numeric string.

$text="2,543.12";
echo str_replace("," , "" ,$text);

//1. Write a program to calculate and print the Fibonacci sequence
echo "<br>";
echo "<br>";


$a = 0;
$b = 1;

for ($i = 0; $i < 9; $i++) {

    echo $a;

    if ($i < 8) {
        echo ", ";
    }

    $next = $a + $b;
    $a = $b;
    $b = $next;
}

echo "<br>";
echo "<br>";
echo "<br>";

//1. Write a PHP script to see if the specified year is a leap year or not.

$year = 2013;
if($year % 400 ==0){
    echo "This year  a leap year";
}
else{
    echo "This year is not a leap year";
}

//2. Write a PHP script to check the season

echo "<br>";
echo "<br>";

$temp=27;
if($temp<20){
    echo " it is winter";
}
else{
    echo "it is a summertime";
}


echo "<br>";
echo "<br>";

$x=2;
$y=2;
if($x==$y){
    $z=$x+$y;
    
    echo $z*3;
}


echo "<br>";
echo "<br>";


for($i=200 ; $i<=250 ; $i++){
    if($i%4==0){

    
    echo $i .",";
    }

}
echo "<br>";
echo "<br>";

$numbers=[];

for($i=0;$i<10;$i++){
   $num=rand(1, 10);

   echo $num ."<br>";
}







?>
