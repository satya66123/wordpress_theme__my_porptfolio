<?php get_header(); ?>
<main class="container py-5">
  <?php get_template_part('templates/section', 'about'); ?>
  <?php get_template_part('templates/section', 'skills'); ?>
  <?php get_template_part('templates/section', 'projects'); ?>
  <?php get_template_part('templates/section', 'certificates'); ?>
  <?php get_template_part('templates/section', 'experience'); ?>
  <?php get_template_part('templates/section', 'education'); ?>
  <?php get_template_part('templates/section', 'contact'); ?>
</main>
<?php get_footer(); ?>