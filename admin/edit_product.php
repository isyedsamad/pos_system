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
        <h2>POS Admin</h2>
        <a href="dashboard.php" class="nav-link">Dashboard</a>
        <a href="products.php" class="nav-link">Products</a>
        <a href="orders.php" class="nav-link">Orders</a>
        <a href="customers.php" class="nav-link">Customers</a>
        <a href="#" class="nav-link">Logout</a>
    </div>
    <div class="main">
        <div class="header">
            <h1>Products</h1>
            <a href="#" class="logout-btn">Logout</a>
        </div>
        <div class="content">
            <?php
            $id = $_GET['id'] ?? 0;
            $product = $conn->query("SELECT * FROM products WHERE product_id = $id")->fetch_assoc();
            if (isset($_POST['update'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $stock = $_POST['stock'];
                $conn->query("UPDATE products SET product_name='$name', price='$price', stock='$stock' WHERE product_id=$id");
                echo "<script>alert('Product updated successfully!'); window.location='products.php';</script>";
                exit;
            }
            ?>
            <div style="background:var(--white);padding:25px;border-radius:10px;box-shadow:0 4px 12px var(--shadow);width:400px;">
                <h2 style="margin-bottom:15px;">Edit Product</h2>
                <form method="POST">
                    <label>Name:</label><br>
                    <input type="text" name="name" value="<?= htmlspecialchars($product['product_name']) ?>" required
                        style="width:100%;padding:10px 0px 10px 10px; margin:5px 0px 15px 0px; border:1px solid #ccc;border-radius:6px;"><br>
                    <label>Price:</label><br>
                    <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" required
                        style="width:100%;padding:10px 0px 10px 10px; margin:5px 0px 15px 0px; border:1px solid #ccc;border-radius:6px;"><br>
                    <label>Stock:</label><br>
                    <input type="number" name="stock" value="<?= $product['stock'] ?>" required
                        style="width:100%;padding:10px 0px 10px 10px; margin:5px 0px 15px 0px; border:1px solid #ccc;border-radius:6px;"><br>
                    <button type="submit" name="update" style="margin-top:10px;padding:10px 20px;background:var(--dark);color:var(--white);border:none;border-radius:6px;cursor:pointer;">
                        Save Changes
                    </button>
                </form>
            </div>
        </div>
        <div class="footer">© 2025 POS System | All Rights Reserved</div>
</body>

</html>