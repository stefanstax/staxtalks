<?php
// Template Name: Contact Page
?>
<?php include(__DIR__ . '/paletteSystem.php'); ?>
<?php get_header(); ?>

<?php get_template_part("templates/sections/nav/navigation_showcase", "part"); ?>
<section class="w-full lg:<?php echo $NavigationContentOffset; ?>">
    <div class="banner">
        <?php get_template_part("templates/sections/banners/pages", "part"); ?>
    </div>
    <div class="container my-12 lg:my-24 px-4 mx-auto">
        <?php
        if (function_exists('rank_math_the_breadcrumbs')) {
            rank_math_the_breadcrumbs();
        }
        get_template_part("templates/pages/page-contact", "part");
        ?>
    </div>
    <h1>Git connection test!</h1>

</section>

<?php get_footer(); ?>
