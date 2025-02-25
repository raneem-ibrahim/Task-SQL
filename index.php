<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
// task1
$year = 20203 ;
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0){
    echo ("this year is a leap year ");
}else{
    echo ("this year is not a leap year");
}

// task2
echo"<br>";
echo "<hr>";
$temp =27;
if($temp < 20){
    echo ("<br> it is winter time");
}else{
    echo("It is summertime!");
}
// task3
echo"<br>";
echo "<hr>";
$x =2;
$z =2;
if($x == $z){
    echo (($x + $z)  * 3 );
}
echo"<br>";
echo "<hr>";
// task4
$a =10;
$b =10;
if ($a + $b == 30){
    echo $a +$b;
}else{
    echo("false");
}
echo"<br>";
echo "<hr>";
// task5
$r =20 ;
if($r % 3 == 0)
echo ("true");
else
echo("false");
echo"<br>";
echo "<hr>";
// task6
$l =50;
if($l >=20 && $l <=50){
    echo("true");
}else{
    each("false");
}
echo"<br>";
echo "<hr>";
// task7
$array=[1,5,9];
$largest = max($array);
echo "the largest number is = " . $largest;
echo"<br>";
echo "<hr>";
// task8;
$units =280;
if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = (50 * 2.50) + (($units - 50) * 5.00);
} elseif ($units <= 250) {
    $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
} else {
    $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
}

echo "The electricity bill for $units units is: " . $bill . " JOD";
echo"<br>";
echo "<hr>";
// task9
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
        default:
            $result = "Invalid operation";
            break;
    }

    echo "<h3>Result: $num1 $operation $num2 = $result</h3>";
}








?>
 <form method="POST" action="">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="operation">Select operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>
    <?php
    echo"<br>";
    echo "<hr>";
    // task10
$age = 15;

$minimum_age = 18;

if ($age >= $minimum_age) {
    echo "The person is eligible to vote";
} else {
    echo "The person is not eligible to vote";
}
echo"<br>";
    echo "<hr>";
    // task11
$number = -60;

if ($number > 0) {
    echo "positve";
} elseif ($number < 0) {
    echo "Negative";
} else {
    echo "Zero";
}
echo"<br>";
    echo "<hr>";
    // task12
    $scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
    
    $average = array_sum($scores) / count($scores);
    
    if ($average < 60) {
        $grade = 'F';
    } elseif ($average < 70) {
        $grade = 'D';
    } elseif ($average < 80) {
        $grade = 'C';
    } elseif ($average < 90) {
        $grade = 'B';
    } elseif ($average <= 100) {
        $grade = 'A';
    }
    
    echo "Average Score: " . $average . "<br>";
    echo "Grade: " . $grade;
    echo"<br>";
    echo"<hr>";

    $cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
?>

</body>
</html>