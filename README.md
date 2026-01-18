# 🏥 Helping Hand Hospital Management System

A professional, high-end, and open-source hospital management website. This system features a modern bento-grid layout, fully responsive clinical UI, and secure patient registration modules.

**Developer:** Diplap Kadel  
**Project Status:** Open Source / Production Ready

---

## 🚀 Key Features
- **Modern Medical UI:** Clean "Clinical White" and "Deep Navy" color palette.
- **Bento-Style Gallery:** Dynamic, interactive facility gallery with hover effects.
- **Top-Bar Navigation:** Professional sticky header with emergency contact access.
- **Secure Registration:** Patient and Disability forms protected by PHP Prepared Statements.
- **Fully Responsive:** Optimized for Mobile, Tablet, and Desktop using CSS Clamp typography.
- **Success UI:** Professional feedback cards for form submissions.

---

## 🛠️ Installation & Setup

To run this project, you need a local server environment like **XAMPP**, **WAMP**, or **MAMP**.

### 1. Database Configuration
1. Open **phpMyAdmin**.
2. Create a new database named `hospital_db`.
3. Go to the **SQL** tab and paste the following queries to create the tables:

```sql
CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    medical_history TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE disabilities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    disability_details TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Open db.php and ensure your database connection matches your local server:
<?php
$servername = "localhost";
$username = "root"; // Default for XAMPP
$password = "";     // Default for XAMPP
$dbname = "hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
?>


🎨 Changing Branding Colors
All styling is centralized in home.css. Update the variables at the top to change the look for a different hospital:
:root {
    --primary: #004a99;    /* Main Clinical Blue */
    --secondary: #00a8cc;  /* Accent Blue */
    --accent: #e74c3c;     /* Emergency Red */
}

Updating Contact Info
Change the location and phone numbers in the <div class="top-bar"> and <footer> sections of these files:
index.php
information.php
general_form.php
disability_form.php

📂 Project Structure
├── image/               # Hospital facility photos
├── db.php               # MySQLi database connection
├── home.css             # Main professional stylesheet
├── home.js              # Navigation & UI interaction logic
├── information.css      # Services page specific styling
├── general.css          # Form styling logic
├── index.php            # Homepage (Bento Gallery & Hero)
├── information.php      # Medical Services & About us
├── general_form.php     # Standard Patient Intake
├── disability_form.php  # Specialized Support Registry
├── submit_general.php   # Secure Patient submission backend
└── submit_disability.php # Secure Disability submission backend


🛡️ Security Note
This project implements PHP Prepared Statements ($stmt->prepare) for all database interactions. This prevents SQL Injection attacks, making it safe for handling sensitive patient information.
👨‍💻 Developed By
Diplap Kadel
Open Source Developer
If you use this project, please give a ⭐ on GitHub and credit the original developer.

Here is the complete, final, and full content for your README.md file.
Instructions:
Create a file named README.md in your main project folder.
Paste the code below inside it.
Save it.
code
Markdown
# 🏥 Helping Hand Hospital Management System

A professional, high-end, and open-source hospital management website. This system features a modern bento-grid layout, fully responsive clinical UI, and secure patient registration modules.

**Developer:** Diplap Kadel  
**Project Status:** Open Source / Production Ready

---

## 🚀 Key Features
- **Modern Medical UI:** Clean "Clinical White" and "Deep Navy" color palette.
- **Bento-Style Gallery:** Dynamic, interactive facility gallery with hover effects.
- **Top-Bar Navigation:** Professional sticky header with emergency contact access.
- **Secure Registration:** Patient and Disability forms protected by PHP Prepared Statements.
- **Fully Responsive:** Optimized for Mobile, Tablet, and Desktop using CSS Clamp typography.
- **Success UI:** Professional feedback cards for form submissions.

---

## 🛠️ Installation & Setup

To run this project, you need a local server environment like **XAMPP**, **WAMP**, or **MAMP**.

### 1. Database Configuration
1. Open **phpMyAdmin**.
2. Create a new database named `hospital_db`.
3. Go to the **SQL** tab and paste the following queries to create the tables:

```sql
CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    medical_history TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE disabilities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    disability_details TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
2. File Configuration
Open db.php and ensure your database connection matches your local server:
code
PHP
<?php
$servername = "localhost";
$username = "root"; // Default for XAMPP
$password = "";     // Default for XAMPP
$dbname = "hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
?>
⚙️ Customization (How to Configure)
🎨 Changing Branding Colors
All styling is centralized in home.css. Update the variables at the top to change the look for a different hospital:
code
CSS
:root {
    --primary: #004a99;    /* Main Clinical Blue */
    --secondary: #00a8cc;  /* Accent Blue */
    --accent: #e74c3c;     /* Emergency Red */
}
📍 Updating Contact Info
Change the location and phone numbers in the <div class="top-bar"> and <footer> sections of these files:
index.php
information.php
general_form.php
disability_form.php
📂 Project Structure
code
Text
├── image/               # Hospital facility photos
├── db.php               # MySQLi database connection
├── home.css             # Main professional stylesheet
├── home.js              # Navigation & UI interaction logic
├── information.css      # Services page specific styling
├── general.css          # Form styling logic
├── index.php            # Homepage (Bento Gallery & Hero)
├── information.php      # Medical Services & About us
├── general_form.php     # Standard Patient Intake
├── disability_form.php  # Specialized Support Registry
├── submit_general.php   # Secure Patient submission backend
└── submit_disability.php # Secure Disability submission backend
🛡️ Security Note
This project implements PHP Prepared Statements ($stmt->prepare) for all database interactions. This prevents SQL Injection attacks, making it safe for handling sensitive patient information.
👨‍💻 Developed By
Diplap Kadel
Open Source Developer
If you use this project, please give a ⭐ on GitHub and credit the original developer.
License: Distributed under the MIT License. See LICENSE for more information.
