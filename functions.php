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
 * 开启wordpress友情链接管理
 **************************************/

add_filter( 'pre_option_link_manager_enabled', '__return_true' );


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
register_nav_menu( 'nav_anli', '案例侧导航' );   //注册第三个菜单
register_nav_menu( 'nav_news', '新闻侧导航' );   //注册第四个菜单

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
 * 字符截取
 **************************************/
/**
* ll2_strimwidth( ) 函数
* 功能：字符串截取，并去除字符串中的html和php标签
* @Param string $str            要截取的原始字符串
* @Param int $len               截取的长度
* @Param string $suffix     字符串结尾的标识
* @Return string                    处理后的字符串
*/
function ll2_strimwidth( $str, $len, $start = 0, $suffix = '……' ) {
    $str = str_replace(array(' ', '　','&nbsp;', '\r\n'), '', strip_tags( $str ));
    if ( $len>mb_strlen( $str ) ) {
        return mb_substr( $str, $start, $len );
    }
    return mb_substr($str, $start, $len) . $suffix;
}

/**
* getPostViews()函数
* 功能：获取阅读数量
* 在需要显示浏览次数的位置，调用此函数
* @Param object|int $postID   文章的id
* @Return string $count		  文章阅读数量
*/
function getPostViews( $postID ) {
    $count_key = 'post_views_count';
    $count = get_post_meta( $postID, $count_key, true );
    if( $count=='' ) {
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );
        return "0";
    }
   return $count;
}


/**
* setPostViews()函数  
* 功能：设置或更新阅读数量
* 在内容页(single.php，或page.php )调用此函数
* @Param object|int $postID   文章的id
* @Return string $count		  文章阅读数量
*/
function setPostViews( $postID ) {
    $count_key = 'post_views_count';
    $count = get_post_meta( $postID, $count_key, true );
    if( $count=='' ) {
        $count = 0;
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );
    } else {
        $count++;
        update_post_meta( $postID, $count_key, $count );
    }
}


/**************************************
 * 面包屑导航
 **************************************/

 /**
* docyc_breadcrumbs()函数
* 功能是输出面包屑导航HTML代码
* @Param null           不需要输入任何参数
* @Return string        输出HTML代码
*/
//设置添加面包屑导航
function ll2_breadcrumbs() {
	$delimiter = '»'; 
	$before = '<span class="current">'; 
	$after = '</span>';
	if ( !is_home() || is_paged() ) {
		echo '<div id="crumbs">'.__( '' , 'cmp' );
		global $post;
		$homeLink = home_url();
		echo ' <a itemprop="breadcrumb" href="' . $homeLink . '">' . __( '<i class="fa fa-home"></i>首页' , 'cmp' ) . '</a> ' . $delimiter . ' ';
		if ( is_category() ) { 
			global $wp_query;
			$cat_obj = $wp_query->get_queried_object();
			$thisCat = $cat_obj->term_id;
			$thisCat = get_category($thisCat);
			$parentCat = get_category($thisCat->parent);
			if ($thisCat->parent != 0){
				$cat_code = get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ');
				echo $cat_code = str_replace ('<a','<a itemprop="breadcrumb"', $cat_code );
			}
			echo $before . '' . single_cat_title('', false) . '' . $after;
		} elseif ( is_day() ) { 
			echo '<a itemprop="breadcrumb" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
			echo '<a itemprop="breadcrumb"  href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
			echo $before . get_the_time('d') . $after;
		} elseif ( is_month() ) { 
			echo '<a itemprop="breadcrumb" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
			echo $before . get_the_time('F') . $after;
		} elseif ( is_year() ) { 
			echo $before . get_the_time('Y') . $after;
		} elseif ( is_single() && !is_attachment() ) { 
			if ( get_post_type() != 'post' ) { 
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<a itemprop="breadcrumb" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
				echo $before . get_the_title() . $after;
			} else { 
				$cat = get_the_category(); $cat = $cat[0];
				$cat_code = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				echo $cat_code = str_replace ('<a','<a itemprop="breadcrumb"', $cat_code );
				echo $before . get_the_title() . $after;
			}
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;
		} elseif ( is_attachment() ) { 
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			echo '<a itemprop="breadcrumb" href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;
		} elseif ( is_page() && !$post->post_parent ) { 
			echo $before . get_the_title() . $after;
		} elseif ( is_page() && $post->post_parent ) { 
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a itemprop="breadcrumb" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
			echo $before . get_the_title() . $after;
		} elseif ( is_search() ) { 
			echo $before ;
			printf( __( '搜索结果: %s', 'cmp' ),  get_search_query() );
			echo  $after;
		} elseif ( is_tag() ) { 
			echo $before ;
			printf( __( '标签存档: %s', 'cmp' ), single_tag_title( '', false ) );
			echo  $after;
		} elseif ( is_author() ) { 
			global $author;
			$userdata = get_userdata($author);
			echo $before ;
			printf( __( '作者存档: %s', 'cmp' ),  $userdata->display_name );
			echo  $after;
		} elseif ( is_404() ) { 
			echo $before;
			_e( 'Not Found', 'cmp' );
			echo  $after;
		}
		if ( get_query_var('paged') ) { 
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
				echo sprintf( __( ' ( 第 %s 页 )', 'cmp' ), get_query_var('paged') );
		}
		echo '</div>';
	}
}


/**************************************
 * 数字分页函数
 **************************************/
/**
* 数字分页函数
* 因为wordpress默认仅仅提供简单分页
* 所以要实现数字分页，需要自定义函数
* @Param int $range         数字分页的宽度
* @Return string|empty      输出分页的HTML代码
*/
function ll2_pagenavi( $range = 4 ) {
    global $paged,$wp_query;
    if ( !$max_page ) {
        $max_page = $wp_query->max_num_pages;
    }
    if( $max_page >1 ) {
        echo "<div class='fenye'>";
        if( !$paged ){
            $paged = 1;
        }
        if( $paged != 1 ) {
            echo "<a href='".get_pagenum_link(1) ."' class='extend' title='跳转到首页'>首页</a>";
        }
        previous_posts_link('上一页');
        if ( $max_page >$range ) {
            if( $paged <$range ) {
                for( $i = 1; $i <= ($range +1); $i++ ) {
                    echo "<a href='".get_pagenum_link($i) ."'";
                if($i==$paged) echo " class='current'";echo ">$i</a>";
                }
            }elseif($paged >= ($max_page -ceil(($range/2)))){
                for($i = $max_page -$range;$i <= $max_page;$i++){
                    echo "<a href='".get_pagenum_link($i) ."'";
                    if($i==$paged)echo " class='current'";echo ">$i</a>";
                    }
                }elseif($paged >= $range &&$paged <($max_page -ceil(($range/2)))){
                    for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){
                        echo "<a href='".get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";
                    }
                }
            }else{
                for($i = 1;$i <= $max_page;$i++){
                    echo "<a href='".get_pagenum_link($i) ."'";
                    if($i==$paged)echo " class='current'";echo ">$i</a>";
                }
            }
        next_posts_link('下一页');
        if($paged != $max_page){
            echo "<a href='".get_pagenum_link($max_page) ."' class='extend' title='跳转到最后一页'>尾页</a>";
        }
        echo '<span>共['.$max_page.']页</span>';
        echo "</div>\n";
    }
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
