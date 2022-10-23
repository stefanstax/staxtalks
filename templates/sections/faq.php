<?php include(__DIR__ . '/../../paletteSystem.php'); ?>

<?php

// ACF Image Fallback
$fallbackImageUrl = get_field("faq_fallback_image", 1140);

$args = array(
    'post_type' => 'questions'
);
$loop = new WP_Query($args);

?>
<div class="my-4 flex gap-[20px] flex-wrap justify-start items-center">
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="flex flex-col items-center justify-start rounded-2xl bg-[<?php echo $SnowWhite; ?>] shadow-lg shadow-[<?php echo $BabyBlueShadow; ?>] w-full md:max-w-[300px] min-h-[420px]">
            <!-- Default Thumbnail -->
            <?php if ($fallbackImageUrl) { ?>
                <img class="rounded-t-md" src="<?php echo $fallbackImageUrl; ?>" alt="">
            <?php } ?>
            <!-- Post Content -->
            <div class="w-full p-4">
                <h3 class="text-large"><?php the_title(); ?></h3>
                <?php the_field('answer'); ?>
            </div>
        </div>
    <?php
    endwhile;

    wp_reset_postdata(); ?>
</div>