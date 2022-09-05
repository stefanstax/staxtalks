<?php include(__DIR__ . '/../../paletteSystem.php'); ?>

<?php
$args = array(
  'post_type' => 'post'
);

$loop = new WP_Query($args);

?>
<div class="flex gap-[20px] flex-wrap justify-start items-center">
  <?php while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="flex flex-col items-center justify-between rounded-xl bg-[<?php echo $SnowWhite; ?>] shadow-lg shadow-[<?php echo $BabyBlueShadow; ?>] p-4 w-full md:max-w-[300px] min-h-[300px]">
      <!-- Post Tags -->
      <div class="w-full my-2 text-[<?php echo $MatteBlack; ?>] text-sm">
        <div class="flex gap-[5px] font-black">
          Tags: <?php the_tags('<ul class="exclude__default" ><li>', '</li><li>', '</li></ul>'); ?>
        </div>
      </div>

      <!-- Post Content -->
      <div class="w-full mb-2">
        <!-- Post Title -->
        <h3 class="text-large font-black"><?php the_title(); ?></h3>
        <!-- Post Excerpt -->
        <?php if (!empty(get_the_excerpt())) { ?>
          <p class="text-base font-medium"><?php the_excerpt(); ?></p>
        <?php } ?>
      </div>

      <!-- Post CTA -->
      <div class="w-full">
        <a href="<?php the_permalink(); ?>" class="flex justify-start gap-[20px] md:w-7/12 items-center text-white bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> p-2 px-4">
          <!-- <span class="iconify" data-icon="codicon:search"></span> -->
          Continue
        </a>
      </div>
    </div>

  <?php
  endwhile;

  wp_reset_postdata(); ?>
</div>