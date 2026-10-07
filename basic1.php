<?php
//1. 
$colors = array('white', 'green', 'red');
  "<ul>";
  foreach($colors as $color){
    echo "<li>$color</li>" ;

  }

  "</ul>";

  echo "-------------------";
  echo "<br>";


  //2.cities

$cities= array
( "Italy"=>"Rome",
  "Luxembourg"=>"Luxembourg",
  "Belgium"=> "Brussels",
  "Denmark"=>"Copenhagen", 
  "Finland"=>"Helsinki", 
   "France" => "Paris", 
  "Slovakia"=>"Bratislava",
  "Slovenia"=>"Ljubljana",
  "Germany" => "Berlin", 
  "Greece" => "Athens",
  "Ireland"=>"Dublin",
   "Netherlands"=>"Amsterdam", 
   "Portugal"=>"Lisbon", 
    "Spain"=>"Madrid"
 );
 asort($cities);

 foreach($cities as $key => $value){
    echo " the capital of $key is $value" ."<br>";
 }
  

 echo "-------------------";
  echo "<br>";

//3.Write a PHP script to display the first element of the above array.
$color = array 
(
  4 => 'white',
  6 => 'green',
  11=> 'red'
);

echo reset($color);

  
  echo "<br>";
  



  
//4. Write a PHP script that inserts a specific new item in an array in any position.

$array4=[1,2,3,4,5];
array_splice($array4,3,0,"$");
foreach($array4 as $array){
    echo $array ." ";
}



  echo "<br>";

//5. Write a PHP script to sort the following associative array depending on the key value [asc] :

  echo "-------------------";
  echo "<br>";
$fruits = array
(
    "d" => "lemon", 
    "a" => "orange", 
    "b" => "banana",
     "c" => "apple"
);

echo "<br>";

asort($fruits);
foreach($fruits as $key=>$value){
    echo "$key = $value" . "<br>";
}

  echo "-------------------";
  echo "<br>";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$allcolors=array_merge($array1,$array2);
foreach($allcolors as $key => $value){
    echo "$key => $value" ."<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
$colors = array("red","blue", "white","yellow");
foreach($colors as $color){
    echo strtoupper($color)."<br>";
}


echo "<br>";
echo "<br>";
echo "<br>"; 

//1. Write a PHP script to check if the inserted number is a prime number
$num = 3;
for($i=2;$i< $num ;$i++){
    if($num % $i==0){
        echo "the $num not a prime";
    }
    else{
        echo "the $num is a prime number";

    }
}

echo "<br>";
echo "<br>";
echo "<br>"; 



//2. Write a PHP script to reverse a strin
$r="remove";
echo strrev($r);


echo "<br>";
echo "<br>";
echo "<br>";
//3. Write a PHP function to swap to variables?

$x=12;
$y=10;
$z=$x;
$x=$y;
$y=$z;
echo $x;
echo "<br>";
echo $y;
//4. Write a PHP function to check if a number is an Armstrong number or not ?
echo "<br>";
echo "<br>";
echo "<br>";

// Write a PHP function that checks whether a passed string is a palindrome or not?

function ispalindrome($string){
    $string=strtolower($string);
    $string=preg_replace("/[^a-z0-9]/","",$string);
    $revesred=strrev($string);

    if($string==$revesred){
        return true;
    }
    else{
        return false;
    }


}
$text = "Eva, can I see bees in a cave";
if( ispalindrome($text)){
    echo " Yes it is a palindrome";
}
else{
    echo " Not palindrome";
}

echo "<br>";
echo "<br>";


//6. Write a PHP function to remove duplicates from an array ?


function removeduplicate($array){
    return array_unique($array);}
$array1 = array(2, 4, 7, 4, 8, 4);
$array1=removeduplicate($array1);
foreach($array1 as $a){
    echo $a ."<br>";
}
//1. Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return 


function checksunm($x,$y){
    $z=$x+$y;
     if ($z == 30) {
        return $z;
    } else {
        return false;
    }
}

$result=checksunm(10,10);
var_dump($result);  //هون عشان بدي ارجع false true ما بحط echo
////////////////////////////////////////////////


echo "<br>";
echo "<br>";
echo "<br>";
function multiple($num){

    if($num%3==0){
        return true;
    }
    else{
        return false;
    }
}

$number = 20;

var_dump(multiple($number));


//3. Write a PHP script to check if the integer value is in the range of [20-50] inclusive.

echo "<br>";
echo "<br>";
echo "<br>";
function Rang($number){
    if($number>=20 && $number<=50){
        return true;
    }
    else{
        return false;
    }
}
$num=50;

var_dump(Rang($num));


///5. Write PHP script to calculate the monthly electricity bill according to these rules

echo "<br>";
echo "<br>";
echo "<br>";
function largest($a,$b,$c){
    if($a>$b && $a>$c){
        echo $a;
    }
    else if($b>$a && $b>$c){
        echo $b;
    }
    else{
        echo $c;
    }


}

 $reset=largest(1,5,9);


 //5. Write PHP script to calculate the monthly electricity bill according to these rules
//6. Write php script to make a calculator, the calculator should contain the four main operations


?>