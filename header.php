<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Satya Srinath | AI Engineer & Full Stack Developer Portfolio | Projects, Certifications, and Experience">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
<?php
// partials/header-section.php
// Usage: place near the top of your templates with: get_template_part('partials/header-section');
$site_title = 'Satya Srinath Nekkanti'; // replace with dynamic value if needed: get_bloginfo('name');
$sections = array( "about", "skills", "projects", "certifications", "experience", "education", "contact" );
?>

<!-- Fixed top navbar -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top shadow-sm" aria-label="Main navigation">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#home"><?php echo esc_html( $site_title ); ?></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-md-0 align-items-center">
        <?php foreach ( $sections as $section ) : ?>
          <li class="nav-item">
            <a class="nav-link text-capitalize" href="#<?php echo esc_attr( $section ); ?>"><?php echo esc_html( $section ); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>

<style>
/* small helper to mimic Tailwind hover red */
.navbar .nav-link:hover {
  color: #ef4444 !important; /* red-500 */
  transition: color .2s ease;
}
.navbar-brand { cursor: pointer; }
body { padding-top: 72px; } /* ensure page content isn't hidden behind fixed header; adjust if your header height differs */
</style>

</header>