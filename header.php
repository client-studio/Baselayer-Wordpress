<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

      <!-- Fonts -->
      <link href="<?php bloginfo( "template_directory",); ?>/webfonts/font.css" rel="stylesheet">

      <?php wp_head(); ?>
   </head>


   <body <?php body_class( 'antialiased bg-body' ); ?>>
      <div id="page" class="min-h-screen">

         <header class="bg-black/80 backdrop-blur-lg text-white w-full fixed top-0 z-50">

            <?php if( have_rows('infobar', 'option') ): while ( have_rows('infobar', 'option') ) : the_row(); ?><?php if ( get_sub_field('show_infobar') ): ?>

            <div class="infobar overflow-hidden bg-zinc-900">
               <div class="site-container flex py-1 text-sm">
                  
                  <div class="grow">
                  <p><?php the_sub_field('text') ?></p>
                  </div>

                  <?php $link = get_sub_field('link'); if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  ?>
                  <div class="ml-auto">
                  <a class="" href="<?php echo esc_url($link_url); ?>" target="_blank"><?php echo esc_html($link_title); ?></a>
                  </div>
                  <?php endif; ?>

               </div>
            </div>
            <?php endif; endwhile; endif; ?>

            <nav class="site-container">
               <div class="grid grid-cols-2 items-center w-full py-2 lg:py-4">
                  <a class="logo" href="/">
                     <span class="sr-only"><?php echo get_bloginfo( 'name' );?></span>
                        <img class="h-5 w-auto" 
                        src="<?php bloginfo("template_directory"); ?>/img/logo.svg"
                        alt="<?php echo get_bloginfo( 'name' );?>" >
                  </a>

                  <div class="hidden md:block ml-auto">
                     <?php wp_nav_menu( array(
                        'container_id'    => 'primary-menu',
                        'container'			=> 'none',
                        'menu_class'      => 'flex',
                        'theme_location'  => 'primary',
                        'li_class'        => 'text-lg mx-4 last:mr-0',
                        'fallback_cb'     => false,
                     )); ?>
                  </div>

                  <div class="block md:hidden ml-auto">
                     <button type="button" class="w-9 h-9 align-middle relative menu-btn" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Toggle menu</span>
                        <svg class="anim" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                        <svg class="anim opacity-0 absolute top-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" aria-hidden="true"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                     </button>
                  </div>
               </div>
            </nav>

            <!-- Mobile menu -->
            <div class="invisible h-0 overflow-hidden md:hidden" id="mobile-menu">
               <div class="site-container py-4">
                  <?php wp_nav_menu( array(
                     'container_id'    => 'primary-menu',
                     'container'			=> 'none',
                     'menu_class'      => '',
                     'theme_location'  => 'primary',
                     'li_class'        => 'text-xl py-6',
                     'fallback_cb'     => false,
                  )); ?>
               </div>
            </div>
         </header>

         <div class="header-offset h-20 bg-black"></div>

         <div id="content" class="site-content">
            <main>
