<?php get_header(); ?>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=kpIZZ664I8VuhRdey1zStcG4uHuu27aQ"></script>
<div class="ymcontent">
    <div class="qing">
        <div class="con" id="lxtmdk" style="display: none;"> <a class="gblxwmdk" rel="nofollow" href="javascript:void(0)" onclick="document.getElementById('lxtmdk').style.display='none'">X</a>
            <div class="con1"> 感谢您来到我们的官方网站，若您有合作意向，请您使用以下方式联系我们，
                <br> 我们将尽快给您回复，并为您提供最真诚的服务，谢谢。 </div>
            <div class="con2">
                <div class="add">
                    <div class="add1"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con1_0.png" width="20" height="24" class="add1_1" original="images/lianxiwomen/lx_con1_0.png"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con1_0.png" width="20" height="24" class="add1_2" original="images/lianxiwomen/lx_con1_0.png"></div>
                    <div class="add2">公司地址：四川省成都市都江堰市彩虹大道南段362-364</div>
                </div>
                <div class="add">
                    <div class="add1"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con2.png" width="20" height="24" class="add1_1" original="images/lianxiwomen/lx_con2.png"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con2.png" width="20" height="24" class="add1_2" original="images/lianxiwomen/lx_con2.png"></div>
                    <div class="add2">邮　　编：610100</div>
                </div>
                <div class="add">
                    <div class="add1"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con3.png" width="20" height="24" class="add1_1" original="images/lianxiwomen/lx_con3.png"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con3.png" width="20" height="24" class="add1_2" original="images/lianxiwomen/lx_con3.png"></div>
                    <div class="add2">业&nbsp;&nbsp;务&nbsp;部：18599991151</div>
                </div>
                <div class="add">
                    <div class="add1"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con3.png" width="20" height="24" class="add1_1" original="images/lianxiwomen/lx_con3.png"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con3.png" width="20" height="24" class="add1_2" original="images/lianxiwomen/lx_con3.png"></div>
                    <div class="add2">设&nbsp;&nbsp;计&nbsp;部：18599991151</div>
                </div>
                <div class="add">
                    <div class="add1"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con5.png" width="20" height="24" class="add1_1" original="images/lianxiwomen/lx_con5.png"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con5.png" width="20" height="24" class="add1_2" original="images/lianxiwomen/lx_con5.png"></div>
                    <div class="add2">传　　真：18599991151</div>
                </div>
                <div class="add">
                    <div class="add1"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con6.png" width="20" height="24" class="add1_1" original="images/lianxiwomen/lx_con6.png"><img src="<?php echo get_template_directory_uri(); ?>/images/lianxiwomen/lx_con6.png" width="20" height="24" class="add1_2" original="style/images/lx_con6.png"></div>
                    <div class="add2">公司主页：http://www.cdrksd.com　　E-mail：18599991151@qq.com</div>
                </div>
            </div>
        </div>
        <div id="baiduMapC" style="width:100%;height:700px;overflow: hidden; position: relative; z-index: 0; background-color: rgb(243, 241, 236); color: rgb(0, 0, 0); text-align: left;">

        </div>

<script>
    // var map = new BMap.Map("baiduMapC");
    // var point = new BMap.Point(<?php echo _ll2('ll_baidu_jwd'); ?>);
    // var marker = new BMap.Marker(point);  // 创建标注
    // map.addOverlay(marker);              // 将标注添加到地图中
    // map.centerAndZoom(point, 19);
    // map.enableScrollWheelZoom(true);
    // var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_ZOOM});
    // map.addControl(ctrl_nav);
    // var icon = new BMap.Icon("<?php echo get_template_directory_uri(); ?>/images/map-marker.png", new BMap.Size(50,50), {'anchor':new BMap.Size(20,60)});
    // var marker = new BMap.Marker(pt,{icon:icon});
    // map.addOverlay(marker);
    // marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
</script>
        <script>
            $(document).ready(function(){
                var map = new BMap.Map("baiduMapC");
                var point = new BMap.Point(103.656866,30.984384);
                map.centerAndZoom(point,20);
            })
            $(function(){
                drawbaidumap();
                $(window).resize(function() {
                    drawbaidumap();
                });
            });
            function drawbaidumap()
            {
                    //地图适应高度
                    var winheight = $(window).height();
                    //$(".contactnei").height(winheight-120);
                    //$("#mapall").height(winheight-20);
                    var map = new BMap.Map("baiduMapC");
                    var point = new BMap.Point(103.656866,30.984384);
                    map.centerAndZoom(point,15);
                    map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
                    map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用
                    var  mapStyle = {style:"normal"};
                    map.setMapStyle(mapStyle);
                    map.addControl(new BMap.NavigationControl());
                    var pt = new BMap.Point(103.656866,30.984384);
                    var icon = new BMap.Icon("<?php echo get_template_directory_uri(); ?>/images/map-marker.png", new BMap.Size(50,50), {'anchor':new BMap.Size(20,60)});
                    var marker = new BMap.Marker(pt,{icon:icon});
                    map.addOverlay(marker);
                    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
                    marker.addEventListener("click", function(){
                        $("#lxtmdk").css('display','block');
                    });
                }
        </script>
    </div><!-- .qing -->
</div><!-- .ymcontent -->

<?php 
    $my_query = new WP_Query(array(
        'type' => 'page',
        'page_id'    => _ll2('gywm_page_id')
    ))
?>

<?php if($my_query->have_posts()) : ?>
<?php while($my_query->have_posts()) : $my_query->the_post() ?>
    <div id="Companyprofile">
        <div class="gywm container">
            <div class="gytit">
                <h4><a href="<?php the_permalink(); ?>" title="关于我们" target="_blank" class="tle1">走进若珂时代广告</a></h4> </div>
            <div class="gytot"> <a href="<?php the_permalink(); ?>" title="关于我们" target="_blank"><img width="680" height="388" src="http://nst.wpke.net/wp-content/themes/nst/timthumb.php?src=http://nst.wpke.net/wp-content/uploads/2016/08/guanyunaisite.jpg&amp;w=680&amp;h=388&amp;zc=1" alt="关于我们"></a>
                <div class="gy_r"> <em>ABOUT US</em>
                    <h5><b>成都若珂时代广告有限责任公司</b></h5>
                    <p>
                    <?php $docyctxt = get_the_content(); ?>
                    <?php echo ll2_strimwidth( $docyctxt, 180); ?>  </p> 
                    <span><a rel="nofollow" href="<?php the_permalink(); ?>" title="关于我们" target="_blank">更多详情</a></span>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<!-- #Companyprofile -->


<?php get_footer(); ?>