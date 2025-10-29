<?php include('../db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>POS Dashboard</title>
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
            <h1>Dashboard</h1>
            <a href="#" class="logout-btn">Logout</a>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <h3>Total Products</h3>
                    <p>
                        <?php
                        $result = $conn->query("SELECT COUNT(*) AS total FROM products");
                        echo $result->fetch_assoc()['total'] ?? 0;
                        ?>
                    </p>
                </div>
                <div class="card">
                    <h3>Total Orders</h3>
                    <p>
                        <?php
                        $result = $conn->query("SELECT COUNT(*) AS total FROM orders");
                        echo $result->fetch_assoc()['total'] ?? 0;
                        ?>
                    </p>
                </div>
                <div class="card">
                    <h3>Total Revenue</h3>
                    <p>
                        ₹ <?php
                            $result = $conn->query("SELECT SUM(total_amount) AS total FROM orders");
                            echo $result->fetch_assoc()['total'] ?? 0;
                            ?>
                    </p>
                </div>
                <div class="card">
                    <h3>Low Stock</h3>
                    <p>
                        <?php
                        $result = $conn->query("SELECT COUNT(*) AS low FROM products WHERE stock < 3");
                        echo $result->fetch_assoc()['low'] ?? 0;
                        ?>
                    </p>
                </div>
            </div>

            <div style="margin-top: 30px;">
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
        </div>

        <div class="footer">
            © 2025 POS System | All Rights Reserved
        </div>
    </div>

</body>

</html>