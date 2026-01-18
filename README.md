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
