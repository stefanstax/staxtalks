<?php include(__DIR__ . '../../../../paletteSystem.php'); ?>
<?php get_template_part("templates/sections/nav/navigation_trigger", "part"); ?>
<div class="hidden flex lg:flex fixed top-0 left-0 h-full drop-shadow-xl lg:<?php echo $NavigationWidthLarge; ?> bg-[#131618] text-[#E6EDEE] flex justify-center items-center navigation__menu">
  <div class="primary__nav w-full flex justify-center items-center">
    <?php get_template_part("templates/sections/nav/navigation_primary", "part"); ?>
  </div>
</div>