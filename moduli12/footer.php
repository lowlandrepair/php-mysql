<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="bi bi-gem me-3"></i>Auth System
          </h6>
          <p>
            Secure authentication system with modern Bootstrap 5 design. 
            Built with PHP, MySQL, and Bootstrap for the best user experience.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Authentication</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Security</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Performance</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Design</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="index.php" class="text-reset text-decoration-none">Home</a>
          </p>
          <p>
            <a href="login.php" class="text-reset text-decoration-none">Login</a>
          </p>
          <p>
            <a href="signup.php" class="text-reset text-decoration-none">Sign Up</a>
          </p>
          <?php if(isset($_SESSION['user_id'])): ?>
          <p>
            <a href="dashboard.php" class="text-reset text-decoration-none">Dashboard</a>
          </p>
          <?php endif; ?>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="bi bi-geo-alt me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="bi bi-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="bi bi-telephone me-3"></i> + 01 234 567 88</p>
          <p><i class="bi bi-printer me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    &copy; 2024 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Auth System</a>
  </div>
  <!-- Copyright -->
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>