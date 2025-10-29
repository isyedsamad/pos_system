<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Order</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="sidebar">
        <h2>POS Admin</h2>
        <a href="dashboard.php" class="nav-link">Dashboard</a>
        <a href="products.php" class="nav-link">Products</a>
        <a href="orders.php" class="nav-link">Orders</a>
        <a href="customers.php" class="nav-link">Customers</a>
        <a href="#" class="nav-link">Logout</a>
    </div>
    <div class="main">
        <div class="header">
            <h1>View Order</h1>
            <a href="#" class="logout-btn">Logout</a>
        </div>
        <div class="content">
            <?php
            $order_id = $_GET['id'] ?? 0;
            $order_query = $conn->query("SELECT o.*, c.name AS customer_name, c.email AS customer_email FROM orders o JOIN customers c ON o.customer_id = c.customer_id WHERE o.order_id = $order_id");
            $order = $order_query->fetch_assoc();
            $items = $conn->query("SELECT oi.*, p.product_name AS product_name FROM order_items oi JOIN products p ON oi.product_id = p.product_id WHERE oi.order_id = $order_id");
            ?>
            <div style="background:var(--white); padding:10px 25px 25px 25px; border-radius:10px;box-shadow:0 4px 12px var(--shadow);">
                <h2 style="margin-bottom:20px;">Order Details (ID: <?= $order_id ?>)</h2>
                <p><strong>Customer:</strong> <?= htmlspecialchars($order['customer_name']) ?> (<?= htmlspecialchars($order['customer_email']) ?>)</p>
                <p><strong>Total:</strong> ₹<?= $order['total_amount'] ?></p>
                <p><strong>Date:</strong> <?= $order['order_date'] ?></p>
                <hr style="margin:20px 0;">
                <h3>Ordered Items</h3>
                <table style="width:100%;border-collapse:collapse;margin-top:10px;">
                    <thead style="background:var(--primary);color:var(--white);">
                        <tr>
                            <th style="padding:10px;text-align:center;">Product</th>
                            <th style="padding:10px;text-align:center;">Quantity</th>
                            <th style="padding:10px;text-align:center;">Price</th>
                            <th style="padding:10px;text-align:center;">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($items->num_rows > 0) {
                            while ($row = $items->fetch_assoc()) {
                                $subtotal = $row['quantity'] * $row['price'];
                                echo "<tr style='border-bottom:1px solid #ddd;'>
                        <td style='padding:10px;'>{$row['product_name']}</td>
                        <td style='padding:10px;'>{$row['quantity']}</td>
                        <td style='padding:10px;'>₹{$row['price']}</td>
                        <td style='padding:10px;'>₹{$subtotal}</td>
                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4' style='padding:10px;text-align:center;'>No items found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="footer">© 2025 POS System | All Rights Reserved</div>
</body>

</html>