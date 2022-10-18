<?php include(__DIR__ . '/componentPath.php'); ?>
<?php include(__DIR__ . '/paletteSystem.php'); ?>

<?php get_header(); ?>

<!-- lg:<?php echo $NavigationContentOffset; ?> -->
<!-- <?php echo $ContentNavMobile; ?> lg:<?php echo $ContentNavTablet; ?> xl:<?php echo $ContentNavDesktop; ?> -->

<?php get_template_part("templates/sections/nav/navigation_showcase", "part"); ?>
<div class="w-full">
  <div class="banner lg:<?php echo $NavigationContentOffset; ?>">
    <?php get_template_part("templates/sections/banners/posts", "part"); ?>
  </div>
  <div class="flex justify-center items-start flex-wrap flex-col-reverse gap-[10px] mx-auto my-12 px-4 lg:<?php echo $ContentNavTablet; ?> lg:flex-nowrap lg:my-24 lg:px-0 xl:flex-row">
    <div class="container">
      <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
      <?php get_template_part("templates/sections/content/posts", "part"); ?>
    </div>
    <?php get_template_part("templates/sections/tableofcontents", "part"); ?>

  </div>
</div>

<?php get_footer(); ?>