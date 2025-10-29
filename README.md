# 🧾 Point of Sale (POS) System

**📚 2nd Year – 3rd Semester RDBMS Project**  
**👨‍💻 Developed by:** _Syed Samad_  
**🏫 Course:** Relational Database Management System (RDBMS)\*  
**🗓️ Semester:** 3rd | B.Tech CSE

---

## 🚀 Project Overview

The **POS System** is a web-based application designed to handle essential operations for small businesses such as adding products, managing customers, creating orders, and tracking sales.  
It is built with **PHP, MySQL, HTML, CSS, and JavaScript**, focusing on the practical application of **database management concepts**.

---

## 🧩 Features

✅ **Add / Edit / Delete Products**  
✅ **Manage Customers** – store customer name, email, and phone number  
✅ **Create New Orders** and automatically update total amounts  
✅ **View Detailed Order History** with product details and pricing  
✅ **Real-time Data Storage** using MySQL Database  
✅ **User Authentication and Logout System**  
✅ **Clean and Simple UI**

---

## 🗄️ Database Design

### **Tables Used**

- **`products`** → Stores product details (name, price, stock, etc.)
- **`customers`** → Stores customer information
- **`orders`** → Stores order metadata (total, date, etc.)
- **`order_items`** → Stores each item related to an order

Each table is connected via **primary and foreign keys**, demonstrating **relational integrity** — a key concept in RDBMS.

---

## 🧠 Core Concepts Applied

- Database Normalization (up to 3NF)
- Primary and Foreign Key Constraints
- CRUD Operations (Create, Read, Update, Delete)
- Data Relationships (One-to-Many between orders and order_items)
- Secure Session Handling with PHP
- Form Validation and Server-Side Processing

---

## 🛠️ Tech Stack

| Technology          | Purpose                           |
| ------------------- | --------------------------------- |
| **PHP**             | Backend logic and CRUD operations |
| **MySQL**           | Database management               |
| **HTML / CSS / JS** | Frontend interface                |
| **XAMPP**           | Local server environment          |
| **GitHub**          | Version control and collaboration |
