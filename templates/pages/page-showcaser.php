<div class="staxio__full pad__20">
  <?php if (is_front_page()) {
    get_template_part("templates/pages/page-home", "part");
  } else {
    get_template_part("page", "part");
  }
  ?>
</div>