<?php include(__DIR__ . '/../../../paletteSystem.php'); ?>

<?php if (have_posts()) {

  while (have_posts()) {
    $category = get_the_category();
    if (!empty(get_the_terms($post->ID, 'client_category'))) {
      $terms = get_the_terms($post->ID, 'client_category');
    }
    the_post(); ?>

    <!-- Banner Container -->
    <section class="w-full lg:<?php echo $NavigationContentOffset; ?> px-8 py-6 mx-auto bg-[<?php echo $MatteBlack; ?>] text-[<?php echo $OffWhite; ?>] drop-shadow-2xl">
      <!-- Banner Container for content -->
      <div class="flex flex-wrap mx-auto w-full justify-between items-center max-w-[1024px]">
        <!-- Post Content -->
        <div class="w-full lg:w-7/12 xl:w-5/12">
          <h1 class="max-w-2xl py-4 pb-0 text-3xl xl:text-5xl"><?php the_title(); ?></h1>
          <p class="max-w-2xl exclusion mb-3 py-4 text-2xl">
            <?php the_excerpt(); ?>
          </p>
        </div>
        <!-- Buttons - CTA -->
        <div class="w-full lg:w-4/12 xl:w-2/12 flex gap-[5px] flex-col lg:flex-row flex-wrap justify-center align-center h-full">
          <div class="w-full bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] border-[1px] border-[<?php echo $Silver; ?>] <?php echo $roundedFull; ?> drops-shadow-md p-2 px-4 forbidden <?php echo $roundedFull; ?>">
            <span class="w-full post__author">
              <iconify-icon inline icon="akar-icons:person" width="18" height="18" class="mr-2"></iconify-icon>
              </i> <?php the_author(); ?>
            </span>
          </div>
          <div class="w-full bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] border-[1px] border-[<?php echo $Silver; ?>] <?php echo $roundedFull; ?> drops-shadow-md p-2 px-4 forbidden <?php echo $roundedFull; ?>">
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
            <div class="w-full bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] border-[1px] border-[<?php echo $Silver; ?>] <?php echo $roundedFull; ?> drops-shadow-md p-2 px-4 forbidden <?php echo $roundedFull; ?>">
              <iconify-icon inline icon="akar-icons:pin" width="18" height="18" class="mr-2"></iconify-icon>
              <span>
                </i> <?php echo $category[0]->name; ?>
              </span>
            </div>
          <?php } ?>
          <?php if (!empty(get_the_terms($post->ID, 'client_category'))) { ?>
            <div class="w-full flex gap-[5px] justify-center items-center bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] border-[1px] border-[<?php echo $Silver; ?>] <?php echo $roundedFull; ?> drops-shadow-md p-2 px-4 forbidden <?php echo $roundedFull; ?>">
              <iconify-icon inline icon="akar-icons:flag" width="18" height="18" class="mr-2"></iconify-icon>
              <?php echo $terms[0]->name; ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
<?php
  }
}
