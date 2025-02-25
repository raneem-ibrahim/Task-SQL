<?php
include "db.php";

// تحميل البيانات الحالية للصف
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM ORDERS WHERE ID = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

// تحديث البيانات
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    $total_price = $_POST['total_price'];
    $status = $_POST['status'];

    $sql = "UPDATE ORDERS SET USER_ID = '$user_id', TOTAL_PRICE = '$total_price', STATUS = '$status' WHERE ID = $id";
    if ($conn->query($sql)) {
        echo "تم تحديث الصف بنجاح!";
    } else {
        echo "خطأ في التحديث: " . $conn->error;
    }

    // إعادة التوجيه إلى الصفحة الرئيسية
    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-container label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>update order </h1>
        <form method="POST" action="update.php">
            <input type="hidden" name="id" value="<?= $row['ID'] ?>">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" value="<?= $row['USER_ID'] ?>">
            <label for="total_price">Total Price:</label>
            <input type="text" name="total_price" value="<?= $row['TOTAL_PRICE'] ?>">
            <label for="status">Status:</label>
            <input type="text" name="status" value="<?= $row['STATUSE'] ?>">
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>