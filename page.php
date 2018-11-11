<?php get_header(); ?>

  <div class="topadcs">
        <div style="background:#0b28c0 url(<?php echo get_template_directory_uri(); ?>/images/banner01.jpg) no-repeat top center;height:400px"></div>
    </div>
    <!-- .topadcs -->

<div class="nyboom">
    <div class="nyboombox" data-sticky_parent="" style="position: relative;">
        <div style="position: static; width: 220px; height: 578px; display: block; vertical-align: baseline; float: left;">
            <div class="product_2 is_stuck" data-sticky_column="" style="position: absolute; top: 0; width: 220px; bottom: 0px;">
                <h2><b>信息中心</b></h2>
                <?php wp_nav_menu( array(
                      'theme_location'              => 'nav_anli',                                  //[保留]
                      'menu'                                => '',                                  //[可删]
                      'container'                           => '',                           //[可删]
                      'container_class'             => '',                                  //[可删]
                      'container_id'                    => 'nav',                                  //[可删]
                      'menu_class'                  => '',                      //[可删]
                      'menu_id'                         => '',                                  //[可删]
                      'echo'                                => true,                            //[可删]
                      'fallback_cb'                     => 'wp_page_menu',      //[可删]
                      'before'                              => '',                                  //[可删]
                      'after'                                   => '',                                  //[可删]
                      'link_before'                     => '',                                  //[可删]
                      'link_after'                          => '',                                  //[可删]
                      'items_wrap'                      => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',  //[可删]
                      'depth'                               => 0,                               //[可删]
                      'walker'                              => ''                                   //[可删]
                    ) );
                    ?>
                <div class="bg_center"></div>
                <div class="pro_phone">
                    <dl>
                        <dt><img src="<?php echo get_template_directory_uri(); ?>/images/img2/pro_phone.png"></dt>
                        <dd>
                            <p>全国咨询热线</p>
                            <h4><?php echo _ll2('ll_tel1') ?></h4></dd>
                    </dl>
                    <p>打造广告行业最具影响力品牌</p>
                </div>
            </div>
        </div>
        <div class="nyright fr" data-sticky_column="">
            <div class="right_title" style="display: block;">
                <div class="mbx">
                    <ul class="breadcrumbs">
                    <?php ll2_breadcrumbs(); ?>
                    </ul><b>您所在的位置：</b>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="newCont" id="news_detail">
            <!-- 主循环内的模板函数 start -->
              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <?php setPostViews(get_the_ID()); ?>
                <div class="conts">
                    <h1><?php the_title(); ?></h1>
                    <div class="time">来源：<a href="/">若珂时代官网</a>&nbsp;&nbsp;&nbsp;&nbsp;作者：<?php the_author(); ?>&nbsp;&nbsp;&nbsp;&nbsp;时间：<?php the_time('Y-m-d H:i:s'); ?></div>
                    <div class="new_conts">
                        <?php the_content(); ?>
                    </div>
              <?php endwhile; ?>
              <?php endif; ?>
              <!-- 主循环内的模板函数 end -->
                <div class="clear"></div>

        </div>
    </div>
    <div class="clear"></div>
    <div id="up_down">
        <li><?php next_post_link('<%link','上一篇：%title'); ?></li>
        <li><?php previous_post_link('%link>','下一篇：%title'); ?></li>
    </div>
</div>
        <div class="clear"></div>
    </div>
</div>
<!-- .nyboom -->

<?php get_footer(); ?>