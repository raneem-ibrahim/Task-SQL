<?php
include "db.php";

// استعلام SQL لقراءة البيانات
$sql = "SELECT * FROM ORDERS";
$result = $conn->query($sql);

// التحقق من وجود بيانات
if ($result->num_rows > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC); // استرجاع البيانات كمصفوفة ارتباطية
} else {
    $rows = []; // إذا لم تكن هناك بيانات
}

// إغلاق الاتصال
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        button.delet {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        button.update {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Orders List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($rows)): ?>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?= $row['ID'] ?></td>
                        <td><?= $row['USER_ID'] ?></td>
                        <td><?= $row['TOTAL_PRICE'] ?></td>
                        <td><?= $row['STATUSE'] ?></td>
                        <td><?= $row['CREATED_AT'] ?></td>
                        <td>
                            <a href="delet.php?id=<?= $row['ID'] ?>"><button class="delet">Delete</button></a>
                            <a href="update.php?id=<?= $row['ID'] ?>"><button class="update">Update</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No data found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>