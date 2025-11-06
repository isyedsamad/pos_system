<?php include('../db.php');
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO customers (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Customer added successfully!'); window.location.href='customers.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Customer</title>
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
            <h1>Add Customer</h1>
            <a href="../logout.php" class="logout-btn">Logout</a>
        </div>
        <div class="content">
            <form method="POST" style="background:var(--white);padding:25px;border-radius:10px;box-shadow:0 4px 12px var(--shadow);width:400px;">
                <label>Name:</label><br>
                <input type="text" name="name" required style="width:100%;padding:10px 0px 10px 10px;margin:10px 0;border:1px solid #ccc;border-radius:6px;"><br>

                <label>Email:</label><br>
                <input type="email" name="email" required style="width:100%;padding:10px 0px 10px 10px;margin:10px 0;border:1px solid #ccc;border-radius:6px;"><br>

                <label>Phone:</label><br>
                <input type="text" name="phone" required maxlength="15" style="width:100%;padding:10px 0px 10px 10px;margin:10px 0;border:1px solid #ccc;border-radius:6px;"><br>

                <button type="submit" name="add" style="margin-top:10px;">Add Customer</button>
            </form>
        </div>
        <div class="footer">© 2025 POS System | All Rights Reserved</div>
</body>

</html>