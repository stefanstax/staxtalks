<?php include(__DIR__ . '/../../paletteSystem.php'); ?>

<?php
$args = array(
    'post_type' => 'affiliates'
);

$loop = new WP_Query($args);
?>
<div class="my-4 flex gap-[20px] flex-wrap justify-start items-center">
    <?php while ($loop->have_posts()) : $loop->the_post();
    ?>
        <div class="flex rounded-2xl bg-[<?php echo $SnowWhite; ?>] shadow-lg shadow-[<?php echo $BabyBlueShadow; ?>] p-4 w-full md:w-5/12">
            <!-- Post Content -->
            <div class="w-full flex flex-wrap items-stretch justify-stretch min-h-[270px]">
                <h3 class="text-large font-black"><?php the_title(); ?></h3>
                <p class="font-medium"><?php echo the_excerpt(); ?></p>

                <!-- Post CTA -->
                <div class="w-full flex gap-[5px] justify-start items-center">
                    <a href="<?php the_field("affiliate_link"); ?>" class="flex justify-start md:w-7/12 items-center text-white bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> p-2 px-4">
                        <?php the_field("cta_label"); ?>
                    </a>
                    <a href="<?php the_permalink(); ?>" class="flex justify-start md:w-7/12 items-center text-white bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> p-2 px-4">
                        Visit Page
                    </a>
                </div>
            </div>
        </div>
    <?php
    endwhile;

    wp_reset_postdata(); ?>
</div>