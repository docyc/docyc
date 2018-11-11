<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php _ll2('ll_seo_gjc'); ?>" />
    <meta name="description" content="<?php _ll2('ll_seo_ms'); ?>" />
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
    <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery1.12.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/swiper-4.4.1/js/swiper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/waypoints/jquery.waypoints.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/move.js"></script>

    <?php if(is_home()) { ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css" />
        <style>
            #baiduMapC img{
                max-width: none;
                max-height: none;
            }
        </style>
        <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

    <?php }elseif(is_page(135)){ ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" />
        <style>
            #baiduMapC img{
                max-width: none;
                max-height: none;
            }
        </style>
        <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
    <?php }elseif(is_page()){ ?>
        <!-- <link rel="stylesheet" href="<?php // echo get_template_directory_uri(); ?>/css/about.css" /> -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case.css" />
    <?php }elseif(is_single() || is_category() || is_tag() || is_author() ){ ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case.css" />
    <?php }else{ ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case.css" />
    <?php } ?>
    <style type="text/css">
        .fenye{width:98%;height:36px;padding-top: 15px;margin-bottom:20px;_text-align:center;line-height:36px;border-top: 1px solid #1e3988;}
        .fenye a{padding:4px 6px 4px 6px;margin:0 2px 0 2px;_border:1px solid #1e3988;text-decoration:none;color:#1e3988;background:#1e3988;color:#fff;}
        .fenye a.current{background:#da251e;color:#fff;}
        .fenye a:hover{background:#da251e;color:#fff;}
    </style>
    <?php wp_head();?>
</head>

<body>
<script>

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