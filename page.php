<?php get_header(); ?>



<!-- 主循环内的模板函数 start -->

  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div>
        <h3><?php the_title('before', 'after'); ?></h3>
        <div><?php the_content(); ?></div>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>

<!-- 主循环内的模板函数 end -->
</body>
</html>