<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

    // 从样式表获取主题名称
    $themename = wp_get_theme();
    $themename = preg_replace("/\W/", "_", strtolower($themename) );

    $optionsframework_settings = get_option( 'optionsframework' );
    $optionsframework_settings['id'] = $themename;
    update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  请阅读:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {


    // 将所有分类（categories）加入数组
    $options_categories = array();
    $options_categories_obj = get_categories();
    foreach ($options_categories_obj as $category) {
        $options_categories[$category->cat_ID] = $category->cat_name;
    }

    // 将所有标签（tags）加入数组
    $options_tags = array();
    $options_tags_obj = get_tags();
    foreach ( $options_tags_obj as $tag ) {
        $options_tags[$tag->term_id] = $tag->name;
    }


    // 将所有页面（pages）加入数组
    $options_pages = array();
    $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
    $options_pages[''] = 'Select a page:';
    foreach ($options_pages_obj as $page) {
        $options_pages[$page->ID] = $page->post_title;
    }

    // 如果使用图片单选按钮, define a directory path
    $imagepath =  get_template_directory_uri() . '/images/';

    $options = array();

    $options[] = array(
        'name' => __('基本设置', 'options_framework_theme'),
        'type' => 'heading'
    );

/*
* ************************************************************
text  -- 文本
textarea  -- 文本域
checkbox  -- 复选框
select  -- 选择
radio  -- 无线电
upload  -- 上传（图片上传者）
images  -- 图像（使用图像而不是单选按钮）
background  -- background（一组定义背景的选项）
multicheck  -- multicheck
color  -- 颜色（jquery颜色选择器）
typography  -- 排版（一组定义排版的选项）
editor  -- 编辑

* ************************************************************
*/




    // logo设置
    $options[] = array(
    'name' => __('网站LOGO设置', 'options_framework_theme'),
    'desc' => __('建议图像尺寸为180px * 54px，否则可能不正常', 'options_framework_theme'),
    'id' => 'll_logo',
    'type' => 'upload');
    // 联系信息设置
    // 微信二维码
    $options[] = array(
    'name' => __('微信二维码', 'options_framework_theme'),
    'desc' => __('建议图像尺寸为141px * 141px，否则可能不正常', 'options_framework_theme'),
    'id' => 'll_ewm',
    'type' => 'upload');
    // 电话
    $options[] = array(
        'name' => __('联系电话1', 'options_framework_theme'),
        'desc' => __('请输入手机号码或座机号码', 'options_framework_theme'),
        'id' => 'll_tel1',
        'std' => '028-8888888',
        'type' => 'text');
    $options[] = array(
        'name' => __('联系电话2', 'options_framework_theme'),
        'desc' => __('请输入手机号码或座机号码', 'options_framework_theme'),
        'id' => 'll_tel2',
        'std' => '028-8888888',
        'type' => 'text');
    $options[] = array(
        'name' => __('联系电话3', 'options_framework_theme'),
        'desc' => __('请输入手机号码或座机号码', 'options_framework_theme'),
        'id' => 'll_tel3',
        'std' => '18599991151(赵)    18888888888(赵)    13866666666(赵)',
        'type' => 'text');
    // QQ
    $options[] = array(
        'name' => __('联系QQ', 'options_framework_theme'),
        'desc' => __('请输入QQ号', 'options_framework_theme'),
        'id' => 'll_qq1',
        'std' => '12345678',
        'type' => 'text');
    // 邮箱
    $options[] = array(
        'name' => __('联系邮箱', 'options_framework_theme'),
        'desc' => __('请输入邮箱', 'options_framework_theme'),
        'id' => 'll_mail',
        'std' => 'admin@admin.com',
        'type' => 'text');
    // 地址
    $options[] = array(
        'name' => __('联系地址', 'options_framework_theme'),
        'desc' => __('请输入详细的联系地址', 'options_framework_theme'),
        'id' => 'll_address',
        'std' => '四川省成都市XXX',
        'type' => 'text');
    // 地址经纬度
    $options[] = array(
        'name' => __('地址经纬度', 'options_framework_theme'),
        'desc' => __('百度经纬度，例如：116.404, 39.915', 'options_framework_theme'),
        'id' => 'll_baidu_jwd',
        'std' => '116.404, 39.915',
        'type' => 'text');
    // 网站备案号
    $options[] = array(
        'name' => __('网站备案号', 'options_framework_theme'),
        'desc' => __('请输入你的网站备案号', 'options_framework_theme'),
        'id' => 'll_icp',
        'std' => '网站备案号',
        'type' => 'text');



    // 首页轮播图设置
    $options[] = array(
        'name' => __('轮播图', 'options_framework_theme'),
        'type' => 'heading');

    // 轮播图设置
    // 第一张
    $options[] = array(
    'name' => __('轮播图一', 'options_framework_theme'),
    'desc' => __('*必须 建议图像尺寸为1920px * 600px', 'options_framework_theme'),
    'id' => 'll_banner1',
    'type' => 'upload');

    // 第二张
    $options[] = array(
    'name' => __('轮播图二', 'options_framework_theme'),
    'desc' => __('*必须 建议图像尺寸为1920px * 600px', 'options_framework_theme'),
    'id' => 'll_banner2',
    'type' => 'upload');
   
    // 第三张
    $options[] = array(
    'name' => __('轮播图三', 'options_framework_theme'),
    'desc' => __('*必须 建议图像尺寸为1920px * 600px', 'options_framework_theme'),
    'id' => 'll_banner3',
    'type' => 'upload');
    
    // 第四张
    $options[] = array(
        'name' => __('轮播图四', 'options_framework_theme'),
        'desc' => __('建议图像尺寸为1920px * 600px', 'options_framework_theme'),
        'id' => 'll_banner4',
        'type' => 'upload');

    // 第五张
    $options[] = array(
        'name' => __('轮播图五', 'options_framework_theme'),
        'desc' => __('建议图像尺寸为1920px * 600px', 'options_framework_theme'),
        'id' => 'll_banner5',
        'type' => 'upload');

    $options[] = array(
        'name' => __( '轮播分页器', 'options_framework_theme' ),
        'desc' => __( '轮播分页器, 默认是开始的.', 'options_framework_theme' ),
        'id' => 'll_banner_fyq',
        'std' => '1',
        'type' => 'checkbox');

    $options[] = array(
        'name' => __( '导航按钮', 'options_framework_theme' ),
        'desc' => __( '导航按钮, 默认是关闭的.', 'options_framework_theme' ),
        'id' => 'll_banner_btn',
        'std' => '0',
        'type' => 'checkbox');

    $options[] = array(
        'name' => __( '滚动条', 'options_framework_theme' ),
        'desc' => __( '滚动条, 默认是关闭的.', 'options_framework_theme' ),
        'id' => 'll_banner_gdt',
        'std' => '0',
        'type' => 'checkbox');



    // 服务信息轮播
    $options[] = array(
        'name' => __('服务信息轮播', 'options_framework_theme'),
        'type' => 'heading');

    // 导航图一
    $options[] = array(
    'name' => __('图标ICON01', 'options_framework_theme'),
    'desc' => __('建议图像尺寸为117px * 114px', 'options_framework_theme'),
    'id' => 'll_s_icon01',
    'type' => 'upload');
    $options[] = array(
        'name' => __('图标ICON01标题', 'options_framework_theme'),
        'desc' => __('请输入你想要的文字，合适为好', 'options_framework_theme'),
        'id' => 'll_s_icon01_title',
        'std' => '默认标题',
        'type' => 'text');
    $options[] = array(
        'name' => __('图标ICON01描述', 'options_framework_theme'),
        'desc' => __('请输入简要的介绍描述', 'options_framework_theme'),
        'id' => 'll_s_icon01_content',
        'std' => '默认文本',
        'type' => 'textarea');
    // 导航图二
    $options[] = array(
    'name' => __('图标ICON02', 'options_framework_theme'),
    'desc' => __('建议图像尺寸为117px * 114px', 'options_framework_theme'),
    'id' => 'll_s_icon02',
    'type' => 'upload');
    $options[] = array(
        'name' => __('图标ICON02标题', 'options_framework_theme'),
        'desc' => __('请输入你想要的文字，合适为好', 'options_framework_theme'),
        'id' => 'll_s_icon02_title',
        'std' => '默认标题',
        'type' => 'text');
    $options[] = array(
        'name' => __('图标ICON02描述', 'options_framework_theme'),
        'desc' => __('请输入简要的介绍描述', 'options_framework_theme'),
        'id' => 'll_s_icon02_content',
        'std' => '默认文本',
        'type' => 'textarea');
    // 导航图三
    $options[] = array(
    'name' => __('图标ICON03', 'options_framework_theme'),
    'desc' => __('建议图像尺寸为117px * 114px', 'options_framework_theme'),
    'id' => 'll_s_icon03',
    'type' => 'upload');
    $options[] = array(
        'name' => __('图标ICON03标题', 'options_framework_theme'),
        'desc' => __('请输入你想要的文字，合适为好', 'options_framework_theme'),
        'id' => 'll_s_icon03_title',
        'std' => '默认标题',
        'type' => 'text');
    $options[] = array(
        'name' => __('图标ICON03描述', 'options_framework_theme'),
        'desc' => __('请输入简要的介绍描述', 'options_framework_theme'),
        'id' => 'll_s_icon03_content',
        'std' => '默认文本',
        'type' => 'textarea');
    // 导航图四
    $options[] = array(
    'name' => __('图标ICON04', 'options_framework_theme'),
    'desc' => __('建议图像尺寸为117px * 114px', 'options_framework_theme'),
    'id' => 'll_s_icon04',
    'type' => 'upload');
    $options[] = array(
        'name' => __('图标ICON04标题', 'options_framework_theme'),
        'desc' => __('请输入你想要的文字，合适为好', 'options_framework_theme'),
        'id' => 'll_s_icon04_title',
        'std' => '默认标题',
        'type' => 'text');
    $options[] = array(
        'name' => __('图标ICON04描述', 'options_framework_theme'),
        'desc' => __('请输入简要的介绍描述', 'options_framework_theme'),
        'id' => 'll_s_icon04_content',
        'std' => '默认文本',
        'type' => 'textarea');
    // 导航图五
    $options[] = array(
        'name' => __('图标ICON05', 'options_framework_theme'),
        'desc' => __('建议图像尺寸为117px * 114px', 'options_framework_theme'),
        'id' => 'll_s_icon05',
        'type' => 'upload');
        $options[] = array(
            'name' => __('图标ICON05标题', 'options_framework_theme'),
            'desc' => __('请输入你想要的文字，合适为好', 'options_framework_theme'),
            'id' => 'll_s_icon05_title',
            'std' => '默认标题',
            'type' => 'text');
        $options[] = array(
            'name' => __('图标ICON05描述', 'options_framework_theme'),
            'desc' => __('请输入简要的介绍描述', 'options_framework_theme'),
            'id' => 'll_s_icon05_content',
            'std' => '默认文本',
            'type' => 'textarea');
    // 导航图六
    $options[] = array(
        'name' => __('图标ICON06', 'options_framework_theme'),
        'desc' => __('建议图像尺寸为117px * 114px', 'options_framework_theme'),
        'id' => 'll_s_icon06',
        'type' => 'upload');
        $options[] = array(
            'name' => __('图标ICON06标题', 'options_framework_theme'),
            'desc' => __('请输入你想要的文字，合适为好', 'options_framework_theme'),
            'id' => 'll_s_icon06_title',
            'std' => '默认标题',
            'type' => 'text');
        $options[] = array(
            'name' => __('图标ICON06描述', 'options_framework_theme'),
            'desc' => __('请输入简要的介绍描述', 'options_framework_theme'),
            'id' => 'll_s_icon06_content',
            'std' => '默认文本',
            'type' => 'textarea');


    // 首页其他信息配置
    $options[] = array(
        'name' => __('首页其他信息配置', 'options_framework_theme'),
        'type' => 'heading');

    // 首页关于我们
    $options[] = array(
    'name' => __('首页关于我们', 'options_framework_theme'),
    'desc' => __('关于我们页面ID', 'options_framework_theme'),
    'id' => 'gywm_page_id',
    'class' => 'mini',
    'type' => 'text');

    // 项目服务案例
    $options[] = array(
        'name' => __('项目服务案例一', 'options_framework_theme'),
        'desc' => __('服务案例一（ID）', 'options_framework_theme'),
        'id' => 'fwal_1',
        'class' => 'mini',
        'type' => 'text');

    $options[] = array(
        'name' => __('项目服务案例二', 'options_framework_theme'),
        'desc' => __('服务案例二（ID）', 'options_framework_theme'),
        'id' => 'fwal_2',
        'class' => 'mini',
        'type' => 'text');

    $options[] = array(
        'name' => __('项目服务案例三', 'options_framework_theme'),
        'desc' => __('服务案例三（ID）', 'options_framework_theme'),
        'id' => 'fwal_3',
        'class' => 'mini',
        'type' => 'text');

    $options[] = array(
        'name' => __('项目服务案例四', 'options_framework_theme'),
        'desc' => __('服务案例四（ID）', 'options_framework_theme'),
        'id' => 'fwal_4',
        'class' => 'mini',
        'type' => 'text');

// 广告团队
    $options[] = array(
        'name' => __('广告团队', 'options_framework_theme'),
        'desc' => __('广告团队（ID）', 'options_framework_theme'),
        'id' => 'll_ggtd',
        'class' => 'mini',
        'type' => 'text');

    // SEO
    $options[] = array(
        'name' => __('SEO', 'options_framework_theme'),
        'type' => 'heading');

    $options[] = array(
        'name' => __('关键词', 'options_framework_theme'),
        'desc' => __('例如：XX公司,XX品牌等，多个使用英文逗号分割', 'options_framework_theme'),
        'id' => 'll_seo_gjc',
        'type' => 'text');

    $options[] = array(
        'name' => __('网站描述', 'options_framework_theme'),
        'desc' => __('例如：简短介绍', 'options_framework_theme'),
        'id' => 'll_seo_ms',
        'type' => 'textarea');



    $options[] = array(
        'name' => __('高级设置', 'options_framework_theme'),
        'type' => 'heading');



    return $options;
}