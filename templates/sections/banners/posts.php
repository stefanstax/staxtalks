<?php include(__DIR__ . '/../../../paletteSystem.php'); ?>

<?php if (have_posts()) {

  while (have_posts()) {
    $category = get_the_category();
    if (!empty(get_the_terms($post->ID, 'client_category'))) {
      $terms = get_the_terms($post->ID, 'client_category');
    }
    the_post(); ?>
    <div class="w-full h-full px-3 py-6 bg-[<?php echo $MatteBlack; ?>] text-[<?php echo $OffWhite; ?>] flex flex-col justify-between align-center drop-shadow-2xl">
      <h1 class="max-w-2xl mx-auto py-4 pb-0 text-3xl"><?php the_title(); ?></h1>
      <p class="text-center max-w-2xl exclusion mx-auto mb-3 py-4 text-xl">
        <?php the_excerpt(); ?>
      </p>
      <div class="flex gap-[5px] text-[<?php echo $MatteBlack; ?>] flex-col lg:flex-row flex-wrap justify-center align-center h-full">
        <div class="bg-[<?php echo $BabyBlue; ?>] drops-shadow-md p-2 px-4 forbidden <?php echo $roundedFull; ?>">
          <span class="w-full post__author">
            <iconify-icon inline icon="akar-icons:person" width="18" height="18" class="mr-2"></iconify-icon>
            </i> <?php the_author(); ?>
          </span>
        </div>
        <div class="bg-[<?php echo $BabyBlue; ?>] drops-shadow-md p-2 px-4 forbidden <?php echo $roundedFull; ?>">
          <span class="w-full post__time">
            <iconify-icon inline icon="akar-icons:calendar" width="18" height="18" class="mr-2"></iconify-icon>
            </i> <?php if (empty(get_the_date('l F j, Y'))) {
                    echo "Current post is in draft";
                  } else {
                    echo get_the_date('l F j, Y');
                  } ?>
          </span>
        </div>
        <?php if (!empty($category)) { ?>
          <div class="bg-[<?php echo $BabyBlue; ?>] drops-shadow-md p-2 px-4 forbidden <?php echo $roundedFull; ?>">
            <iconify-icon inline icon="akar-icons:pin" width="18" height="18" class="mr-2"></iconify-icon>
            <span>
              </i> <?php echo $category[0]->name; ?>
            </span>
          </div>
        <?php } ?>
        <?php if (!empty(get_the_terms($post->ID, 'client_category'))) { ?>
          <div class="flex gap-[5px] justify-center items-center bg-[<?php echo $BabyBlue; ?>] drops-shadow-md p-2 px-4 forbidden <?php echo $roundedFull; ?>">
            <iconify-icon inline icon="akar-icons:flag" width="18" height="18" class="mr-2"></iconify-icon>
            <?php echo $terms[0]->name; ?>
          </div>
        <?php } ?>
      </div>
    </div>
<?php
  }
}
