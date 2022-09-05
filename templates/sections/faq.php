<?php include(__DIR__ . '/../../paletteSystem.php'); ?>

<?php
$args = array(
    'post_type' => 'questions'
);

$loop = new WP_Query($args);

?>
<div class="my-4 flex gap-[20px] flex-wrap justify-start items-center">
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="flex flex-col items-center justify-between rounded-2xl bg-[<?php echo $SnowWhite; ?>] shadow-lg shadow-[<?php echo $BabyBlueShadow; ?>] p-4 w-full md:max-w-[300px] min-h-[250px]">
            <!-- Post Content -->
            <div class="w-full">
                <h3 class="text-large font-black"><?php the_title(); ?></h3>
                <p class="text-base font-medium"><?php the_field('answer'); ?></p>
            </div>
        </div>
    <?php
    endwhile;

    wp_reset_postdata(); ?>
</div>