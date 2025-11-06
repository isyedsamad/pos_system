<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPOS – Smart Point of Sale System</title>
    <style>
        :root {
            --primary: #3B82F6;
            --dark: #1E293B;
            --light: #F1F5F9;
            --white: #FFFFFF;
            --shadow: rgba(0, 0, 0, 0.1);
        }

        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background-color: linear-gradient(to right, var(--primary), var(--dark));
            color: var(--dark);
            scroll-behavior: smooth;
        }

        header {
            box-shadow: 0 2px 8px var(--shadow);
            padding: 15px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header h1 {
            color: var(--primary);
            font-size: 24px;
            margin: 0;
            letter-spacing: 1px;
        }

        nav a {
            color: var(--dark);
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
            background: linear-gradient(to right, var(--primary), var(--dark));
            color: var(--white);
        }

        .hero h2 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 25px;
        }

        .hero button {
            padding: 12px 28px;
            border: none;
            background: var(--white);
            color: var(--primary);
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .hero button:hover {
            background: var(--dark);
            color: var(--white);
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 60px 20px;
            background-color: var(--white);
        }

        .feature-card {
            background: var(--light);
            margin: 15px;
            padding: 30px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px var(--shadow);
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 18px var(--shadow);
        }

        .feature-card h3 {
            color: var(--primary);
        }

        .about {
            padding: 80px 40px;
            text-align: center;
            background-color: var(--light);
        }

        .about h2 {
            color: var(--primary);
            margin-bottom: 20px;
        }

        .about p {
            max-width: 800px;
            margin: auto;
            font-size: 17px;
            line-height: 1.6;
        }

        footer {
            background-color: var(--dark);
            color: var(--white);
            text-align: center;
            padding: 15px 0;
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
        </nav>
    </header>

    <section id="hero" class="hero">
        <h2>Smart Billing. Smarter Management.</h2>
        <p>Manage sales, products, and customers efficiently with MyPOS – your modern Point of Sale system.</p>
        <button onclick="scrollToSection('features')">Explore Features</button>
    </section>

    <section id="features" class="features">
        <div class="feature-card">
            <h3>💼 Product Management</h3>
            <p>Add, edit, and track all your inventory items in one place with ease.</p>
        </div>
        <div class="feature-card">
            <h3>🧾 Billing & Orders</h3>
            <p>Generate sales invoices instantly and keep track of all customer orders.</p>
        </div>
        <div class="feature-card">
            <h3>📊 Analytics Dashboard</h3>
            <p>View total sales, inventory stats, and business insights in real-time.</p>
        </div>
    </section>

    <section id="about" class="about">
        <h2>About MyPOS</h2>
        <p>
            MyPOS is a web-based Point of Sale Management System built using PHP and MySQL.
            It simplifies day-to-day business operations by combining billing, inventory management, and customer tracking into one unified platform.
            Designed with a modern, minimal interface, MyPOS ensures efficiency, speed, and accuracy for small and medium-sized businesses.
        </p>
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