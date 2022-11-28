<!-- DRY -->
<?php
$headingClasses = "max-w-2xl text-center mx-auto mb-12 text-3xl xl:text-5xl";
$contactUrl = "/contact/";
?>
<?php include(__DIR__ . '/../../../paletteSystem.php'); ?>


<!-- Display a banner if it's a page or category template -->
<section class="w-full px-8 py-8 mx-auto bg-[<?php echo $MatteBlack; ?>] text-[<?php echo $OffWhite; ?>] drop-shadow-2xl">
  <!-- Specific Heading styles for home page  -->
  <div class="flex flex-col mx-auto w-full justify-between items-center max-w-[1024px]">

    <?php if (is_front_page()) { ?>
      <h1 class="<?php echo $headingClasses; ?>">My story is <span class="border-solid border-b-2 pb-1 border-stone-400">!completely</span> true except the
        parts that
        were
        totally <span class="border-solid border-b-2 pb-1 border-stone-400">made</span> <span class="border-solid border-b-2 pb-1 border-stone-400">up</span>.</h1>
    <?php } else if (is_tag()) { ?> <h1 class="<?php echo $headingClasses; ?>">Tags</h1>
    <?php } else if (is_category()) { ?> <h1 class="<?php echo $headingClasses; ?>">Categories</h1>
    <?php } else { ?>
      <h1 class="<?php echo $headingClasses; ?>"><?php the_title(); ?></h1>
    <?php } ?>
    <!-- Show CTA buttons if it's not one of the pages mentioned below -->
    <div class="w-full mx-auto flex gap-[20px] max-w-[600px] md:w-6/12 flex-wrap justify-center items-center h-full">
      <a href="https://instagram.com/staxtalks/" target="_blank" class="w-5/12 bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] border-[1px] border-[<?php echo $Silver; ?>] <?php echo $roundedFull; ?> drops-shadow-md p-2 px-4 forbidden <?php echo $roundedFull; ?>">
        <span class="flex justify-center items-center">
          <iconify-icon inline icon="akar-icons:instagram-fill" width="18" height="18" class="mr-2"></iconify-icon>
          <span>
            Send me DM
          </span>
        </span>
      </a>
      <a href="<?php echo site_url($contactUrl); ?>" class="w-5/12 bg-[<?php echo $MatteBlack; ?>] hover:bg-[<?php echo $ButtonHover; ?>] active:bg-[<?php echo $ButtonActive; ?>] border-[1px] border-[<?php echo $Silver; ?>] <?php echo $roundedFull; ?> drops-shadow-md p-2 px-4 forbidden <?php echo $roundedFull; ?>">
        <span class="flex justify-center items-center">
          <iconify-icon inline icon="akar-icons:inbox" width="18" height="18" class="mr-2"></iconify-icon>
          <span>
            Send an inquiry
          </span>
        </span>
      </a>
    </div>
  </div>
</section>