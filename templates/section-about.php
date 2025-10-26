<?php
// templates/about-section.php
// Use this partial in a page template with: get_template_part('templates/about-section');
?>
<section id="about" class="bg-light text-dark py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="display-5 fw-bold text-primary mb-4">About Me</h2>

        <p class="lead text-justify mb-3">
          <?php
          // The content below is static; replace with dynamic calls if you want (see note).
          echo esc_html(
            "I am Satya Srinath Nekkanti, a passionate Full-Stack Developer and AI/Gen AI enthusiast with over 8 years of professional experience in designing and delivering web applications, AI-powered solutions, and cloud-based projects. I have successfully completed 25+ projects, including CRUD systems, AI offline and OpenAI-integrated apps, and live websites."
          );
          ?>
        </p>

        <p class="mb-0 text-justify">
          <?php
          echo esc_html(
            "My core expertise lies in Python, Java, PHP, and modern web frameworks like React.js, Next.js, Angular, MERN/MEAN/MEVN stacks, as well as AI/ML libraries, DevOps, SDLC in cloud, databases, analytics, and SEO. I am passionate about building efficient, scalable, and innovative solutions that leverage AI to solve real-world problems."
          );
          ?>
        </p>
      </div>
    </div>
  </div>
</section>
