# 🍽️ Restaurant Management System

A web-based Restaurant Table Reservation System built using **PHP, MySQL (MariaDB), HTML, and CSS**, deployed on **AWS EC2 (Free Tier)**.

This project allows customers to reserve tables online and provides an admin panel to manage reservations.

---

## 🚀 Features

### 👤 User Side
- View restaurant homepage
- View menu
- Reserve a table online
- Responsive and interactive UI
- Food images and professional design

### 🔐 Admin Side
- Secure admin login
- View all reservations
- Session-based access control

---

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MariaDB (MySQL)
- **Server:** Apache (LAMP Stack)
- **Hosting:** AWS EC2 (Free Tier)
- **Version Control:** Git & GitHub

---## Database Setup

1. Create a database using the provided `database.sql` file.
2. Rename `db.example.php` to `db.php`.
3. Update database credentials in `db.php`.
4. Import the database:
   ```bash
   mysql -u root -p < database.sql

    “For security reasons, I ignored `db.php` and provided `db.example.php` and `database.sql` so anyone can understand database connection and schema without exposing credentials.”

🔥 **This is industry-level practice**



## 📂 Project Structure

restaurant/
│── index.php
│── menu.php
│── reserve.php
│── save.php
│── view.php
│── admin_login.php
│── admin_check.php
│── db.php
│
├── css/
│ └── style.css
│
├── images/
│ ├── food1.jpg
│ ├── food2.jpg
│ └── food3.jpg
│
└── assets/

yaml
Copy code

---

## ⚙️ Installation & Setup

### 1️⃣ Clone Repository
```bash
git clone https://github.com/YOUR_USERNAME/restaurant-management-system.git
2️⃣ Move Project to Apache Directory
bash
Copy code
sudo mv restaurant /var/www/html/
3️⃣ Install LAMP Stack
bash
Copy code
sudo yum install httpd php php-mysqli mariadb-server -y
4️⃣ Start Services
bash
Copy code
sudo systemctl start httpd
sudo systemctl start mariadb
sudo systemctl enable httpd
sudo systemctl enable mariadb
5️⃣ Database Setup
sql
Copy code
CREATE DATABASE restaurantdb;
CREATE USER 'restaurantuser'@'localhost' IDENTIFIED BY 'rest123';
GRANT ALL PRIVILEGES ON restaurantdb.* TO 'restaurantuser'@'localhost';
FLUSH PRIVILEGES;
6️⃣ Create Tables
sql
Copy code
USE restaurantdb;

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    date DATE,
    guests INT
);

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(100)
);

INSERT INTO admins (username, password)
VALUES ('admin', 'admin123');
🔐 Admin Login Credentials
makefile
Copy code
Username: admin
Password: admin123
🌐 Access URLs
perl
Copy code
Home Page:        http://<EC2_PUBLIC_IP>/restaurant/index.php
Reserve Table:   http://<EC2_PUBLIC_IP>/restaurant/reserve.php
Admin Login:     http://<EC2_PUBLIC_IP>/restaurant/admin_login.php
Admin Dashboard: http://<EC2_PUBLIC_IP>/restaurant/view.php
☁️ AWS Free Tier Usage
EC2 (Amazon Linux)

Apache Web Server

MariaDB

Security Groups (Port 80 & 22)

🎓 Learning Outcomes
LAMP stack deployment

PHP–MySQL connectivity

Session-based authentication

Git & GitHub version control

AWS EC2 hosting

Responsive UI design

📌 Future Enhancements
Password hashing

Email confirmation

Payment integration

AWS RDS

HTTPS with SSL

Admin analytics dashboard

👩Author
Akshada Doke
BSc IT Student
