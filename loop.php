<div class="blog-item relative w-full">

   <a href="<?php the_permalink(); ?>">
      <div class="h-60">
         <img src="<?php the_post_thumbnail_url('thumbnail') ?>" 
         class="w-full h-full object-cover rounded" alt="<?php the_title() ?>">
      </div>

      <div class="pt-3">
         <article class="lead">
            <time datetime="<?php the_date('d.m.Y'); ?>" class="text-sm">
               <?php echo get_the_date('d.m.Y'); ?>
            </time>

            <h3><?php the_title(); ?></h3>
         </article>
      </div>

   </a>

</div>
