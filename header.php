<?php include(__DIR__ . '/paletteSystem.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0">
  <meta name="resource-type" content="document" />
  <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
  <meta http-equiv="content-language" content="en-us" />
  <meta name="author" content="Stefan Stax" />
  <meta name="contact" content="contact@staxtalks.com" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="mental health, programming, coding, programming blog, blog, anxiety, stress, coping, stress management, freelance, websites, pro-bono" />
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700;900&display=swap" rel="stylesheet">
  <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/046ebdc93337f4b40b9526fe/script.js"></script>
  <!-- End cookieyes banner -->

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Icons -->
  <script defer src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>

  <style>
    /* Variables codes */
    :root {
      /* Paddings | Global */
      --p2: 0.5em;
      --p3: 0.75em;
      --p4: 1em;

      /* Border Radius */
      --rounded-md: 0.375em;
      --rounded-lg: 0.5em;

      /* Box Shadows */
      --drop-shadow-sm: drop-shadow(0 1px 1px rgb(0 0 0 / 0.05));
      --drop-shadow: drop-shadow(0 1px 2px rgb(0 0 0 / 0.1)) drop-shadow(0 1px 1px rgb(0 0 0 / 0.06));
      --drop-shadow-md: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));
      --drop-shadow-lg: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
      --drop-shadow-2xl: drop-shadow(0 25px 25px rgb(0 0 0 / 0.15));

      /* Colors */
      --MatteBlack: #131616;
      --LightSilver: #edf2f7;
      --Silver: #E6EDEE;
      --DarkSilver: #7D8688;
      --OffWhite: #f9f9f9;
      --BabyPink: #FDB9C8;
      --SnowWhite: #ffffff;
      --BabyBlue: #c6d9f7;
      --WashedBlue: #F0F0F0;

      /* Buttons Colors */
      --ButtonHover: #3457D5;
      --ButtonActive: #1F75FE;

      /* Rounded */
      --rounded-md: 0.375em;

      /* Info Colors */
      --InfoBox: "#C5EFFD";

      /* PSEUDO Colors */
      --InputPlaceholder: #4041428c;

      /* Transitions */
      --transition_quarter: all 0.25s ease-in-out;

    }
  </style>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-color: <?php echo $BodyBlue; ?>">
  <main class="w-full lg:mb-0 h-full flex flex-wrap">