<!-- Sidebar Admin Pannel -->

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-2x"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="admin-questions.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-question-circle fa-2x"></i></div>
                        Questions
                    </a>
                    <a class="nav-link" href="admin-contribution.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-archive fa-2x"></i></div>
                        Contributions
                    </a>
                    <a class="nav-link" href="admin-suggestions.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-lightbulb fa-2x"></i></div>
                        Suggestions
                    </a>
                    <a class="nav-link" href="admin-contact.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-phone fa-2x"></i></div>
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?php
                if (isset($_SESSION['admin_id'])) {
                    echo $_SESSION['admin_username'];
                }
                ?>
            </div>
        </nav>
    </div>