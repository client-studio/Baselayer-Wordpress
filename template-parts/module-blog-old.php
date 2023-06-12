<div class="module-blog">
   <div class="site-container py-10">

      <div class="max-w-prose mb-4">
         <article>
            <?php the_sub_field('title'); ?>
         </article>
      </div>

      <div class="-mx-2 flex justify-end lg:hidden">
         <h3 class="embla-prev pb-2 px-2 mr-6 cursor-pointer">&larr;</h3>
         <h3 class="embla-next pb-2 px-2 cursor-pointer">&rarr;</h3>
      </div>

      <div class="embla overflow-hidden">
         <div class="flex -mx-4">
            <?php $the_query = new WP_Query( 'post_type=post&post_status=publish&posts_per_page=9' ); if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="basis-full md:basis-1/2 lg:basis-1/3 grow-0 shrink-0 px-4">
               <?php get_template_part( 'loop' ); ?>
            </div>
            <?php endwhile; endif;	wp_reset_postdata();	?>
         </div>
      </div>

   </div>
</div>
