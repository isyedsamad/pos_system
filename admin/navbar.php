<?php
// navbar.php
?>
<aside style="width: 220px; background: var(--light); box-shadow: 2px 0 8px var(--shadow); border-radius: 12px; padding: 20px; display: flex; flex-direction: column; gap: 12px;">
    <a href="dashboard.php" style="text-decoration: none; color: var(--dark); font-weight: 500; padding: 10px; border-radius: 8px; transition: 0.3s;"
        onmouseover="this.style.background='var(--primary)'; this.style.color='var(--white)';"
        onmouseout="this.style.background='transparent'; this.style.color='var(--dark)';">
        📊 Dashboard
    </a>
    <a href="products.php" style="text-decoration: none; color: var(--dark); font-weight: 500; padding: 10px; border-radius: 8px; transition: 0.3s;"
        onmouseover="this.style.background='var(--primary)'; this.style.color='var(--white)';"
        onmouseout="this.style.background='transparent'; this.style.color='var(--dark)';">
        📦 Products
    </a>
    <a href="orders.php" style="text-decoration: none; color: var(--dark); font-weight: 500; padding: 10px; border-radius: 8px; transition: 0.3s;"
        onmouseover="this.style.background='var(--primary)'; this.style.color='var(--white)';"
        onmouseout="this.style.background='transparent'; this.style.color='var(--dark)';">
        🧾 Orders
    </a>
    <a href="logout.php" style="text-decoration: none; color: var(--dark); font-weight: 500; padding: 10px; border-radius: 8px; transition: 0.3s;"
        onmouseover="this.style.background='var(--primary)'; this.style.color='var(--white)';"
        onmouseout="this.style.background='transparent'; this.style.color='var(--dark)';">
        🚪 Logout
    </a>
</aside>