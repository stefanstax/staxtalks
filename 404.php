<?php include(__DIR__ . '/paletteSystem.php'); ?>
<?php get_header(); ?>

<?php get_template_part("templates/sections/nav/navigation_showcase", "part"); ?>
<section class="w-full lg:<?php echo $NavigationContentOffset; ?>">
    <div class="banner">
        <?php get_template_part("templates/sections/banners/pages", "part"); ?>
    </div>
    <div class="container my-12 lg:my-24 px-4 mx-auto">
        <?php
        if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();
        ?>
        <div class="flex gap-[20px] flex-wrap justify-start items-center">
            <h1>Huh, seems like you got lost!</h1>
            <div class="flex">
                <a href="#">Go back in history</a>
                <a href="#">Back to home</a>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>