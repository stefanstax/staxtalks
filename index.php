<?php get_header(); ?>

<?php if (is_page()) {
  get_template_part("page", "part");
} else if (is_single()) {
  get_template_part("single", "part");
} else { ?>
<section class="content">
  <div
    class="content__part staxio__flex staxio__wrap staxio__column staxio__wrap staxio__jcenter staxio__astart mh-100">
    <h1 class="title__404">We're currently working on the content for this page. Please check again in a couple of days.
    </h1>
    <div class="staxio__flex staxio__wrap">
      <a class="button bg__omega" href="https://stefanstax.me/" onclick="window.history.go(-1); return false;"
        class="link__404"><span class="">Go back to
          previous page</span></a>
      <a class="button bg__omega" href="https://stefanstax.me/" onclick="window.history.go(-1); return false;"
        class="link__404"><span class="">Go to Home</span></a>
    </div>
  </div>
</section>
<?php } ?>

<?php get_footer(); ?>