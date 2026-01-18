<h1 align="center">🏥 Helping Hand Hospital Management System</h1>
<h3 align="center">A professional, high-end, and open-source hospital management website</h3>

<p align="center">
  <strong>Developer:</strong> Diplap Kadel<br>
  <strong>Project Status:</strong> Open Source / Production Ready
</p>

<h2>🚀 Key Features</h2>
<ul>
  <li><strong>Modern Medical UI:</strong> Clean "Clinical White" and "Deep Navy" color palette.</li>
  <li><strong>Bento-Style Gallery:</strong> Dynamic, interactive facility gallery with hover effects.</li>
  <li><strong>Top-Bar Navigation:</strong> Professional sticky header with emergency contact access.</li>
  <li><strong>Secure Registration:</strong> Patient and Disability forms protected by PHP Prepared Statements.</li>
  <li><strong>Fully Responsive:</strong> Optimized for Mobile, Tablet, and Desktop using CSS Clamp typography.</li>
  <li><strong>Success UI:</strong> Professional feedback cards for form submissions.</li>
</ul>

<h2>🌐 Demo</h2>
<p>Check out the live demo of the Helping Hand Hospital Management System:</p>
<p><iframe src="https://nepalwebsite.ct.ws/" target="_blank">https://nepalwebsite.ct.ws/</iframe></p>

<h2>🛠️ Installation & Setup</h2>
<p>To run this project, you need a local server environment like <strong>XAMPP</strong>, <strong>WAMP</strong>, or <strong>MAMP</strong>.</p>

<h3>1. Database Configuration</h3>
<pre>
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
</pre>

<h3>2. File Configuration</h3>
<pre>
&lt;?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn-&gt;connect_error) {
    die("Connection failed: " . $conn-&gt;connect_error);
}
?&gt;
</pre>

<h2>⚙️ Customization</h2>
<ul>
  <li><strong>Change Branding Colors:</strong> Edit variables in <code>home.css</code>:
<pre>
:root {
    --primary: #004a99;
    --secondary: #00a8cc;
    --accent: #e74c3c;
}
</pre>
  </li>
  <li><strong>Update Contact Info:</strong> Edit <code>&lt;div class="top-bar"&gt;</code> and <code>&lt;footer&gt;</code> in <code>index.php</code>, <code>information.php</code>, <code>general_form.php</code>, <code>disability_form.php</code></li>
</ul>

<h2>📂 Project Structure</h2>
<pre>
├── image/                # Hospital facility photos
├── db.php                # MySQLi database connection
├── home.css              # Main stylesheet
├── home.js               # Navigation & UI logic
├── information.css       # Services page styling
├── general.css           # Form styling
├── index.php             # Homepage
├── information.php       # Medical Services & About
├── general_form.php      # Standard Patient Intake
├── disability_form.php   # Disability Registry
├── submit_general.php    # Patient submission backend
└── submit_disability.php # Disability submission backend
</pre>

<h2>🛡️ Security Note</h2>
<p>This project uses PHP Prepared Statements (<code>$stmt-&gt;prepare</code>) for all database interactions to prevent SQL Injection attacks.</p>

<h2>📚 Technologies Used</h2>
<p>PHP 8+, MySQL / MariaDB, HTML5, CSS3 (Flexbox & Grid), JavaScript (ES6), Responsive design using CSS Clamp typography.</p>

<h2>📈 Contributing</h2>
<ol>
  <li>Fork the repository.</li>
  <li>Create a branch: <code>git checkout -b feature-name</code></li>
  <li>Commit your changes: <code>git commit -m 'Add feature'</code></li>
  <li>Push: <code>git push origin feature-name</code></li>
  <li>Open a Pull Request.</li>
</ol>

<h2>🐞 Bug Reporting</h2>
<p>If you find a bug, create an issue with steps to reproduce, expected behavior, actual behavior, and screenshots if applicable.</p>

<h2>💡 Future Enhancements</h2>
<ul>
  <li>Admin panel for managing patients & disabilities</li>
  <li>Email notifications for new registrations</li>
  <li>Analytics dashboard for hospital data</li>
  <li>Multi-language support</li>
</ul>

<h2>👨‍💻 Developer</h2>
<p><strong>Diplap Kadel</strong> | Open Source Developer</p>
<ul>
  <li>GitHub: <a href="https://github.com/Diplapkadel1" target="_blank">https://github.com/Diplapkadel1</a></li>
  <li>Email: <a href="mailto:official.diplap.np@gmail.com">official.diplap.np@gmail.com</a></li>
</ul>

<h3>Connect with me:</h3>
<p>
<a href="https://fb.com/diplap.kadel" target="_blank"><img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/facebook.svg" alt="Facebook" height="30" width="40"></a>
<a href="https://instagram.com/simply-diplap" target="_blank"><img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/instagram.svg" alt="Instagram" height="30" width="40"></a>
<a href="https://www.youtube.com/c/vocalreplay" target="_blank"><img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/youtube.svg" alt="YouTube" height="30" width="40"></a>
</p>

<h3>Languages and Tools:</h3>
<p>
<a href="#" target="_blank"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="HTML" width="40" height="40"></a>
<a href="#" target="_blank"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="CSS" width="40" height="40"></a>
<a href="#" target="_blank"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="JS" width="40" height="40"></a>
<a href="#" target="_blank"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="PHP" width="40" height="40"></a>
<a href="#" target="_blank"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="Laravel" width="40" height="40"></a>
<a href="#" target="_blank"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg" alt="Python" width="40" height="40"></a>
</p>

<h2>📄 License</h2>
<p>Distributed under the MIT License. See <code>LICENSE</code> for more information.</p>
