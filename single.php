<?php include(__DIR__ . '/componentPath.php'); ?>
<?php include(__DIR__ . '/paletteSystem.php'); ?>

<?php get_header(); ?>

<?php get_template_part("templates/sections/nav/navigation_showcase", "part"); ?>
<?php get_template_part("templates/sections/banners/posts", "part"); ?>
<div class="w-full flex lg:<?php echo $ContentNavLG; ?> justify-center items-start flex-wrap flex-col gap-[10px] my-12 px-8 lg:my-24 lg:px-0 xl:flex-row">
  <?php get_template_part("templates/sections/tableofcontents", "part"); ?>
  <?php get_template_part("templates/sections/content/posts", "part"); ?>
</div>

<?php get_footer(); ?>