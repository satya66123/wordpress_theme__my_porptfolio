<?php
// partials/footer-section.php
?>

<footer class="bg-dark text-white fixed-bottom shadow-lg py-3">
  <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
    
    <!-- Navigation Links -->
    <nav class="mb-3 mb-md-0">
      <?php
      $sections = array("about", "skills", "projects", "certifications", "experience", "education", "contact");
      foreach ($sections as $section) {
        echo '<a href="#' . esc_attr($section) . '" class="text-white text-capitalize me-3 text-decoration-none fw-semibold hover-link">' . ucfirst($section) . '</a>';
      }
      ?>
    </nav>

    <!-- Social Links -->
    <div class="d-flex align-items-center gap-3 fw-semibold">
      <a href="https://www.linkedin.com/in/satya-srinath-nekkanti-08b012a3" target="_blank" rel="noopener noreferrer" class="text-white text-decoration-none hover-link">LinkedIn</a>
      <a href="https://github.com/satya66123" target="_blank" rel="noopener noreferrer" class="text-white text-decoration-none hover-link">GitHub</a>
    </div>

  </div>

  <!-- Copyright -->
  <div class="text-center small mt-2">
    © <?php echo date("Y"); ?> Satya Srinath. All Rights Reserved.
  </div>
</footer>

<style>
.hover-link:hover {
  color: #ff4d4d !important; /* red hover color similar to Tailwind's red-500 */
  transition: color 0.3s ease;
}
</style>

</body>
</html>