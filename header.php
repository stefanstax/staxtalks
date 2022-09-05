<?php include(__DIR__ . '/paletteSystem.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0">
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
  <title><?php bloginfo('name'); ?></title>

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

      /* Paddings | Specific */
      /* --padding-18: 1.125em;
    --padding-0y: 0em;
    --padding-5y: 0.3125em; */

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
      --BabyBlue: #ecf3fe;
      --ButtonHover: #3457D5;
      --ButtonActive: #1F75FE;

      /* Transitions */
      --transition_quarter: all 0.25s ease-in-out;

    }
  </style>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-color: <?php echo $BabyBlue; ?>">
  <main class="w-full lg:mb-0 h-full flex flex-wrap">