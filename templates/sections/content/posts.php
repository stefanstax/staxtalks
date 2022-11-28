<?php include(__DIR__ . '/../../../paletteSystem.php'); ?>

<article class="container">
  <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
  <?php the_content(); ?>
</article>