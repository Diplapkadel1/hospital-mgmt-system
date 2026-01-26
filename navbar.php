<?php
// Get the current file name to highlight the active tab
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- START NAVBAR -->
<style>
    :root {
        --primary: #004a99;
        --secondary: #00a8cc;
        --dark: #1a1a1a;
        --light: #f4f7f6;
        --white: #ffffff;
        --accent: #e74c3c;
        --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    /* --- TOP BAR (Desktop Only) --- */
    .nav-top-bar {
        background: var(--primary);
        color: white;
        font-size: 0.85rem;
        padding: 8px 0;
    }
    .nav-top-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
    }

    /* --- DESKTOP HEADER --- */
    .main-header {
        background: var(--white);
        padding: 15px 0;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
        display: block;
    }
    .header-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .logo {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--primary);
        text-decoration: none;
    }
    .desktop-menu {
        display: flex;
        list-style: none;
        gap: 15px;
        align-items: center;
    }
    .desktop-menu a {
        text-decoration: none;
        color: var(--dark);
        font-weight: 500;
        font-size: 0.95rem;
        padding: 8px 12px;
        transition: var(--transition);
        position: relative;
    }
    .desktop-menu a.active { color: var(--primary); }
    .desktop-menu a.active::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 20%;
        width: 60%;
        height: 3px;
        background: var(--secondary);
        border-radius: 10px;
    }
    .nav-admin-btn {
        border: 2px solid var(--secondary);
        border-radius: 8px;
        color: var(--secondary) !important;
    }
    .nav-admin-btn:hover { background: var(--secondary); color: white !important; }

    /* --- MOBILE BOTTOM TAB BAR --- */
    .mobile-bottom-nav {
        display: none; /* Hidden on Desktop */
        position: fixed;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        width: 92%;
        max-width: 450px;
        height: 65px;
        background: var(--white);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.25);
        z-index: 9999;
        justify-content: space-around;
        align-items: center;
    }
    .tab-item {
        text-decoration: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #888;
        transition: 0.5s;
        position: relative;
        flex: 1;
    }
    .tab-icon {
        font-size: 1.4rem;
        transition: 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .tab-label {
        font-size: 0.65rem;
        font-weight: 600;
        opacity: 0;
        transform: translateY(15px);
        transition: 0.5s;
        position: absolute;
        bottom: 5px;
    }

    /* THE JUMP ANIMATION */
    .tab-item.active .tab-icon {
        transform: translateY(-32px);
        background: var(--white);
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        box-shadow: 0 8px 15px rgba(0,0,0,0.1);
        color: var(--primary);
    }
    .tab-item.active .tab-label {
        opacity: 1;
        transform: translateY(0);
        color: var(--primary);
    }

    /* Mobile specific responsiveness */
    @media (max-width: 768px) {
        .nav-top-bar, .main-header { display: none; }
        .mobile-bottom-nav { display: flex; }
        body { padding-bottom: 90px !important; } /* Space so content isn't hidden by nav */
    }
</style>

<!-- Desktop View -->
<div class="nav-top-bar">
    <div class="nav-top-content">
        <span>📍 123 Healthcare Way</span>
        <span>📞 Emergency: (555) 012-3456</span>
    </div>
</div>
<header class="main-header">
    <div class="header-container">
        <a href="index.php" class="logo">🏥 Helping Hand</a>
        <nav>
            <ul class="desktop-menu">
                <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="information.php" class="<?= $current_page == 'information.php' ? 'active' : '' ?>">Info</a></li>
                <li><a href="general_form.php" class="<?= $current_page == 'general_form.php' ? 'active' : '' ?>">General Form</a></li>
                <li><a href="disability_form.php" class="<?= $current_page == 'disability_form.php' ? 'active' : '' ?>">Disability Form</a></li>
                <li><a href="admin_panel.php" class="nav-admin-btn <?= $current_page == 'admin_panel.php' ? 'active' : '' ?>">Admin</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Mobile View (Bottom Tab Bar) -->
<nav class="mobile-bottom-nav">
    <a href="index.php" class="tab-item <?= ($current_page == 'index.php' || $current_page == '') ? 'active' : '' ?>">
        <span class="tab-icon">🏠</span>
        <span class="tab-label">Home</span>
    </a>
    <a href="information.php" class="tab-item <?= $current_page == 'information.php' ? 'active' : '' ?>">
        <span class="tab-icon">ℹ️</span>
        <span class="tab-label">Info</span>
    </a>
    <a href="general_form.php" class="tab-item <?= $current_page == 'general_form.php' ? 'active' : '' ?>">
        <span class="tab-icon">📝</span>
        <span class="tab-label">Form</span>
    </a>
    <a href="disability_form.php" class="tab-item <?= $current_page == 'disability_form.php' ? 'active' : '' ?>">
        <span class="tab-icon">♿</span>
        <span class="tab-label">Special</span>
    </a>
    <a href="admin_panel.php" class="tab-item <?= $current_page == 'admin_panel.php' ? 'active' : '' ?>">
        <span class="tab-icon">🔐</span>
        <span class="tab-label">Admin</span>
    </a>
</nav>

<script>
    // Smooth transition for mobile icons
    document.querySelectorAll('.tab-item').forEach(item => {
        item.addEventListener('click', function() {
            document.querySelectorAll('.tab-item').forEach(i => i.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>
