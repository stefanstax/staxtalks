<!-- DRY -->
<?php
$headingClasses = "max-w-2xl text-center mx-auto py-4 text-3xl";
$contactUrl = "/contact/";
?>
<?php include(__DIR__ . '/../../../paletteSystem.php'); ?>


<?php if (is_page() && !is_single()) { ?>
  <div class="w-full h-full px-4 py-6 bg-[<?php echo $MatteBlack; ?>] text-[<?php echo $Silver; ?>] flex flex-col justify-between items-center drop-shadow-2xl">
    <?php if (is_front_page()) { ?>
      <h1 class="<?php echo $headingClasses; ?> mb-8">My story is <span class="border-solid border-b-2 pb-1 border-stone-400">!completely</span> true except the
        parts that
        were
        totally <span class="border-solid border-b-2 pb-1 border-stone-400">made</span> <span class="border-solid border-b-2 pb-1 border-stone-400">up</span>.</h1>
    <?php } else { ?> <h1 class="<?php echo $headingClasses; ?> mb-8"><?php the_title(); ?></h1>
    <?php } ?>
    <?php if (!is_page("website-release") && !is_page("privacy-policy") && !is_page("terms-and-conditions") && !is_page("contact")) { ?>
      <div class="flex gap-[20px] max-w-[600px] w-full md:w-6/12 flex-wrap justify-center items-center h-full">
        <a href="https://instagram.com/staxtalks/" target="_blank" class="bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] shadow-2xl shadow-[<?php echo $BabyBlueShadow; ?>] <?php echo $roundedFull; ?> p-2 text-center text-white w-full md:w-5/12">
          <span class="flex justify-center items-center">
            <iconify-icon inline icon="akar-icons:instagram-fill" width="18" height="18" class="mr-2"></iconify-icon>
            <span>
              Send me DM
            </span>
          </span>
        </a>
        <a href="<?php echo site_url($contactUrl); ?>" class="bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] shadow-2xl shadow-[<?php echo $BabyBlueShadow; ?>] <?php echo $roundedFull; ?>  p-2 text-center text-white w-full md:w-5/12">
          <span class="flex justify-center items-center">
            <iconify-icon inline icon="akar-icons:inbox" width="18" height="18" class="mr-2"></iconify-icon>
            <span>
              Send an inquiry
            </span>
          </span>
        </a>
      </div>
    <?php } ?>
  </div> <?php } ?>