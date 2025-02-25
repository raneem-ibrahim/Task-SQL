<?php
    include "db.php";

    $FirstName = $lastName = $email = $password = "";
    $FirstNameErr = $lastNameErr = $emailErr = $passwordErr = "";


    if($_SERVER["REQUEST_METHOD"] ==  "POST"){
        if(empty($_POST["FirstName"])){
            $FirstNameErr ="First Name is required";
        }else{
            $FirstName=htmlspecialchars($_POST["FirstName"]);
        }

        if(empty($_POST["LastName"])){
            $lastNameErr ="Last Name is required";
        } else{
            $lastName=htmlspecialchars($_POST["LastName"]);
        }

        if(empty($_POST["email"])){
            $emailErr ="Email is required";
        }elseif(!filter_var($_POST["email"] ,FILTER_SANITIZE_EMAIL)){
            $emailErr ="Invalid email format";
        }
         else{
            $email= htmlspecialchars($_POST["email"]);;
        }

        if(empty($_POST["password"])){
            $passwordErr ="Password is required";
        } else{
            $password=htmlspecialchars($_POST["password"]);
        }



      if(empty($FirstNameErr)&& empty($lastNameErr)&& empty($emailErr)&& empty($passwordErr)){
         $sql ="INSERT INTO users(FirstName,LastName,email,password) VALUES ('$FirstName','$email','$password')";
         if($conn->query($sql) === TRUE){
            echo "record successfully ";
        
           }
           else{
            echo "Error: ". $sql."<br>". $conn->error;
           }

   }
   
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action=" ">
FirstName: <input type="text" name="FirstName">
<span style="color:red"><?php echo $FirstNameErr;?></span>
<br> <br><br>
LastName: <input type="text" name="LastName">
<br> <br><br>
E-mail: <input type="text" name="email">

<br><br>
Password: <input type="text" name="password">
<br><br>
<a href="login.php"><button type="submit" >Login</button></a>
 
</form>
</body>
</html>