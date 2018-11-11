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
                        <h3 style="margin-bottom:10px;">成都若珂时代广告有限责任公司</h3>
                    <p style="line-height:1.8">地址：<?php echo _ll2('ll_address'); ?></p>
                    <p style="line-height:1.8">联系方式：
                        <?php echo _ll2('ll_tel3'); ?>
                    </p>
                    <p style="line-height:1.8">邮箱：<a href="mailto:<?php echo _ll2('ll_mail'); ?>"><?php echo _ll2('ll_mail'); ?></a></p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="f-call">
                        <span><?php echo _ll2('ll_tel2'); ?></span>
                        <p>工作时间 / 周一至周日：9:00-18:00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-bottom">
            <div class="container">

                    <div class="f-nav">
                    <a href="/">成都若珂时代广告</a>
                    <?php wp_list_bookmarks(array(
                        'orderby'          => 'name',
                        'order'            => 'ASC',
                        'limit'            => 6,
                        // 'category'         => -1,
                        // 'exclude_category' => 9,
                        // 'category_name'    => '',
                        'hide_invisible'   => 1,
                        'show_updated'     => 0,
                        'echo'             => 1,
                        'categorize'       => 0,
                        'title_li'         => '',
                        // 'title_before'     => '',
                        // 'title_after'      => '',
                        // 'category_orderby' => 'name',
                        // 'category_order'   => 'ASC',
                        // 'class'            => 'linkcat',
                        'before'  => '&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;',
                        'after'   => '' 
                    )); ?>
                    </div>
                    <p>Copyright @ 2018 . All rights reserved.   <?php echo _ll2('ll_icp'); ?></p>

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
                                        <li><?php echo _ll2('ll_tel1'); ?></li>
                                        <li><?php echo _ll2('ll_tel2'); ?></li>
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
                                    <a href="/liuyan.php">
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
                                        <a href="mailto:<?php echo _ll2('ll_mail'); ?>"><em>&#21457;&#36865;&#37038;&#20214;</em></a>
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

<?php wp_footer(); ?>
</body>

</html>