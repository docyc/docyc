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
                    <div class="wzzzxx">
                        <h4>页面版权备注</h4>
                        <div class="f4n3h5q">本文版权归 <b><?php bloginfo('name'); ?></b> 所有；本文共被查阅 <?php echo getPostViews(get_the_ID()); ?> 次。</div>
                        <div class="f4n3h5q">当前页面链接：<?php the_permalink(); ?></div>
                        <div class="f4n3h5q"><b>未经授权，禁止任何站点镜像、采集、或复制本站内容，违者通过法律途径维权到底！</b></div>
                        <div class="dbfxlll">
                            <div class="fxxxxx">
                                <div class="col-xs-12 hidden-xs shareBox">
                                    <div class="bdsharebuttonbox bdshare-button-style0-32" data-tag="share_1" data-bd-bind="1541215815207">
                                        <a class="bds_more" data-cmd="more" href="#"></a> <a class="bds_sqq" title="分享到QQ好友" data-cmd="sqq" href="#"></a>
                                        <a class="bds_weixin" title="分享到微信" data-cmd="weixin" href="#"></a>
                                        <a class="bds_tsina" title="分享到新浪微博" data-cmd="tsina" href="#"></a>
                                        <a class="bds_qzone" title="分享到QQ空间" data-cmd="qzone" href="#"></a>
                                        <a class="bds_tqq" title="分享到腾讯微博" data-cmd="tqq" href="#"></a>
                                        <a class="bds_renren" title="分享到人人网" data-cmd="renren" href="#"></a>
                                        <a class="bds_tieba" title="分享到百度贴吧" data-cmd="tieba" href="#"></a>
                                        <a class="bds_tsohu" title="分享到搜狐微博" data-cmd="tsohu" href="#"></a>
                                        <a class="bds_douban" title="分享到豆瓣网" data-cmd="douban" href="#"></a>
                                        <a class="bds_ty" title="分享到天涯社区" data-cmd="ty" href="#"></a> </div>
                                </div>
                                <script type="text/javascript">
                                $(document).ready(function() { window._bd_share_config = { common: { bdText: document.title, bdDesc: document.description, bdUrl: '', bdPic: 'http://nst.wpke.net/wp-content/themes/nst/images/fenxiang.gif', }, share: [, { tag: '', bdSize: '32', bdCustomStyle: 'http://nst.wpke.net/wp-content/themes/nst/ly-share.css' }], };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=' + ~(-new Date() / 36e5)]; });
                        </script>
                    </div>
                </div>
              <?php endwhile; ?>
              <?php endif; ?>
              <!-- 主循环内的模板函数 end -->
                <div class="clear"></div>
            </div>
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