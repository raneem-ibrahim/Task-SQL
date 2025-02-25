<?php
$name="Ali";
$str1 ="hello, $name!";

echo $str1 ;
echo "<hr>";
//هاي اعطتني طول السلسلة النصية 
echo strlen($str1);

echo "<hr>";
// مشان اوصل لحرف في السلسة النصية ;
echo $str1[1];
echo $str1[5];
echo $str1[2];


echo "<hr>";
// هي مشان يعطيني جزء من السلسة 
echo substr($str1 , 5,7);



echo "<hr>";
// هاي لحساب طول السلسلة النصية 
echo strlen($str1);

echo "<hr>";
echo strtoupper($str1);


echo "<hr>";
echo strtolower($str1); 
// هاي مشان ابحث عن اول موضع لهاي الكلة او هاد النص 
echo "<hr>";
echo strpos($str1, "Ali");


echo "<hr>";
echo str_replace("hello", "malak",$str1 );


echo "<hr>";
//  هاي مشان احسب عدد الكلمات في السلسلة النصية 
echo str_word_count("Hello world!");


echo "<hr>";
//  هاي بتعكسلي السلسلة 
$x = "Hello World!";
echo strrev($x);

echo "<hr>";
$x = "    Hello World!     ";
echo trim($x);


echo "<hr>";
// هاي بتحولي النص ل لمصفوفة لما اطبعها بتطلع مصفوفة 
$x = "Hello World!";
$y = explode(" ", $x);
print_r($y);



echo "<hr>";
                                      
                            // Tasks _function ....

// task1

function swapVariables(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12;
$y = 10;

swapVariables($x, $y);
echo "After Swap: x = $x, y = $y\n";

echo "<hr>" ;
// task2
function task2($number){
   $num1 = (string)$number;
  // var_dump($num1);
    $nums = str_split($num1);
    //var_dump($nums);
    $sum = 0;
    foreach($nums as $n){
        $sum += pow($n , 3);
    }
    //var_dump($sum);
    if($sum == $number){
        echo "is armstrong number <br>";
    }else{
        echo "is not armstrong number <br>";
    }
}

$number = 400;
task2($number);

echo "<hr>";
// task3


function removeDuplicates($array) {

    return array_unique($array);
}

$array = array(2, 4, 7, 4, 8, 4);
$uniqueArray = removeDuplicates($array);
echo implode(" , ",$uniqueArray);



echo "<hr>";
// task5
 function remove($str){
    echo strrev($str);
 }
$str="remove";
echo $strnew=remove($str);

echo "<hr>";
// task6
function check($text){
    if(ctype_lower($text)){
    return "Your String is Ok";
    } else {
        return "Your String is not all lowercase";
    }
}
$text="remove";





// task7
$string="orange coding academy";
$upper=strtoupper($string);
echo "$upper <br>" ;
$lower=strtolower($string);
echo "$lower <br>";
$upperleter=ucfirst($string);
echo "$upperleter <br>";
$upperword=ucwords($string);
echo "$upperword <br>";

echo "<hr>";

// task8

$num='085119';
$hour=substr($num,0,2);
$minutes=substr($num,2,2);
$second=substr($num,4,6);
echo "$hour:$minutes:$second";

echo "<hr>";

// task9

$string="I am a full stack developer at orange coding academy";
$found = strpos($string, "Orange");

if ($found != 0){
    echo "it's found";
}else{
    echo "it's not found";
}

echo "<hr>";

// task 10

$url="www.orange.com/index.php";
$filename=basename($url);
echo $filename;

echo "<hr>";

// task 11

$string1 = 'dragonball';
$string2 = 'dragonboll';

for ($i = 0; $i < min(strlen($string1), strlen($string2)); $i++) {
    if ($string1[$i] !== $string2[$i]) {
        echo "First difference between two strings at position " . ($i + 1) . 
             ': "' . $string1[$i] . '" vs "' . $string2[$i] . '"';
        break;
    }
}

echo "<hr>";

// task12

 $Character='a';
 $next= chr(ord($Character)+1);
 echo  $next;

 echo "<br>";

 $letter='z';
 if ($letter === 'z') {
    $next = 'a';
    echo  $next ;
} elseif ($letter === 'Z') {
    $next = 'A';
    echo  $next;
}
echo "<hr>";
// task13

$num= '0000657022.24';
$remozerro= str_replace('0','',$num);
echo $remozerro;

echo "<hr>";
// task14

$string= '\"\1+2/3*2:2-3/4*3';
$remove= preg_replace("/[^a-zA-Z0-9]/", "", $string);
echo $remove;

echo "<hr>";

// task15

$string= 'The quick brown fox jumps over the lazy dog' ;
$convert= explode(' ',$string);
$word= array_slice($convert,0,5);
$convert1= implode(' ',$word);
echo $convert1;


    ?>

?>