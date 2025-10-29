<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Orders</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="sidebar">
        <h2>POS Admin</h2>
        <a href="dashboard.php" class="nav-link">Dashboard</a>
        <a href="products.php" class="nav-link">Products</a>
        <a href="orders.php" class="nav-link">Orders</a>
        <a href="customers.php" class="nav-link">Customers</a>
        <a href="../logout.php" class="nav-link">Logout</a>
    </div>
    <div class="main">
        <div class="header">
            <h1>Orders</h1>
            <a href="../logout.php" class="logout-btn">Logout</a>
        </div>
        <div class="content">
            <h2 style="margin-bottom:20px;">All Orders</h2>
            <a href="add_order.php"><button>Add New Order</button></a><br><br>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $orders = $conn->query("SELECT o.order_id, c.name AS customer_name, o.total_amount, o.order_date FROM orders o JOIN customers c ON o.customer_id = c.customer_id ORDER BY o.order_date DESC");
                    if ($orders->num_rows > 0) {
                        while ($row = $orders->fetch_assoc()) {
                            echo "<tr>
                  <td>{$row['order_id']}</td>
                  <td>" . htmlspecialchars($row['customer_name']) . "</td>
                  <td>₹{$row['total_amount']}</td>
                  <td>{$row['order_date']}</td>
                  <td><a href='view_order.php?id={$row['order_id']}'><button>View</button></a></td>
              </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No Orders Found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="footer">© 2025 POS System | All Rights Reserved</div>
</body>

</html>