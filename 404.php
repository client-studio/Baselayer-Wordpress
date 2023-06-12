<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width">
      <link rel="profile" href="http://gmpg.org/xfn/11">

      <?php wp_head(); ?>
   </head>

   <body class="bg-dark">
      <div class="text-center min-h-screen w-full md:w-1/2 md:mx-auto flex items-center justify-center text-white">
         <article>
            <h1>404</h1>
            <h4>
               <?php _e( 'Sorry, this page or content is missing.', 'client' ); ?>
            </h4>
            <a href="<?php echo get_bloginfo( 'url' ); ?>" class="btn mx-auto mt-6">
               <?php _e( 'Return home', 'client' ); ?>
            </a>
         </article>
      </div>
   </body>
</html>
