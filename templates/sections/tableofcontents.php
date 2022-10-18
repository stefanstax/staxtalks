<?php include(__DIR__ . '/../../paletteSystem.php'); ?>
<?php include(__DIR__ . '../../../componentPath.php'); ?>

<div class="container flex flex-wrap w-fit justify-start xl:sticky xl:top-20 xl:right-6">
  <div class="collapse__toc lg:hidden" id="collapseToc">
    <span class="flex justify-start items-center mb-2">
      <iconify-icon icon="akar-icons:align-to-middle"></iconify-icon> Toggle Table of Contents
    </span>
  </div>
  <div class="tableOfContents hidden lg:flex flex-col rounded-md bg-[<?php echo $InfoBox; ?>] shadow-2xl shadow-[<?php echo $BabyBlueShadow; ?>] mb-8 p-4 lg:container xl:ml-[0em] xl:max-w-[300px]">
    <p class="uppercase exclusion m-2 text-left flex justify-start items-center">
      <iconify-icon icon="akar-icons:octagon" width="18" height="18"></iconify-icon> Table of Contents
    </p>
    <?php get_template_part($MenuDivider, "part"); ?>
    <ul id="contents">
    </ul>
  </div>
</div>