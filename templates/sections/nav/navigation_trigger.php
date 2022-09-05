<?php include(__DIR__ . '/../../../paletteSystem.php'); ?>

<div class="w-full z-10 fixed bottom-0 left-0 lg:hidden">
  <div class="flex menu__trigger min-h-[60px] p-6 justify-between items-center  bg-[<?php echo $MatteBlack; ?>] py-6 text-white exclude_icon-move">
    <p class="min-w-[60px] flex justify-between items-center text-sm">
      <iconify-icon inline icon="akar-icons:two-line-vertical" width="18" height="18"></iconify-icon> Menu
    </p>
    <?php
    wp_nav_menu(
      $nav = array(
        // 'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
        'menu_class'        => "flex flex-wrap flex-row lg:flex-col justify-between items-center p-2", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
        // 'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
        'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
        'container_class'   => "mobile_app_menu w-52", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
        // 'container_id'      => "", // (string) The ID that is applied to the container.
        // 'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
        // 'before'            => "", // (string) Text before the link markup.
        // 'after'             => "", // (string) Text after the link markup.
        // 'link_before'       => "", // (string) Text before the link text.
        // 'link_after'        => "</span>", // (string) Text after the link text.
        // 'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
        'depth'             => 0, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
        // 'walker'            => "", // (object) Instance of a custom walker class.
        'theme_location'    => "mobile_app_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
        // 'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
        // 'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
      )
    );
    ?>
  </div>
</div>