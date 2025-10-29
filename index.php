<?php
session_start();
include('db.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $email;
        header("Location: admin/dashboard.php");
    } else {
        $error = "Invalid email or password!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>POS System - Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="font-family: 'Segoe UI', sans-serif; background-color: var(--primary); display:flex; justify-content:center; align-items:center; height:100vh; margin:0;">
    <form method="POST" style="background:var(--white); width:350px; padding:20px 25px; border-radius:10px; box-shadow:0 5px 20px var(--shadow); text-align:center;">
        <h2 style="color:var(--primary);">POS System Login</h2>
        <?php if (isset($error)) echo "<p style='color:red; font-size:14px;'>$error</p>"; ?>
        <input type="email" name="email" placeholder="Enter email" required style="width:90%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:5px; font-size:14px;"><br>
        <input type="password" name="password" placeholder="Enter password" required style="width:90%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:5px; font-size:14px;"><br>
        <button type="submit" name="login" style="width:95%; padding:10px; margin:10px 0px; background:var(--primary); color:var(--white); border:none; border-radius:5px; cursor:pointer; font-size:15px; transition:background 0.3s;">Login</button>
    </form>
</body>

</html>