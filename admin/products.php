<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="sidebar">
        <h2>MyPOS Admin</h2>
        <a href="dashboard.php" class="nav-link">Dashboard</a>
        <a href="products.php" class="nav-link">Products</a>
        <a href="orders.php" class="nav-link">Orders</a>
        <a href="customers.php" class="nav-link">Customers</a>
        <a href="../logout.php" class="nav-link">Logout</a>
    </div>
    <div class="main">
        <div class="header">
            <h1>Products</h1>
            <a href="../logout.php" class="logout-btn">Logout</a>
        </div>
        <div class="content">
            <h2 style="margin-bottom:20px;">Products List</h2>
            <a href="add_product.php"><button>Add Product</button></a>
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM products");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                  <td>{$row['product_id']}</td>
                  <td>{$row['product_name']}</td>
                  <td>₹{$row['price']}</td>
                  <td>{$row['stock']}</td>
                  <td><a href='edit_product.php?id={$row['product_id']}'><button>Edit</button></a>
</td>
                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No Products Found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="footer">© 2025 POS System | All Rights Reserved</div>
    </div>
</body>

</html>