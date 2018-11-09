<?php
/**************************************
 * 主题更新
 **************************************/

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://dev.lemacy.top/info.json',
    __FILE__, //Full path to the main plugin file or functions.php.
    'docyc'
);

/**************************************
 * 图片延迟加载
 **************************************/

// add_filter ('the_content', 'lazyload');
// function lazyload($content) {
//     $loadimg_url=get_bloginfo('template_directory').'/loading.gif';
//     if(!is_feed()||!is_robots) {
//         $content=preg_replace('//i',"\n",$content);
//     }
//     return $content;
// }

/**************************************
 * 开启网站RSS自动订阅
 **************************************/

add_theme_support('automatic-feed-links');

/**************************************
 * 开启特色图片功能
 **************************************/

add_theme_support('post-thumbnails');

/**************************************
 * 开启导航菜单功能的详细代码：
 **************************************/

register_nav_menu( 'zhudaohang', '网站的顶部导航' );     //注册一个菜单
register_nav_menu( 'dibudaohang', '网站的底部导航' );   //注册第二个菜单

/**************************************
 * 开启侧边栏小工具
 **************************************/

register_sidebar(array(
    'name' => '主侧边栏',
    'id' => 'sidebar-1',
    'description' => '第一个小工具区域',
    'class' => '',
    'before_widget' => 'before_widget',
    'after_widget' => 'after_widget',
    'before_title' => 'before_title',
    'after_title' => 'after_title'
));  // 注册侧边栏

/**************************************
 * 格式化 wp-title()
 **************************************/
/**
* 想要wp_title()函数实现，访问首页显示“站点标题-站点副标题”
* 如果存在翻页且正方的不是第1页，标题格式“标题-第2页”
* 当使用短横线-作为分隔符时，会将短横线转成字符实体&#8211;
* 而我们不需要字符实体，因此需要替换字符实体
* wp_title()函数显示的内容，在分隔符前后会有空格，也要去掉
*/
add_filter('wp_title', 'docyc_wp_title', 10, 2);
function docyc_wp_title($title, $sep) {
    global $paged, $page;

    //如果是feed页，返回默认标题内容
    if ( is_feed() ) {
        return $title;
    }

    // 标题中追加站点标题
    $title .= get_bloginfo( 'name' );

    // 网站首页追加站点副标题
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // 标题中显示第几页
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( '第%s页', max( $paged, $page ) );

    //去除空格，-的字符实体
    $search = array('&#8211;', ' ');
    $replace = array('-', '');
    $title = str_replace($search, $replace, $title);

    return $title;
}


/**************************************
 * 设置面板
 **************************************/
/*
 * 加载设置面板
 * 如果需要加载子主题，请使用stylesheet_directory
 * instead of template_directory
 */

if ( !function_exists( 'optionsframework_init' ) ) {
    define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
    require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}

/*
 * 这是一个如何在设置面板中加载自定义脚本的示例
 * 单击复选框时显示/隐藏文本框
 * 如果未使用到下面的内容，可以删除该项
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

    jQuery('#example_showhidden').click(function() {
        jQuery('#section-example_text_hidden').fadeToggle(400);
    });

    if (jQuery('#example_showhidden:checked').val() !== undefined) {
        jQuery('#section-example_text_hidden').show();
    }

});

</script>
<?php
}

add_filter('wp_mail_content_type',create_function('','return "text/html";'));

/*
 * 这是一个如何在设置面板中后面加入自定义内容的示例
 * 我们在右侧添加一个自定义面板
 * 如果未使用到下面的内容，可以删除该项
 */

add_action('optionsframework_after','options_after', 100);

function options_after() { ?>
    <div class="metabox-holder" id="custom-panel">
        <div class="postbox">
            <h3><span>主题后台控制面板说明</span></h3>
            <div class="inside">
                <p>主题后台控制面板是采用OF后台设置框架进行的二次开发。</p>

            </div>
        </div>
    </div>
    <style>
        #custom-panel{
            position: relative;
            z-index: 0;
            max-width: 782px;
            background: #fff;
        }
        #custom-panel h3{
            cursor: default;
        }
    </style>
<?php }
