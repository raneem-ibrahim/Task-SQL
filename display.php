<?php
include './config.php';

try {
    $sql = "SELECT * FROM product"; // تأكد من أن اسم الجدول صحيح (مثل `product` بحروف صغيرة)
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "حدث خطأ: " . $e->getMessage();
    exit; // إيقاف البرنامج إذا حدث خطأ
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض المنتجات</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>List product</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
        </tr>
        <?php if (!empty($rows)): ?>
            <?php foreach ($rows as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">لا توجد منتجات لعرضها.</td>
            </tr>
        <?php endif; ?>
    </table>
    <a href="add.php">Add New Product</a>
</body>
</html>