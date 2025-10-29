<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer</title>
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
            <h1>Customer</h1>
            <a href="../logout.php" class="logout-btn">Logout</a>
        </div>
        <div class="content">
            <h2 style="margin-bottom:20px;">Customers</h2>
            <a href="add_customer.php"><button>Add Customer</button></a><br><br>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Joined</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $customers = $conn->query("SELECT * FROM customers ORDER BY created_at DESC");
                    if ($customers->num_rows > 0) {
                        while ($row = $customers->fetch_assoc()) {
                            echo "<tr>
                  <td>{$row['customer_id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['phone']}</td>
                  <td>{$row['created_at']}</td>
                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No Customers Found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="footer">© 2025 POS System | All Rights Reserved</div>
</body>

</html>