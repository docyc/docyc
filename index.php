<?php get_header(); ?>


    <script>
        $(document).ready(function(){
            myanimate('#fadeInDown1','top');
            myanimate('#fadeInDown2','top');
            myanimate('#fadeInDown3','top');
            myanimate('#fadeInDown4','top');
            myanimate('#fadeInDown5','top');
            myanimate('#fadeInDown6','top');
            myanimate('#fadeInDown7','top');

            myanimate('#fadeInRight1','right');
            myanimate('#fadeInRight2','right');
            myanimate('#fadeInRight3','right');
            myanimate('#fadeInRight4','right');
            myanimate('#fadeInRight5','right');
            myanimate('#fadeInRight6','right');

            myanimate('#fadeInLeft1','left');
            myanimate('#fadeInLeft2','left');
            myanimate('#fadeInLeft3','left');
            myanimate('#fadeInLeft4','left');
            myanimate('#fadeInLeft5','left');
            myanimate('#fadeInLeft6','left');

            myanimate('#fadeInUp1','bottom');
            myanimate('#fadeInUp2','bottom');
            myanimate('#fadeInUp3','bottom');
        });
    </script>
    <div class="banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php if(_ll2('ll_banner1')){ ?>
                    <div class="swiper-slide"><img src="<?php echo _ll2('ll_banner1'); ?>" alt="" /></div>
                <?php }; ?>
                <?php if(_ll2('ll_banner2')){ ?>
                    <div class="swiper-slide"><img src="<?php echo _ll2('ll_banner2'); ?>" alt="" /></div>
                <?php }; ?>
                <?php if(_ll2('ll_banner3')){ ?>
                    <div class="swiper-slide"><img src="<?php echo _ll2('ll_banner3'); ?>" alt="" /></div>
                <?php }; ?>
                <?php if(_ll2('ll_banner4')){ ?>
                    <div class="swiper-slide"><img src="<?php echo _ll2('ll_banner4'); ?>" alt="" /></div>
                <?php }; ?>
                <?php if(_ll2('ll_banner5')){ ?>
                    <div class="swiper-slide"><img src="<?php echo _ll2('ll_banner5'); ?>" alt="" /></div>
                <?php }; ?>
            </div>
            <!-- 如果需要分页器 -->
            <?php if(_ll2('ll_banner_fyq')){ ?>
                <div class="swiper-pagination"></div>
            <?php }; ?>
            <!-- 如果需要导航按钮 -->
            <?php if(_ll2('ll_banner_btn')){ ?>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            <?php }; ?>
            <!-- 如果需要滚动条 -->
            <?php if(_ll2('ll_banner_gdt')){ ?>
                <div class="swiper-scrollbar"></div>
            <?php }; ?>
        </div>
        <script>
        var mySwiper = new Swiper('.swiper-container', {
            autoplay: true, //可选选项，自动滑动
            direction: 'horizontal', // 切换选项
            loop: true, // 循环模式选项

            // 如果需要分页器
            pagination: {
                el: '.swiper-pagination',
            },

            // 如果需要前进后退按钮
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // 如果需要滚动条
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
        </script>
    </div>
    <!-- .banner -->

    <div class="section">
        <div class="container">
            <div class="md-body">
                <div class=" md-top">
                    <div id="fadeInDown1" class="md-title">
                        <b>OUR SERVICE</b>
                        <p>我们的服务</p>
                    </div>
                </div>
                <div id="fadeInUp3" class="md-bottom">
                    <div id="lineMove" class="md-content" onmouseover="stopMove()" onmouseout="startMove()">
                        <ul>
                        <?php if(_ll2('ll_s_icon01')){ ?>
                            <li style="width: 300px;">
                                <div class="inner">
                                    <a class="pics ">
                                        <span class="pic ">
                                            <img alt="<?php echo _ll2('ll_s_icon01_title'); ?>" src="<?php echo _ll2('ll_s_icon01'); ?>">
                                        </span>
                                    </a>
                                    <div class="pic-attr">
                                        <h3 class="pic-title">
                                    <a class=""><?php echo _ll2('ll_s_icon01_title'); ?></a>
                                  </h3>
                                        <div class="pic-intro">
                                            <p><?php echo _ll2('ll_s_icon01_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }; ?>
                        <?php if(_ll2('ll_s_icon02')){ ?>
                            <li style="width: 300px;">
                                <div class="inner">
                                    <a class="pics ">
                                        <span class="pic ">
                                            <img alt="<?php echo _ll2('ll_s_icon02_title'); ?>" src="<?php echo _ll2('ll_s_icon02'); ?>">
                                        </span>
                                    </a>
                                    <div class="pic-attr">
                                        <h3 class="pic-title">
                                    <a class=""><?php echo _ll2('ll_s_icon02_title'); ?></a>
                                  </h3>
                                        <div class="pic-intro">
                                            <p><?php echo _ll2('ll_s_icon02_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }; ?>  
                        <?php if(_ll2('ll_s_icon03')){ ?>
                            <li style="width: 300px;">
                                <div class="inner">
                                    <a class="pics ">
                                        <span class="pic ">
                                            <img alt="<?php echo _ll2('ll_s_icon03_title'); ?>" src="<?php echo _ll2('ll_s_icon03'); ?>">
                                        </span>
                                    </a>
                                    <div class="pic-attr">
                                        <h3 class="pic-title">
                                    <a class=""><?php echo _ll2('ll_s_icon03_title'); ?></a>
                                  </h3>
                                        <div class="pic-intro">
                                            <p><?php echo _ll2('ll_s_icon03_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }; ?>
                        <?php if(_ll2('ll_s_icon04')){ ?>
                            <li style="width: 300px;">
                                <div class="inner">
                                    <a class="pics ">
                                        <span class="pic ">
                                            <img alt="<?php echo _ll2('ll_s_icon04_title'); ?>" src="<?php echo _ll2('ll_s_icon04'); ?>">
                                        </span>
                                    </a>
                                    <div class="pic-attr">
                                        <h3 class="pic-title">
                                    <a class=""><?php echo _ll2('ll_s_icon04_title'); ?></a>
                                  </h3>
                                        <div class="pic-intro">
                                            <p><?php echo _ll2('ll_s_icon04_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }; ?>
                        <?php if(_ll2('ll_s_icon05')){ ?>
                            <li style="width: 300px;">
                                <div class="inner">
                                    <a class="pics ">
                                        <span class="pic ">
                                            <img alt="<?php echo _ll2('ll_s_icon05_title'); ?>" src="<?php echo _ll2('ll_s_icon05'); ?>">
                                        </span>
                                    </a>
                                    <div class="pic-attr">
                                        <h3 class="pic-title">
                                    <a class=""><?php echo _ll2('ll_s_icon05_title'); ?></a>
                                  </h3>
                                        <div class="pic-intro">
                                            <p><?php echo _ll2('ll_s_icon05_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }; ?>
                        <?php if(_ll2('ll_s_icon06')){ ?>
                            <li style="width: 300px;">
                                <div class="inner">
                                    <a class="pics ">
                                        <span class="pic ">
                                            <img alt="<?php echo _ll2('ll_s_icon06_title'); ?>" src="<?php echo _ll2('ll_s_icon06'); ?>">
                                        </span>
                                    </a>
                                    <div class="pic-attr">
                                        <h3 class="pic-title">
                                    <a class=""><?php echo _ll2('ll_s_icon06_title'); ?></a>
                                  </h3>
                                        <div class="pic-intro">
                                            <p><?php echo _ll2('ll_s_icon06_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .section-我们的服务 -->


<script>
    var oDiv = document.querySelector("#lineMove");
        var oUl = document.querySelector("#lineMove ul");
        var n = 0;
        var timer;
        oUl.innerHTML += oUl.innerHTML;

        var arrLi = document.querySelectorAll("#lineMove li");

        var w = parseFloat(getComputedStyle(arrLi[0]).width);

        oUl.style.width = w*arrLi.length + "px";


    startMove();
    var num =w*arrLi.length/2;
    // console.log(num)
    function lineMove(){
        n  -= 1; // 速度步伐

        if(n == -num ){
        oUl.style.left = 0;
        n=0;
        }else{
        oUl.style.left = n+'px';
        }

    }
    function startMove(){
        timer = setInterval(lineMove,10);
    }

    function stopMove(){
        clearInterval(timer);
    }


</script>


<?php 
    $my_query = new WP_Query(array(
        'type' => 'page',
        'page_id'    => _ll2('gywm_page_id')
    ))
?>

<?php if($my_query->have_posts()) : ?>
    <?php while($my_query->have_posts()) : $my_query->the_post() ?>

        <div class="gywm">
            <div class="container">
                <div class="md-body">
                    <div class="md-top">
                        <div id="fadeInDown2" class="md-title">
                            <b>ABOUT US</b>
                            <p>关于我们</p>
                        </div>
                    </div>
                    <div class="md-bottom">
                        <div class="md-content">
                            <div class="container">
                                <div id="fadeInLeft1" class="col-sm-6 pdg10 ">
                                    <span class="gyc-title" ><?php the_title(); ?></span>
                                    <div class="gy-content">
                                    <?php $docyctxt = get_the_content(); ?>
                                    <?php echo ll2_strimwidth( $docyctxt, 360); ?>    
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="gy-btnbottom"></a>
                                </div>
                                <div class="col-sm-6 pdg10  fadeInRight1">
                                    <div class="gy-img" style="background-image:url(<?php if ( has_post_thumbnail() ) {	the_post_thumbnail_url();}  ?>)"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .gywm-关于我们 -->
    <?php endwhile; ?>
<?php endif; ?>

    <div class="cc-ad hidden-xs">
        <ul class="container">
            <li class="col-sm-3">
                <div class="cc-ads">
                    <h3 class="cc-title">
                            <a href="#">全方位品牌服务</a>
                        </h3>
                    <div class="cc-intro">
                        <p>研究、策略、设计、联结、评估</p>
                    </div>
                </div>
            </li>
            <li class="col-sm-3">
                <div class="cc-ads">
                    <h3 class="cc-title">
                            <a href="#">全方位品牌服务</a>
                        </h3>
                    <div class="cc-intro">
                        <p>品牌咨询、品牌设计、品牌执行品</p>
                    </div>
                </div>
            </li>
            <li class="col-sm-3">
                <div class="cc-ads">
                    <h3 class="cc-title">
                            <a href="#">全方位品牌服务</a>
                        </h3>
                    <div class="cc-intro">
                        <p>品牌咨询、品牌设计、品牌执行品</p>
                    </div>
                </div>
            </li>
            <li class="col-sm-3">
                <div class="cc-ads">
                    <h3 class="cc-title">
                            <a href="#">全方位品牌服务</a>
                        </h3>
                    <div class="cc-intro">
                        <p>品牌策略、概念发展、验证、执行、评估</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- .cc-ad -->


    <div class="s-anli">
        <div class="container">
            <div class="md-body">
                <div class="md-top">
                    <div id="fadeInDown3" class="md-title">
                        <b>Project service case</b>
                        <p>项目服务案例</p>
                    </div>
                </div>
                <div class="md-bottom">
                    <div class="md-content">
                        <ul class="container">
                            <li class="row1">
                                <div class="container">
                                    <div class="col-sm-3 row1-l col-xs-12">
                                        <div class="anli-left">
                                            <h3>广告形象打造</h3>
                                            <p>企业品牌VIS 形象整体设计，店面形象打造，广告应用设计打造</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 hidden-xs">
                                        <div id="fadeInRight2" class="anli-right ">
                                            <div class="container-fluid">

<?php 
    $my_query = new WP_Query(array(
        'cat'    => _ll2('fwal_1'),
        'order'  => 'ASC',
        'posts_per_page' => 3
    ))
?>
<?php 
    // var_dump($my_query->posts);
?>
<?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post() ?>
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                    <?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); }else{  ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row_01.jpg" alt="" />
                                                    <?php }  ?>
                                                        <div class="anli-list-hover">
                                                            <p><a href="#"><?php the_title(); ?></a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
<?php endwhile; ?>
<?php endif; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row2">
                                <div class="container">
                                    <div class="col-sm-12 anli-list hidden-xs">
                                        <div id="fadeInLeft2" class="container-fluid ">


<?php 
    $my_query = new WP_Query(array(
        'cat'    => _ll2('fwal_1'),
        'order'  => 'ASC',
        'posts_per_page' => 4,
        'offset'  => 3
    ))
?>
<?php 
    // var_dump($my_query->posts);
?>
<?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post() ?>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                <?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); }else{  ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row_04.jpg" alt="" />
                                                <?php }  ?>
                                                    <div class="anli-list-hover">
                                                        <p><a href="#"><?php the_title(); ?></a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
<?php endwhile; ?>
<?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row3 hidden-xs">
                                <div class="hr">
                                    <hr />
                                </div>
                            </li>
                            <li class="row4">
                                <div class="container">
                                    <div class="col-sm-3 row1-l col-xs-12">
                                        <div id="fadeInDown4" class="anli-left">
                                            <h3>导视标牌系列</h3>
                                            <p>道路交通标识标牌、精神堡垒科室牌、楼层号牌、宣传栏等</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 hidden-xs">
                                        <div id="fadeInRight3" class="anli-right ">
                                            <div class="container-fluid">
<?php 
    $my_query = new WP_Query(array(
        'cat'    => _ll2('fwal_2'),
        'order'  => 'ASC',
        'posts_per_page' => 3
    ))
?>
<?php 
    // var_dump($my_query->posts);
?>
<?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post() ?>
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                <?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); }else{  ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row2_01.jpg" alt="" />
                                                <?php }  ?>
                                                        <div class="anli-list-hover">
                                                            <p><a href="#"><?php the_title(); ?></a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
<?php endwhile; ?>
<?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row5">
                                <div class="container">
                                    <div class="col-sm-12 anli-list hidden-xs">
                                        <div id="fadeInLeft3" class="container-fluid ">
<?php 
    $my_query = new WP_Query(array(
        'cat'    => _ll2('fwal_2'),
        'order'  => 'ASC',
        'posts_per_page' => 4,
        'offset'  => 3
    ))
?>
<?php 
    // var_dump($my_query->posts);
?>
<?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post() ?>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                <?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); }else{  ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row2_04.jpg" alt="" />
                                                <?php }  ?>
                                                    <div class="anli-list-hover">
                                                        <p><a href="#"><?php the_title(); ?></a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
<?php endwhile; ?>
<?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row6 hidden-xs">
                                <div class="hr">
                                    <hr />
                                </div>
                            </li>
                            <li class="row7">
                                <div class="container">
                                    <div class="col-sm-3 row1-l col-xs-12">
                                        <div id="fadeInDown5" class="anli-left">
                                            <h3>庆典活动会议服务</h3>
                                            <p>开业庆典、周年庆典、各类活动会议服务、舞台表演、礼仪服务桁架搭建、篷房搭建等</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 hidden-xs">
                                        <div id="fadeInRight4" class="anli-right ">
                                            <div class="container-fluid">
<?php 
    $my_query = new WP_Query(array(
        'cat'    => _ll2('fwal_3'),
        'order'  => 'ASC',
        'posts_per_page' => 3
    ))
?>
<?php 
    // var_dump($my_query->posts);
?>
<?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post() ?>
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                <?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); }else{  ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row3_01.jpg" alt="" />
                                                <?php }  ?>
                                                        <div class="anli-list-hover">
                                                            <p><a href="#"><?php the_title(); ?></a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
<?php endwhile; ?>
<?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row8">
                                <div class="container">
                                    <div class="col-sm-12 anli-list hidden-xs">
                                        <div id="fadeInLeft4" class="container-fluid ">
<?php 
    $my_query = new WP_Query(array(
        'cat'    => _ll2('fwal_3'),
        'order'  => 'ASC',
        'posts_per_page' => 4,
        'offset'  => 3
    ))
?>
<?php 
    // var_dump($my_query->posts);
?>
<?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post() ?>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                <?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); }else{  ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row3_04.jpg" alt="" />
                                                <?php }  ?>
                                                    <div class="anli-list-hover">
                                                        <p><a href="#"><?php the_title(); ?></a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
<?php endwhile; ?>
<?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row9 hidden-xs">
                                <div class="hr">
                                    <hr />
                                </div>
                            </li>
                            <li class="row10">
                                <div class="container">
                                    <div class="col-sm-3 row1-l col-xs-12">
                                        <div id="fadeInDown6" class="anli-left">
                                            <h3>手绘墙画软装</h3>
                                            <p>工艺美术品制作、墙面创意手绘、3D原创打造、平面与实景结合，凸显创造、适合：幼儿园、酒吧、主题餐厅等追求新元素创造单位</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 hidden-xs">
                                        <div id="fadeInRight5" class="anli-right ">
                                            <div class="container-fluid">
<?php 
    $my_query = new WP_Query(array(
        'cat'    => _ll2('fwal_4'),
        'order'  => 'ASC',
        'posts_per_page' => 3
    ))
?>
<?php 
    // var_dump($my_query->posts);
?>
<?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post() ?>
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                <?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); }else{  ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row4_01.jpg" alt="" />
                                                <?php }  ?>
                                                        <div class="anli-list-hover">
                                                            <p><a href="#"><?php the_title(); ?></a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
<?php endwhile; ?>
<?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row11">
                                <div class="container">
                                    <div class="col-sm-12 anli-list hidden-xs">
                                        <div id="fadeInLeft5" class="container-fluid ">
<?php 
    $my_query = new WP_Query(array(
        'cat'    => _ll2('fwal_4'),
        'order'  => 'ASC',
        'posts_per_page' => 4,
        'offset'  => 3
    ))
?>
<?php 
    // var_dump($my_query->posts);
?>
<?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post() ?>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                <?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); }else{  ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row4_04.jpg" alt="" />
                                                <?php }  ?>
                                                    <div class="anli-list-hover">
                                                        <p><a href="#"><?php the_title(); ?></a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
<?php endwhile; ?>
<?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .s-anli -->
    <div class="ad-team">
        <div class="container">
            <div class="md-body">
                <div class="md-top">
                    <div id="fadeInDown7" class="md-title">
                        <b>Advertising team</b>
                        <p>广告团队</p>
                    </div>
                    <div id="fadeInUp1" class="description">
                        <p>专业的人做专业的事，十年广告经验团队，把最优质的广告服务于您，为您的品牌创造最大的价值。高品质、高服务、高效率。</p>
                        <p>若珂时代全体成员期待您的光临</p>
                    </div>
                </div>
                <div class="md-bottom">
                    <div class="md-content">
                        <ul id="fadeInUp2" class="td-list">
<?php 
    $my_query = new WP_Query(array(
        'cat'    => _ll2('ll_ggtd'),
        'order'  => 'ASC'
        // 'posts_per_page' => 4,
        // 'offset'  => 3
    ))
?>
<?php 
    // var_dump($my_query->posts);
?>
<?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post() ?>
                            <li>
                                <div class="td-list01" style="background-image:url(<?php if ( has_post_thumbnail() ) {	the_post_thumbnail_url();}  ?>);">
                                    <div class="td-item">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p><?php echo get_post_custom_values( 'zhiwu' )[0]; ?></p>
                                    </div>
                                </div>
                            </li>
<?php endwhile; ?>
<?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .ad-team -->

    <div class="contact">
        <div class="container">
            <div class="md-body">
                <div class="md-top">
                    <div id="fadeInDown8" class="md-title">
                        <p><span>CONTACT US&nbsp;&nbsp;&nbsp;</span>
                        联系我们</p>
                    </div>

                </div>
                <div class="md-bottom">
                    <div class="md-content">
                        <div class="container">
                            <div id="fadeInLeft6" class="col-sm-8">
                                <div id="baiduMapC" class="allmap"></div>
                            </div>
                            <div id="fadeInRight6" class="col-sm-4">
                                <div class="c-ewm">
                                <img src="<?php echo _ll2('ll_ewm'); ?>" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .contact -->

<script>
    var map = new BMap.Map("baiduMapC");
    var point = new BMap.Point(<?php echo _ll2('ll_baidu_jwd'); ?>);
    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);              // 将标注添加到地图中
    map.centerAndZoom(point, 19);
    map.enableScrollWheelZoom(true);
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_ZOOM});
    map.addControl(ctrl_nav);
</script>


<?php get_footer(); ?>