<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="成都若珂时代广告, 若珂时代广告, 都江堰若珂时代广告, 都江堰广告" />
    <meta name="description" content="秉承“问道·不凡”的企业理念，恪守品质广告的企业精神，注重企业形象建设与品牌提升。" />
    <meta content="telephone=no" name="format-detection" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="full-screen" content="yes">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/img/favicon.ico">
    <title><?php wp_title('-',true,'right'); ?></title>
    <!-- bootstrap v3.3.7 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap-3.3.7/css/bootstrap.css" />
    <!-- animate.css 动画 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/animate.css/animate.css" />
    <!-- swiper -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/swiper-4.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery1.12.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/swiper-4.4.1/js/swiper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/waypoints/jquery.waypoints.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/move.js"></script>
    <!-- <script type="text/javascript" src="https://api.map.baidu.com/api?v=1.4"></script> -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/js/baiduMap.js"></script> -->
    <!-- <script type="text/javascript" src="//api.map.baidu.com/api?v=2.0&ak=kpIZZ664I8VuhRdey1zStcG4uHuu27aQ"></script> -->

    <?php wp_head();?>
</head>

<body>

<script>
    $(document).ready(function(){
        function myanimate(el,drc="top"){

            switch(drc){
                case 'top':
                    // 上进入
                    $(el).waypoint(function(direction) {
                      $(el).addClass('animated fadeInDown')
                      setTimeout(()=>{
                        $(el).removeClass('animated fadeInDown')
                      }, 2000)
                    }, {
                      offset: '100%'
                    });
                    break;
                case 'right':
                    // 右进入
                    $(el).waypoint(function(direction) {
                      $(el).addClass('animated fadeInRight')
                      setTimeout(()=>{
                        $(el).removeClass('animated fadeInRight')
                      }, 2000)
                    }, {
                      offset: '100%'
                    });
                    break;
                case 'bottom':
                    // 下进入
                    $(el).waypoint(function(direction) {
                      $(el).addClass('animated fadeInUp')
                      setTimeout(()=>{
                        $(el).removeClass('animated fadeInUp')
                      }, 2000)
                    }, {
                      offset: '100%'
                    });
                    break;
                case 'left':
                    // 左进入
                    $(el).waypoint(function(direction) {
                      $(el).addClass('animated fadeInLeft')
                      setTimeout(()=>{
                        $(el).removeClass('animated fadeInLeft')
                      }, 2000)
                    }, {
                      offset: '100%'
                    });
                    break;
            }
        }



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




    <div class="topbar hidden-xs">
        <div class="container">
            <div class="fl"><a href="<?php bloginfo('url'); ?>/wp-login.php">登陆</a><em> | </em><a href="javescript:;" >免费注册</a></div>
            <div class="fr">
                <a href="#">设为首页</a>
                <em> | </em>
                <a href="#">加入收藏</a>
                <em> | </em>
                <a href="#">在线留言</a>
                <em> | </em>
                <a href="#">企业位置</a>
            </div>
        </div>
    </div>
    <!-- .topbar -->
    <div class="nav">
        <div class="container">
            <div class="logo col-sm-4 col-xs-12">
                <a href="<?php bloginfo('url'); ?>">
        <?php if ( _ll2('docyc_logo') ) { ?>
            <img src="<?php echo _ll2('docyc_logo'); ?>
        <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg
        <?php } ?>
                " alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a>
            </div>
            <div class="col-sm-8 hidden-xs">
                <div class="fr navright">
                    <?php wp_nav_menu( array(
                      'theme_location'              => 'zhudaohang',                                  //[保留]
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
                </div>
            </div>
        </div>
    </div>
    <!-- .nav -->
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
                                <span class="gyc-title" >成都若珂时代广告有限责任公司</span>
                                <div class="gy-content">
                                    <p>&nbsp; &nbsp; &nbsp; 成都若珂时代广告有限责任公司是2018年成立于中国成都都江堰的一家高端品质广告机构。秉承“问道·不凡”的企业理念，恪守品质广告的企业精神，注重企业形象建设与品牌提升。始终将高效率、高品质、高服务的企业标准服务于每一位客户。</p>
                                    <p>&nbsp; &nbsp; &nbsp; “十年广告团队、品质助您前行”，拥有雄厚的广告设计能力，优良的广告服务体系，独特优秀的广告创意方案，精深的业务领域，细心的售后服务，一站式的广告品牌服务。帮助提升您的企业形象，让您的产品具有强大的认知度。用更高的品质助您的企业一路前行。</p>
                                    <p>&nbsp; &nbsp; &nbsp; <b>我们的业务涵盖：[VIS]企业整体形象打造、标识标牌系统设计制作、画册印刷品设计制作、高端产品设计定制、品牌区域广告执行制作和发布，大型活动组织、会议庆典策划执行、舞台搭建节目演绎、产品摄影、写真输出等综合广告一站式品牌服务。</b></p>
                                </div>
                                <a class="gy-btnbottom"></a>
                            </div>
                            <div class="col-sm-6 pdg10  fadeInRight1">
                                <div class="gy-img"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .gywm-关于我们 -->
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
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row_01.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">LOG标识设计</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row_02.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">招牌制作</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 after">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row_03.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">室内形象打造</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row2">
                                <div class="container">
                                    <div class="col-sm-12 anli-list hidden-xs">
                                        <div id="fadeInLeft2" class="container-fluid ">
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row_04.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">文化展示打造</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row_05.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">画册印刷品</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row_06.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">精品字展示</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 after">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row_07.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">展架展板公示栏</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row2_01.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">道路交通指示牌</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row2_02.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">精神堡垒</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 after">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row2_03.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">酒店学校标牌</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row5">
                                <div class="container">
                                    <div class="col-sm-12 anli-list hidden-xs">
                                        <div id="fadeInLeft3" class="container-fluid ">
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row2_04.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">创意标识牌</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row2_05.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">仿古公示栏</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row2_06.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">党建现代公示栏</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 after">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row2_07.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">楼宇大型标牌</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row3_01.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">四川冰源食品开业庆典</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row3_02.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">新华文轩会议服务</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 after">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row3_03.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">工商职业技术学院艺术周开幕式</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row8">
                                <div class="container">
                                    <div class="col-sm-12 anli-list hidden-xs">
                                        <div id="fadeInLeft4" class="container-fluid ">
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row3_04.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">中国人寿会议服务</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row3_05.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">喜爱直播马拉松背景搭建</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row3_06.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">营销大会 舞台搭建</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 after">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row3_07.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">虹口漂流搭建及演绎</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row4_01.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">墙画+立体海盗船创造</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row4_02.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">个性版画订制</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 after">
                                                    <div class="anli-list-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row4_03.jpg" alt="" />
                                                        <div class="anli-list-hover">
                                                            <p><a href="#">纸杯恐龙创造</a></p>
                                                            <div class="hover-bg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row11">
                                <div class="container">
                                    <div class="col-sm-12 anli-list hidden-xs">
                                        <div id="fadeInLeft5" class="container-fluid ">
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row4_04.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">侏罗纪工艺品创造</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row4_05.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">积木世界地图创造</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row4_06.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">折纸恐龙</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 after">
                                                <div class="anli-list-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/anli/row4_07.jpg" alt="" />
                                                    <div class="anli-list-hover">
                                                        <p><a href="#">个性创造工艺品软装饰</a></p>
                                                        <div class="hover-bg"></div>
                                                    </div>
                                                </div>
                                            </div>
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
                            <li>
                                <div class="td-list01">
                                    <div class="td-item">
                                        <h3><a href="#">赵梓良</a></h3>
                                        <p>若珂时代 / 市场总监</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="td-list02">
                                    <div class="td-item">
                                        <h3><a href="#">邱朋</a></h3>
                                        <p>若珂时代 / 设计总监</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="td-list03">
                                    <div class="td-item">
                                        <h3><a href="#">杨晓</a></h3>
                                        <p>若珂时代 / 广告经理</p>
                                    </div>
                                </div>
                            </li>
                            <li class="after">
                                <div class="td-list04">
                                    <div class="td-item">
                                        <h3><a href="#">何胜荣</a></h3>
                                        <p>若珂时代 / 广告经理</p>
                                    </div>
                                </div>
                            </li>
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
                                <div id="dituContent" class="allmap"></div>
                            </div>
                            <div id="fadeInRight6" class="col-sm-4">
                                <div class="c-ewm">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ewm.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .contact -->

    <div class="footer">
        <div class="f-top">
            <div class="container">
                <div class="col-sm-7">
                    <div class="f-nav">
<!--                         <ul>
                            <li class="before"><a href="#">底导航</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><a href="#">底导航</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><a href="#">底导航</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><a href="#">底导航</a></li>
                        </ul>
                        <br /> -->
                        <h3>成都若珂时代广告有限责任公司</h3>
                    <p>地址：四川省成都市都江堰市彩虹大道南段362-364号</p>
                    <p>联系方式：
                        <a href="tel:18599991151">18599991151(赵)&nbsp;&nbsp;&nbsp;</a>
                        <a href="tel:18599991151">18888888888(赵)&nbsp;&nbsp;&nbsp;</a>
                        <a href="tel:18599991151">13866666666(赵)&nbsp;&nbsp;&nbsp;</a>
                    </p>
                    <p>邮箱：<a href="Email:admin@admin.com">admin@admin.com</a></p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="f-call">
                        <span>185 9999 1151</span>
                        <p>工作时间 / 周一至周日：9:00-18:00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-bottom">
            <div class="container">

                    <div class="f-nav">


            <a href="#">底导航</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">底导航</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">底导航</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">底导航</a>


                    </div>
                    <p>Copyright @ 2018 . All rights reserved.   蜀ICP备18018201号-1</p>

            </div>
        </div>
    </div>
    <!-- .footer -->
    <a class="backTop_Z" id="backTop" onclick="backTop();" href="javascript:void(0);" style="display: block;"></a>
    <script type="text/javascript">
        window.onscroll=function(){
            var winTop_1=document.documentElement.scrollTop;
            var winTop_2=document.body.scrollTop;
            var winTop;
            (winTop_1>winTop_2)?winTop=winTop_1:winTop=winTop_2;
            if(winTop>0){
                $("#backTop").css({'display':'block'});
            }
            if(winTop == 0){
                $("#backTop").css({'display':'none'});
            }
        }

        function backTop(){
            $("html,body").animate({scrollTop:0},1000); ;
        }

</script>


        <!--online_type==6(2016在线客服)START-->
    <script language="JavaScript" src="<?php echo get_template_directory_uri(); ?>/js/new_online_2016.js"></script>
    <!-- <link href="/css/new_online2016/sidebar_style.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="/css/new_online2016/sidebar_color4/sidebar_color.css" rel="stylesheet" type="text/css" /> -->
    <div id="onService_panel" class="qq_onService_panel">
        <div class="sidebar2_Mo">
            <div class="sidebar2_list">
                <div class="sidebar2_listT ie_w">
                    <div class="list_c"></div>
                </div>
                <div class="sidebar2_listC">
                    <a id="prev_btn" class="prev_btn" href="###">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img/prev_icon.png">
                    </a>
                    <ul class="function_list">
                    <!---电话-->
                                                <li class="list">
                            <a class="tel_icon" href="###"></a>
                            <div class="lxwm_tel alt_c" style="right: -178px; opacity: 0;">
                                <div class="sidebar2_listT">
                                    <div class="list_c"></div>
                                </div>
                                <div class="lxwm_c alt_bg">
                                    <h2 class="lxwm_tit">&#30005;&#35805;&#30452;&#21628;</h2>
                                    <ul class="lxwm_list clearfix">
                                        <li>18599991151</li>
                                        <li>18599991151</li>
                                    </ul>
                                </div>
                                <div class="sidebar2_listB">
                                    <div class="list_c"></div>
                                </div>
                            </div>
                        </li>
                            <!---QQ-->
                            <!---二维码-->
                            <li class="list">
                            <a class="edit_icon" href="###"></a>
                            <div class="explain_text alt_c" style="right: -106px; opacity: 0;">
                                <div class="sidebar2_listT">
                                    <div class="list_c"></div>
                                </div>
                                <div class="explain_c alt_bg">
                                    <a href="/self_define/guest_book.php?username=a363703490">
                                    <em>&#22312;&#32447;&#30041;&#35328;</em></a>
                                </div>
                                <div class="sidebar2_listB">
                                    <div class="list_c"></div>
                                </div>
                            </div>
                        </li>
                        <!-- 发送邮件 -->
                                                    <li class="list">
                                <a class="mail_icon" href="###"></a>
                                <div class="explain_text alt_c" style="right: -106px; opacity: 0;">
                                    <div class="sidebar2_listT">
                                        <div class="list_c"></div>
                                    </div>
                                    <div class="explain_c alt_bg">
                                        <a href="mailto:363703490@qq.com"><em>&#21457;&#36865;&#37038;&#20214;</em></a>
                                    </div>
                                    <div class="sidebar2_listB">
                                        <div class="list_c"></div>
                                    </div>
                                </div>
                            </li>
                                                                    </ul>
                    <a id="next_btn" class="next_btn" href="###">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img/next_icon.png">
                    </a>
                </div>
                <div class="sidebar2_listB ie_w">
                    <div class="list_c"></div>
                </div>
            </div>
            <div class="sidebar2_state">
                <a id="state_btn" href="###" class=""></a>
            </div>
        </div>
    </div>


<script>
function initialize() {
  var mp = new BMap.Map('dituContent');
  mp.centerAndZoom(new BMap.Point(121.491, 31.233), 11);
}

function loadScript() {
  var script = document.createElement("script");
  script.src = "//api.map.baidu.com/api?v=2.0&ak=kpIZZ664I8VuhRdey1zStcG4uHuu27aQ&callback=initialize";
  document.body.appendChild(script);
}

window.onload = loadScript;
</script>

 <!--    <script type="text/javascript">
        // var map = new BMap.Map("dituContent");          // 创建地图实例
        // var point = new BMap.Point(116.404, 39.915);  // 创建点坐标
        // map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别
        // map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放


    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(103.656866,30.984384);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_ZOOM});
    map.addControl(ctrl_nav);
                }

    //标注点数组
    var markerArr = [{title:"成都若珂时代广告有限责任公司",content:"地址：都江堰市彩虹大道南段362-364号",point:"103.65661|30.984314",isOpen:1,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
         ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });

            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("/images/map-marker.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

        initMap();
    </script> -->
<?php wp_footer(); ?>
</body>

</html>