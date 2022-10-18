<?php include(__DIR__ . '../../../../componentPath.php'); ?>
<?php include(__DIR__ . '../../../../paletteSystem.php'); ?>

<header class="w-full max-w-[400px] justify-start flex-col items-center lg:items-stretch">
  <img class="max-w-[50px] mx-auto border-solid border-b-2 border-[#E6EDEE] pb-2 mb-6" src="https://cdn.staxtalks.com/files/assets/2022/08/03182513/staxtalks-logo.png" alt="Stefan Stax Business Logo - Black colored outline logo - Illustrated logo representing an S">
  <!-- Came to conclussion that menu shouldn't have an option to be disabled on large screen-->
  <div class="closeMenuTrigger mb-6 flex justify-center lg:hidden">
    <iconify-icon inline icon="akar-icons:cross" width="1em" height="1em" style="margin: 0px"></iconify-icon>
  </div>

  <div class="overflow-y-auto h-[60vh]">
    <div class="primary__links-menu">
      <p class="w-full py-2 px-4 exclusion text-center">Pages</p>

      <?php
      wp_nav_menu(
        $nav = array(
          // 'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
          'menu_class'        => "flex flex-wrap flex-row lg:flex-col justify-center items-center lg:items-stretch p-2", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
          // 'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
          'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
          'container_class'   => "header__nav", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
          // 'container_id'      => "", // (string) The ID that is applied to the container.
          // 'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
          // 'before'            => "", // (string) Text before the link markup.
          // 'after'             => "", // (string) Text after the link markup.
          // 'link_before'       => "", // (string) Text before the link text.
          // 'link_after'        => "</span>", // (string) Text after the link text.
          // 'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
          'depth'             => 0, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
          // 'walker'            => "", // (object) Instance of a custom walker class.
          'theme_location'    => "header_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
          // 'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
          // 'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
        )
      );
      ?>
    </div>
    <div class="blog__posts-menu">
      <?php get_template_part($MenuDivider, "part"); ?>
      <p class="w-full py-2 px-4 exclusion text-center">Blog Posts</p>
      <?php
      wp_nav_menu(
        $nav = array(
          // 'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
          'menu_class'        => "flex flex-wrap flex-row lg:flex-col justify-center items-center lg:items-stretch p-2", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
          // 'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
          'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
          'container_class'   => "header__nav", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
          // 'container_id'      => "", // (string) The ID that is applied to the container.
          // 'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
          // 'before'            => "", // (string) Text before the link markup.
          // 'after'             => "", // (string) Text after the link markup.
          // 'link_before'       => "", // (string) Text before the link text.
          // 'link_after'        => "</span>", // (string) Text after the link text.
          // 'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
          'depth'             => 0, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
          // 'walker'            => "", // (object) Instance of a custom walker class.
          'theme_location'    => "blogs_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
          // 'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
          // 'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
        )
      );
      ?>
    </div>
    <!-- <?php get_template_part($MenuDivider, "part"); ?> -->
    <!-- <div class="history-menu py-2 px-4">
      <p class="exclusion pb-4">Previously visited pages: </p>
      <ul id="historyPages" class="flex flex-wrap gap-[5px]">

      </ul>
    </div> -->
  </div>
</header>