<?php include(__DIR__ . '/../../paletteSystem.php'); ?>

<?php
$args = array(
  'post_type' => 'post',
  'post_status' => "publish"
);

$loop = new WP_Query($args);

?>
<div class="flex gap-[20px] flex-wrap justify-start items-start">
  <?php while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="flex flex-col items-center justify-start rounded-md bg-[<?php echo $SnowWhite; ?>] shadow-lg shadow-[<?php echo $BabyBlueShadow; ?>] w-full md:max-w-[300px] min-h-[450px]">
      <!-- Post Image -->
      <?php echo get_the_post_thumbnail($post_id, array('class' => " mb-4 rounded-t-md")); ?>
      <div class="p-4">
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
            <p class="font-medium"><?php the_excerpt(); ?></p>
          <?php } ?>
        </div>

        <!-- Post CTA -->
        <div class="w-full">
          <a href="<?php the_permalink(); ?>" class="flex justify-start gap-[20px] md:w-7/12 items-center text-white bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> p-2 px-4">
            <!-- <span class="iconify" data-icon="codicon:search"></span> -->
            Read for free
          </a>
        </div>
      </div>
    </div>

  <?php
  endwhile;

  wp_reset_postdata(); ?>
</div>