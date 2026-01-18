<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration | Helping Hand Hospital</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css"> <!-- Import home.css for the header/footer styles -->
    <link rel="stylesheet" href="general.css"> <!-- Form specific styles -->
</head>
<body>
    <!-- Top Bar (Consistent with Index) -->
    <div class="top-bar">
        <div class="container">
            <span>📍 123 Healthcare Way, Medical District</span>
            <span>📞 Emergency: (555) 012-3456</span>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div class="container header-flex">
            <div class="logo">
                <span class="icon">🏥</span> Helping Hand <span class="bold">Hospital</span>
            </div>
            <nav id="nav-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="information.php">Hospital Information</a></li>
                    <li><a href="general_form.php" class="active">General Form</a></li>
                    <li><a href="disability_form.php">Disability Form</a></li>
                    <li><a href="#" class="btn-emergency">Emergency</a></li>
                </ul>
            </nav>
            <button id="toggleNav" class="mobile-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <main class="form-page">
        <div class="container">
            <div class="form-card">
                <div class="form-header">
                    <h2>General Patient Registration</h2>
                    <p>Please fill out the details below accurately. All fields marked with * are required.</p>
                </div>

                <form action="submit_general.php" method="POST" id="generalForm" onsubmit="return validateGeneralForm()">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">First Name *</label>
                            <input type="text" id="first_name" name="first_name" placeholder="John" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Doe" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="age">Age *</label>
                            <input type="number" id="age" name="age" placeholder="25" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender *</label>
                            <select id="gender" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact_number">Contact Number (Starting 97/98) *</label>
                        <input type="text" id="contact_number" name="contact_number" placeholder="98XXXXXXXX" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Residential Address *</label>
                        <textarea id="address" name="address" rows="2" placeholder="Street, City, State" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="medical_history">Medical History (Optional)</label>
                        <textarea id="medical_history" name="medical_history" rows="4" placeholder="Briefly describe any previous conditions or allergies..."></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-submit">Register Patient</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; 2024 Helping Hand Hospital. All rights reserved.</p>
        </div>
    </footer>

    <!-- Use the fixed home.js for navigation -->
    <script src="home.js"></script>
    <script>
        // Form specific validation logic
        function validateGeneralForm() {
            const phone = document.getElementById('contact_number').value.trim();
            const age = parseInt(document.getElementById('age').value);
            
            const phoneRegex = /^(97|98)\d{8}$/;
            if (!phoneRegex.test(phone)) {
                alert("Please enter a valid 10-digit phone number starting with 97 or 98.");
                return false;
            }

            if (isNaN(age) || age <= 0 || age > 120) {
                alert("Please enter a valid age.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>