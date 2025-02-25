<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name = $email="";
$nameErr = $emailErr = "";

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
$name =$_POST["name"];
$email=$_POST["email"];

}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST[$name])){
        $nameErr = "Name is required";

    }
    else{
        $name=test_input($_POST[$name]);

    }

    if(empty($_POST[$email])){
        $emailErr="Email is required";
    }else{
        $email=test_input($_POST[$email]);
    }
}

?>

<form method="POST" action=" ">
Name: <input type="text" name="name">
<span style="color:red;"><?php  echo $nameErr;?></span>
<br> <br><br>
E-mail: <input type="text" name="email">
<span style="color:red ;"> <?php echo $emailErr; ?></span>
<br><br>
<button type="Sbmit" name="Submit" value="Submit ">Submit</button>
 
</form>




</body>
</html>