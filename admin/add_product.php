<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
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
            <?php
            if (isset($_POST['add'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $stock = $_POST['stock'];
                $conn->query("INSERT INTO products (product_name, price, stock) VALUES ('$name', '$price', '$stock')");
                header("Location: products.php");
            }
            ?>
            <!-- (Include base layout above until content div) -->
            <h2 style="margin-bottom:20px;">Add New Product</h2>
            <form method="POST" style="background:var(--white);padding:25px;border-radius:10px;box-shadow:0 4px 12px var(--shadow);width:400px;">
                <label>Name:</label><br>
                <input type="text" name="name" required style="width:100%; padding:10px 0px 10px 10px; margin:10px 0; border:1px solid #ccc;border-radius:6px;"><br>
                <label>Price:</label><br>
                <input type="number" step="0.01" name="price" required style="width:100%; padding:10px 0px 10px 10px; margin:10px 0;border:1px solid #ccc;border-radius:6px;"><br>
                <label>Stock:</label><br>
                <input type="number" name="stock" required style="width:100%;padding:10px 0px 10px 10px;margin:10px 0;border:1px solid #ccc;border-radius:6px;"><br>
                <button type="submit" name="add" style="margin-top: 10px;">Add Product</button>
            </form>
        </div>
        <div class="footer">© 2025 POS System | All Rights Reserved</div>
</body>

</html>