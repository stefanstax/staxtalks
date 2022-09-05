<div class="w-full">
  <?php if (empty(get_the_content())) { ?>
  <h2>We're currently working on the content for this page. Please check again in a couple of days.</h2>
  <?php } else {
    the_content(); } ?>
</div>