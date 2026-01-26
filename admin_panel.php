<?php
session_start();
include('db.php');

// --- 1. HANDLE LOGOUT ---
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin_panel.php");
    exit();
}

// --- 2. HANDLE LOGIN ---
$error = "";
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // For this specific setup, we check the hardcoded credentials you requested
    // Username: Diplap | Password: W00dlife
    if ($username === 'Diplap' && $password === 'W00dlife') {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user'] = $username;
    } else {
        $error = "Invalid username or password!";
    }
}

// --- 3. LOGIN FORM HTML ---
if (!isset($_SESSION['admin_logged_in'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Helping Hand Hospital</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <style>
        .login-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light);
            padding: 20px;
        }
        .login-card {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-card h2 { color: var(--primary); margin-bottom: 10px; }
        .login-card p { color: #777; font-size: 0.9rem; margin-bottom: 30px; }
        .form-group { text-align: left; margin-bottom: 20px; }
        .form-group label { display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 5px; }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #eee;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }
        .form-group input:focus { border-color: var(--secondary); }
        .btn-login {
            width: 100%;
            padding: 12px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-login:hover { background: var(--secondary); transform: translateY(-2px); }
        .error-msg { color: var(--accent); font-size: 0.85rem; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div style="font-size: 3rem;">🔐</div>
            <h2>Staff Login</h2>
            <p>Enter your credentials to access the dashboard.</p>
            
            <?php if($error) echo "<div class='error-msg'>$error</div>"; ?>

            <form action="" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required placeholder="Enter password">
                </div>
                <button type="submit" name="login" class="btn-login">Access Dashboard</button>
            </form>
            <div style="margin-top: 20px;">
                <a href="index.php" style="color: var(--primary); text-decoration: none; font-size: 0.8rem;">← Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    exit(); // Stop the rest of the page from loading
}

// --- 4. DASHBOARD DATA FETCHING (Only runs if logged in) ---
$patient_query = "SELECT * FROM patients ORDER BY created_at DESC";
$patient_result = mysqli_query($conn, $patient_query);

$disability_query = "SELECT * FROM disabilities ORDER BY created_at DESC";
$disability_result = mysqli_query($conn, $disability_query);

$total_patients = mysqli_num_rows($patient_result);
$total_disabilities = mysqli_num_rows($disability_result);
?>

<!-- START OF ACTUAL DASHBOARD HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Helping Hand Hospital</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <style>
        .admin-main { padding: 30px 0; background-color: var(--light); min-height: 100vh; }
        .dashboard-summary { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 40px; }
        .card { background: var(--white); padding: 30px; border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); border-left: 5px solid var(--primary); transition: var(--transition); }
        .card:hover { transform: translateY(-5px); }
        .card h3 { font-size: 0.9rem; text-transform: uppercase; color: #777; margin-bottom: 10px; }
        .card .count { font-size: 2.5rem; font-weight: 700; color: var(--primary); }
        .section-title { margin: 40px 0 20px; font-size: 1.5rem; color: var(--primary); display: flex; align-items: center; gap: 10px; }
        .table-container { background: var(--white); border-radius: 15px; overflow: hidden; box-shadow: 0 10px 20px rgba(0,0,0,0.05); margin-bottom: 40px; overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; min-width: 900px; }
        table th { background-color: var(--primary); color: var(--white); text-align: left; padding: 15px; }
        table td { padding: 15px; border-bottom: 1px solid #eee; font-size: 0.9rem; }
        .badge { padding: 5px 10px; border-radius: 5px; font-size: 0.75rem; font-weight: 600; background: var(--secondary); color: white; }
        .logout-btn { background: var(--accent); color: white !important; padding: 8px 15px; border-radius: 5px; text-decoration: none; font-size: 0.8rem; font-weight: 600; }
        @media (max-width: 768px) { .admin-main { padding-top: 10px; } }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="admin-main">
        <div class="container">
            
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h1 style="color: var(--dark);">Admin Control Panel</h1>
                <a href="?logout=true" class="logout-btn">Logout</a>
            </div>

            <!-- Dashboard Summary Cards -->
            <div class="dashboard-summary">
                <div class="card">
                    <h3>Total Patients</h3>
                    <div class="count"><?php echo $total_patients; ?></div>
                </div>
                <div class="card" style="border-left-color: var(--secondary);">
                    <h3>Disability Support</h3>
                    <div class="count"><?php echo $total_disabilities; ?></div>
                </div>
                <div class="card" style="border-left-color: #27ae60;">
                    <h3>Welcome</h3>
                    <div class="count" style="font-size: 1.2rem; color: #27ae60;"><?php echo $_SESSION['admin_user']; ?></div>
                </div>
            </div>

            <!-- Patients Table -->
            <div id="patients" class="section-title">
                <span>👥</span> Patient Registrations
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age/Gender</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Medical History</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($patient_result)): ?>
                        <tr>
                            <td>#<?php echo $row['id']; ?></td>
                            <td><strong><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></strong></td>
                            <td><?php echo $row['age']; ?> / <span class="badge"><?php echo $row['gender']; ?></span></td>
                            <td><?php echo $row['contact_number']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><div title="<?php echo $row['medical_history']; ?>" style="max-width:200px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;"><?php echo $row['medical_history']; ?></div></td>
                            <td><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <!-- Disabilities Table -->
            <div id="disabilities" class="section-title">
                <span>♿</span> Disability Support List
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age/Gender</th>
                            <th>Contact</th>
                            <th>Details</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($disability_result)): ?>
                        <tr>
                            <td>#<?php echo $row['id']; ?></td>
                            <td><strong><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></strong></td>
                            <td><?php echo $row['age']; ?> / <span class="badge"><?php echo $row['gender']; ?></span></td>
                            <td><?php echo $row['contact_number']; ?></td>
                            <td><div title="<?php echo $row['disability_details']; ?>" style="max-width:200px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;"><?php echo $row['disability_details']; ?></div></td>
                            <td><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Helping Hand Hospital Admin.</p>
        </div>
    </footer>

    <script src="home.js"></script>
</body>
</html>
