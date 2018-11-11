<?php get_header(); ?>


    <div class="topadcs">
        <div style="background:#0b28c0 url(<?php echo get_template_directory_uri(); ?>/images/banner01.jpg) no-repeat top center;height:400px"></div>
    </div>
    <!-- .topadcs -->
<!--   ******************************************************************   -->

<?php 
// wp_list_categories( array( 
// 	'show_option_all'    => '',	
// 	'orderby'            => 'name',		
// 	'order'              => 'ASC',
// 	'style'              => 'none', /* 是否用li元素包裹 none list*/
// 	'hide_empty'         => 0, /* 是否隐藏没有任何文章的分类项目 */
// 	'use_desc_for_title' => 1,
//     'child_of'           => 0, /* 仅显示某个分类项目所包含的子分类项目 父分类项目的ID编号 或者 0【显示所有分类项目】 */
// 	'feed'               => '',
// 	'feed_type'          => '',
// 	'feed_image'         => '',
// 	'exclude'            => '1',  /* 在include值为空生效 在显示分类项目时排除某些分类项目（填写分类项目的ID）。排除多个分类项目时，要在两个分类项目的ID之间加上逗号（英文输入环境）。*/
// 	'exclude_tree'       => '',  /* 成员参数include的值必须为空 排除某个分类项目以及其下的子分类项目 */
// 	'include'            => '', /* 仅显示该参数指定的分类项目，多个分类项目的编号之间要用逗号隔开(英文输入环境) */
// 	'hierarchical'       => 1,   /* 是否分层级显示分类项目  1 以层级的方式显示  0 不以层级的方式显示 */
// 	'title_li'           => __( 'Categories' ),  /* 此信息模块的标题 */
// 	'show_option_none'   => __( 'No categories' ),  /* 当没有任何分类项目时所要显示的内容 */
// 	'number'             => null, /* 要显示多少条分类项目？ null（即，无限制） */
// 	'echo'               => 1,  /* 是否直接将获取到的分类项目显示出来  1 直接显示 0	不显示，将结果返回 */
// 	'depth'              => 0,  /* 当按照层级显示分类项目时，要显示到哪个层级   0 显示所有层级  -1 显示所有层级，但都以平级显示  1 仅显示顶级的分类项目，不显示子孙分类项目。  n 显示到n级，n代表大于1的数字。  */

// 	/*
// 		@成员参数：current_category
// 		@参数作用：决定是自动给分类项目的包围元素(li元素)添加一个class属性值(current-cat)，还是指定添加。
// 		@可选的值：
// 		0					访问哪个分类归档页，就在对应的分类项目的包围元素(li元素)添加一个class属性值current-cat【默认】
// 		n					n代指的是一个数字，这个数字是分类项目的编号。例如n取值为1，代表的是在编号为1的分类项目的li元素中添加一个class属性值current-cat
// 	*/
// 	'current_category'   => 0,
// 	'pad_counts'         => 0,

// 	/*
// 		@成员参数：taxonomy
// 		@参数作用：该参数的作用是设定显示哪个分类方式下的分类项目
// 		@可选的值：
// 		category		分类目录		【默认】
// 		post_tag		标签
// 		XXX				自定义的分类方式的名称
// 	*/
// 	'taxonomy'           => 'category',
// 	'walker'             => null
// ) );

?>



<!--   ******************************************************************   -->
<div class="nyboom">
    <div class="nyboombox" data-sticky_parent="" style="position: relative;">
        <div class="product_2" data-sticky_column="" style="">
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
        
        <div class="nyright fr" data-sticky_column="">
            <div class="right_title"> <span class="right_name">案例中心<font>CASE Center</font></span>
                <div class="mbx">
                    <ul class="breadcrumbs">
                        <!-- <li><a href="http://nst.wpke.net">首页</a></li>
                        <li> <span>&gt;</span> <a href="http://nst.wpke.net/products">案例中心</a> <span>&gt;</span> </li> -->
                        <?php ll2_breadcrumbs(); ?>
                    </ul><b>您所在的位置：</b>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="cplbboxs">
                <ul class="ncase">

                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <li>
                        <div class="ncase-1"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><img src="<?php if ( has_post_thumbnail() ) {	the_post_thumbnail_url();}  ?>" alt="<?php the_title(); ?>" class="thumbnail"></a></div>
                        <div class="ncase-2">
                            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a></h2></div>
                        <div class="ncase-3">TAG：<?php the_tags(); ?></div>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
                </ul>
            </div>
            <div class="clearfix"></div>
                <?php ll2_pagenavi(); ?>
        </div>
        <div class="clearfix"></div>
    </div>
</div><!-- .nyboom -->

<?php get_footer(); ?>