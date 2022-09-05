<?php include(__DIR__ . '/../../paletteSystem.php'); ?>

<?php
$args = array(
  'post_type' => 'client'
);


$loop = new WP_Query($args);

$projectName = $loop->post_title;
?>

<div class="my-4 flex gap-[20px] flex-wrap justify-start items-center">
  <?php
  while ($loop->have_posts()) : $loop->the_post();

    // ? Set project features image url
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    // ? Get project current status 
    if (!empty(get_the_terms($post->ID, 'client_status'))) {
      $terms = get_the_terms($post->ID, 'client_status');
    } ?>

    <div class="flex flex-col items-center justify-between rounded-2xl bg-[<?php echo $SnowWhite; ?>] shadow-lg shadow-[<?php echo $BabyBlueShadow; ?>] p-4 w-full md:max-w-[300px] min-h-[300px]" id="<?php echo strtolower(str_replace(" ", "", get_the_title())); ?>">
      <!-- Post Image -->
      <!-- <div class="w-full min-h-[70px] flex justify-center items-center">
        <img class="max-h-[70px] w-6/12 mx-auto rounded-md object-contain" src="<?php echo $image[0]; ?>" alt="Illustrated version of Stefan Stax presented in an outlined S variant">
      </div> -->
      <!-- Post Tags -->
      <div class="w-full flex justify-start items-center gap-[10px] my-2 text-[<?php echo $MatteBlack; ?>] text-sm">
        <!-- <div class="flex gap-[5px] bg-[#fff] rounded-full p-2 px-4">
          Platform: <?php the_tags('<ul class="exclude__default"><li>', '</li><li>', '</li></ul>'); ?>
        </div> -->
        <div class="flex gap-[5px]">
          <!--Project Status:--> <?php echo $terms[0]->name; ?>
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
        <a href="<?php the_permalink(); ?>" class="flex justify-start gap-[20px] md:w-7/12 items-center text-white bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] <?php echo $roundedFull; ?> p-2 px-4">Explore</a>
      </div>
    </div>

  <?php
  endwhile;

  wp_reset_postdata(); ?>
</div>