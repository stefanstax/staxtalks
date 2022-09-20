<?php include(__DIR__ . '/componentPath.php'); ?>
<?php include(__DIR__ . '/paletteSystem.php'); ?>
<?php get_header(); ?>

<?php get_template_part("templates/sections/nav/navigation_showcase", "part"); ?>
<section class="w-full lg:<?php echo $NavigationContentOffset; ?>">
  <div class="banner">
    <?php get_template_part("templates/sections/banners/pages", "part"); ?>
  </div>
  <div class="container my-12 lg:my-24 px-4 mx-auto">
    <?php if (!is_page("website-release")) {
      if (function_exists('rank_math_the_breadcrumbs')) {
        rank_math_the_breadcrumbs();
      }
    }
    get_template_part("templates/sections/content/pages", "part");

    ?>
  </div>

  <!-- Cookie Policy -->
  <?php get_template_part($CookieCompliance, "part"); ?>
  <?php get_template_part($CookieSettings, "part"); ?>
</section>

<?php get_footer(); ?>