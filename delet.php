<?php
include "db.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM ORDERS WHERE ID = $id";
    if($conn->query($sql)){
        echo "تم حذف الصف بنجاح!";
    } else {
        echo "خطأ في الحذف: " . $conn->error;
    }   
    }


$conn->close();
header("Location: orders.php");
exit();



?>