<?php include(__DIR__ . '/componentPath.php'); ?>
<?php include(__DIR__ . '/paletteSystem.php'); ?>

<?php get_header(); ?>

<?php get_template_part("templates/sections/nav/navigation_showcase", "part"); ?>
<div class="w-full lg:<?php echo $NavigationContentOffset; ?>">
  <div class="banner">
    <?php get_template_part("templates/sections/banners/posts", "part"); ?>
  </div>
  <div class="container mx-auto my-12 lg:my-24 px-4 lg:px-0">
    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    <?php get_template_part("templates/sections/content/posts", "part"); ?>
  </div>
</div>
<!-- Cookie Policy -->
<?php get_template_part($CookieCompliance, "part"); ?>
<?php get_template_part($CookieSettings, "part"); ?>
<?php get_footer(); ?>