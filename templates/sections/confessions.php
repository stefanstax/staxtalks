<?php include(__DIR__ . '/../../paletteSystem.php'); ?>

<?php
$args = array(
    'post_type' => 'confessions'
);

$loop = new WP_Query($args);

?>
<div class="my-4 my-12 flex gap-[20px] flex-wrap justify-start items-center">
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="flex flex-col items-center justify-between rounded-2xl bg-[<?php echo $SnowWhite; ?>] shadow-lg shadow-[<?php echo $BabyBlueShadow; ?>] p-4 w-full md:max-w-[300px]">
            <!-- Post Content -->
            <div class="w-full">
                <p class="text-base font-medium"><?php echo the_content(); ?></p>
            </div>
        </div>
    <?php
    endwhile;

    wp_reset_postdata(); ?>
</div>