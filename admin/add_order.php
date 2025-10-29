<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Order</title>
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
            <h1>New Order</h1>
            <a href="#" class="logout-btn">Logout</a>
        </div>
        <div class="content">
            <h2 style="margin-bottom: 20px;">Create New Order</h2>
            <?php
            if (isset($_POST['place_order'])) {
                $customer_id = $_POST['customer_id'];
                $products = $_POST['product'];
                $quantities = $_POST['quantity'];
                $prices = $_POST['price'];
                $total_amount = 0;
                foreach ($products as $index => $product_id) {
                    $total_amount += $quantities[$index] * $prices[$index];
                }
                $order_sql = "INSERT INTO orders (customer_id, total_amount) VALUES ('$customer_id', '$total_amount')";
                if (mysqli_query($conn, $order_sql)) {
                    $order_id = mysqli_insert_id($conn);
                    foreach ($products as $index => $product_id) {
                        $qty = $quantities[$index];
                        $price = $prices[$index];
                        $item_sql = "INSERT INTO order_items (order_id, product_id, quantity, price) 
                           VALUES ('$order_id', '$product_id', '$qty', '$price')";
                        mysqli_query($conn, $item_sql);
                        mysqli_query($conn, "UPDATE products SET stock = stock - $qty WHERE product_id = '$product_id'");
                    }
                    echo "<p style='color:green;'>Order placed successfully!</p>";
                } else {
                    echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
                }
            }
            $customers = mysqli_query($conn, "SELECT * FROM customers");
            $products = mysqli_query($conn, "SELECT * FROM products WHERE stock > 0");
            ?>
            <form method="POST" style="background:var(--white);padding:25px;border-radius:10px;box-shadow:0 4px 12px var(--shadow);width:700px;">
                <label>Customer:</label><br>
                <select name="customer_id" required style="width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:6px;">
                    <option value="">Select Customer</option>
                    <?php while ($c = mysqli_fetch_assoc($customers)) { ?>
                        <option value="<?= $c['customer_id'] ?>"><?= htmlspecialchars($c['name']) ?></option>
                    <?php } ?>
                </select>

                <div id="orderItems">
                    <div class="order-item" style="margin-bottom:15px;">
                        <label>Product:</label><br>
                        <select name="product[]" required style="width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:6px;">
                            <option value="">Select Product</option>
                            <?php mysqli_data_seek($products, 0);
                            while ($p = mysqli_fetch_assoc($products)) { ?>
                                <option value="<?= $p['product_id'] ?>" data-price="<?= $p['price'] ?>"><?= htmlspecialchars($p['product_name']) ?> (₹<?= $p['price'] ?>)</option>
                            <?php } ?>
                        </select>

                        <label>Quantity:</label><br>
                        <input type="number" name="quantity[]" min="1" value="1" required style="width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:6px;"><br>

                        <label>Price (₹):</label><br>
                        <input type="number" step="0.01" name="price[]" readonly required style="width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:6px;"><br>
                    </div>
                </div>

                <button type="button" onclick="addItem()" style="margin-right:10px;">+ Add Product</button>
                <button type="submit" name="place_order" style="margin-top:10px;">Place Order</button>
            </form>
        </div>
        <div class="footer">© 2025 POS System | All Rights Reserved</div>
        <script>
            function addItem() {
                const orderItems = document.getElementById('orderItems');
                const firstItem = orderItems.children[0];
                const clone = firstItem.cloneNode(true);
                clone.querySelectorAll('input').forEach(input => input.value = '');
                orderItems.appendChild(clone);
            }
            document.addEventListener('change', function(e) {
                if (e.target.name === 'product[]') {
                    const selected = e.target.selectedOptions[0];
                    const price = selected.getAttribute('data-price') || 0;
                    const priceInput = e.target.parentElement.querySelector('input[name="price[]"]');
                    priceInput.value = price;
                }
            });
        </script>
</body>

</html>