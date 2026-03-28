<?php include 'header.php'; ?>

<div class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">Welcome to Auth System</h1>
        <p class="lead mb-4">Secure authentication system with modern design</p>
        <?php if(isset($_SESSION['user_id'])): ?>
            <a href="dashboard.php" class="btn btn-light btn-lg me-3">
                <i class="bi bi-speedometer2"></i> Go to Dashboard
            </a>
            <a href="logout.php" class="btn btn-outline-light btn-lg">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        <?php else: ?>
            <a href="logform.php" class="btn btn-light btn-lg me-3">
                <i class="bi bi-box-arrow-in-right"></i> Login / Sign Up
            </a>
        <?php endif; ?>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-shield-check text-primary" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Secure</h5>
                    <p class="card-text">Advanced security features to protect your data</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-lightning-charge text-primary" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Fast</h5>
                    <p class="card-text">Lightning-fast authentication and response times</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-phone text-primary" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Responsive</h5>
                    <p class="card-text">Works perfectly on all devices and screen sizes</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
