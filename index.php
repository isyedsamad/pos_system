<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPOS – Smart Point of Sale System</title>
    <style>
        :root {
            --primary: #3B82F6;
            --dark: #0F172A;
            --light: #1E293B;
            --white: #FFFFFF;
            --shadow: rgba(0, 0, 0, 0.2);
        }

        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background-color: var(--dark);
            color: var(--white);
            scroll-behavior: smooth;
        }

        header {
            background-color: var(--light);
            box-shadow: 0 2px 10px var(--shadow);
            padding: 20px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header h1 {
            color: white;
            font-size: 24px;
            margin: 0;
            letter-spacing: 1px;
        }

        nav a {
            color: var(--white);
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: var(--primary);
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(135deg, var(--light), var(--dark));
            color: var(--white);
        }

        .hero h2 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #cbd5e1;
        }

        .hero button {
            padding: 12px 28px;
            border: none;
            background: var(--primary);
            color: var(--white);
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .hero button:hover {
            background: var(--white);
            color: var(--primary);
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 60px 20px;
            background-color: var(--light);
        }

        .feature-card {
            background: #162036;
            margin: 15px;
            padding: 30px 25px;
            border-radius: 12px;
            box-shadow: 0 4px 16px var(--shadow);
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            background: var(--primary);
            box-shadow: 0 0 25px var(--primary);
        }

        .feature-card h3 {
            color: var(--white);
            margin-top: 10px;
        }

        .feature-card p {
            color: #cbd5e1;
            font-size: 15px;
        }

        .feature-icon {
            font-size: 40px;
            color: var(--primary);
            transition: color 0.3s;
        }

        .feature-card:hover .feature-icon {
            color: var(--white);
        }

        .about {
            padding: 80px 40px;
            background-color: var(--dark);
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 50px;
        }

        .about-text {
            max-width: 500px;
        }

        .about h2 {
            color: var(--primary);
            margin-bottom: 20px;
        }

        .about p {
            font-size: 16px;
            color: #d1d5db;
            line-height: 1.7;
        }

        .about img {
            width: 420px;
            border-radius: 12px;
            box-shadow: 0 0 20px var(--shadow);
        }

        footer {
            background-color: var(--light);
            color: #cbd5e1;
            text-align: center;
            padding: 15px 0;
        }

        .login-btn {
            padding: 10px 28px;
            border: none;
            background: var(--primary);
            color: var(--white);
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s ease;
            text-decoration: none;
        }

        .login-btn:hover {
            background: var(--white);
            color: var(--primary);
        }
    </style>
</head>

<body>

    <header>
        <h1>MyPOS</h1>
        <nav>
            <a href="#hero">Home</a>
            <a href="#features">Features</a>
            <a href="#about">About</a>
            <a href="login.php" class="login-btn">Admin Login</a>
        </nav>
    </header>

    <section id="hero" class="hero">
        <h2>Smarter Billing, Simpler Management</h2>
        <p>Empower your business with MyPOS — a modern, secure, and efficient Point of Sale System built for simplicity and speed.</p>
        <button onclick="scrollToSection('features')">Explore Features</button>
    </section>

    <section id="features" class="features">
        <div class="feature-card">
            <div class="feature-icon">💼</div>
            <h3>Product Management</h3>
            <p>Seamlessly manage your inventory with live stock tracking and quick product updates.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🧾</div>
            <h3>Smart Billing</h3>
            <p>Generate accurate invoices and manage customer orders in just a few clicks.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">📊</div>
            <h3>Sales Analytics</h3>
            <p>Monitor your daily sales and track performance with real-time dashboard insights.</p>
        </div>
    </section>

    <section id="about" class="about">
        <div class="about-text">
            <h2>About MyPOS</h2>
            <p>
                MyPOS is a compact and user-friendly web-based Point of Sale system developed using PHP and MySQL.
                It helps small and medium businesses manage products, customers, and sales in one place.
                Designed with a clean dark UI, MyPOS ensures a smooth experience while maintaining professional aesthetics.
                The system is built for efficiency — minimizing manual work, maximizing productivity, and keeping your business organized.
            </p>
            <a href="login.php" class="login-btn" style="margin-top: 20px; display: inline-block;">Go to Admin Login</a>
        </div>
        <img src="https://cdn-icons-png.flaticon.com/512/5956/5956490.png" alt="POS Illustration">
    </section>

    <footer>
        <p>© 2025 MyPOS | Designed by Syed Samad</p>
    </footer>

    <script>
        function scrollToSection(id) {
            document.getElementById(id).scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>

</body>

</html>