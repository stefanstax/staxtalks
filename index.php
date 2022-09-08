<?php get_header(); ?>

<?php include(__DIR__ . '/paletteSystem.php'); ?>
<?php get_header(); ?>

<?php get_template_part("templates/sections/nav/navigation_showcase", "part"); ?>
<section class="w-full lg:<?php echo $NavigationContentOffset; ?>">
  <!-- ? Banner for the page -->
  <div class="banner">
    <?php if (is_page()) {
      get_template_part("templates/sections/banners/pages", "part");
    } else {
      get_template_part("templates/sections/banners/single", "part");
    } ?>
  </div>
  <div class="container my-12 lg:my-24 px-4 mx-auto">
    <!-- ? Show breadcrumbs depending on the page -->
    <?php if (!is_page("website-release")) {
      if (function_exists('rank_math_the_breadcrumbs')) {
        rank_math_the_breadcrumbs();
      }
    }

    // ? Content for the page
    if (is_page()) {
      get_template_part("templates/sections/content/pages", "part");
    } else {
      get_template_part("templates/sections/content/single", "part");
    }
    ?>

  </div>

</section>

<?php get_footer(); ?>