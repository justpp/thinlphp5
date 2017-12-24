<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:98:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/index\view\index\index.html";i:1514119852;s:100:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/index\view\public\header.html";i:1514119849;s:100:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/index\view\public\footer.html";i:1513307705;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>装修公司-首页</title>
    <link rel="stylesheet" type="text/css" href="__CSS__/demo.css"/>
    <link rel="stylesheet" type="text/css" href="__CSS__/style.css"/>
    <link rel="stylesheet" type="text/css" href="__CSS__/swiper.min.css"/>
    <script type="text/javascript" src="__JS__/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="__JS__/swiper.min.js"></script>
    <script type="text/javascript" src="__JS__/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="__JS__/radialIndicator.js"></script>
    <script type="text/javascript" src="__JS__/carousel.js"></script>
    <style type="text/css">
        .clearfix:after {
            content: '.';
            display: block;
            visibility: hidden;
            overflow: hidden;
            height: 0;
            line-height: 0;
            clear: both;
        }

        .clearfix {
            zoom: 1
        }

    </style>
</head>
<body>
<div class="header">
    <p class="logo2"><img src="__STATIC__/img/logo2.png"/></p>
    <ul>
        <a href="<?php echo url('index/index'); ?>">
            <li class="active">
                <span class="span1">首页</span>
                <span class="span2">Home</span>
                <span class="underLine"></span>
            </li>
        </a>
        <?php if (is_array($navlist) || $navlist instanceof \think\Collection || $navlist instanceof \think\Paginator): $i = 0;
            $__LIST__ = $navlist;
            if (count($__LIST__) == 0) : echo ""; else: foreach ($__LIST__ as $key => $v): $mod = ($i % 2);
                ++$i; ?>
                <a href='<?php echo url("cate/index?cid=$v[id]"); ?>'>
                    <li>
                        <span class="span1"><?php echo $v['cname']; ?></span>
                        <span class="span2"><?php echo ucfirst($v['enname']); ?></span>
                        <span class="underLine"></span>
                    </li>
                </a>
            <?php endforeach; endif; else: echo "";endif; ?>
    </ul>
    <p class="tel"><img src="__STATIC__/img/tel.png"/>187-2342-2333</p>
</div>
<div class="banner" style="margin-top: 0px;">
    <div class="swiper-container3">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: url(img/banner.jpg)center;background-size:cover;">
                <img src="__STATIC__/img/banner.jpg"/>
            </div>
            <div class="swiper-slide" style="background: url(img/banner2.jpg)center;background-size:100% auto;">
                <img src="__STATIC__/img/banner2.jpg"/>
            </div>
            <div class="swiper-slide" style="background: url(img/banner3.jpg)center;background-size:100% auto;">
                <img src="__STATIC__/img/banner3.jpg"/>
            </div>
        </div>
        <div class="swiper-pagination2"></div>
    </div>
    <script>
        var swiper = new Swiper(".swiper-container3", {
            pagination: ".swiper-pagination2",
            slidesPerView: 1,
            paginationClickable: true,
            loop: true,
            autoplay: 5000
        })
    </script>
    <div class="cont1">
        <div class="title">
            <p class="p1">A</p>
            <div class="p2">
                <p class="pp1">关于</p>
                <p class="pp2">BOUT US</p>
            </div>
        </div>
        <div class="cont1_box">
            <div class="cont1_left">
                <p class="p1">成都装修公司,引领家装砂浆品牌先导!!</p>
                <p class="p2">
                    成都市易建建筑材料有限公司成立于2012年5月18日，注册资金25000万，年产干拌砂浆50万吨、湿拌砂浆80万吨。公司办公地址位于中海国际中心E座，公司生产地址位于成都市大邑县沙渠工业园区，拥有机械化标准厂区50余亩，是目前成都地区预拌砂浆生产企业风向标。</p>
                <p class="p2">成都市易建建筑材料公司在公司的统一规划下，以预拌砂浆的生产与销售作为重点加强的核心业务。</p>
            </div>
            <div class="cont1_right">
                <img src="__STATIC__/img/cont1_pic1.jpg"/>
            </div>
        </div>
        <a href="about.html"><p class="moreP">MORE</p></a>
    </div>
    <div class="line"></div>
    <div class="cont2">
        <img src="__STATIC__/img/cont2_bg.jpg"/>
        <div class="title">
            <p class="p1">P</p>
            <div class="p2">
                <p class="pp1">产品</p>
                <p class="pp2">RODUCT</p>
            </div>
        </div>
        <div class="cont2_box">
            <div class="J_Poster poster-main" data-setting='{
	"width":1110,
	"height":500,
	"posterWidth":300,
	"posterHeight":500,
	"scale":0.85,
	"autoPlay":true,
	"delay":500000,
	"speed":300
}'>
                <div class="poster-btn poster-prev-btn"></div>
                <ul class="poster-list">
                    <?php if (is_array($prolist) || $prolist instanceof \think\Collection || $prolist instanceof \think\Paginator): $i = 0;
                        $__LIST__ = $prolist;
                        if (count($__LIST__) == 0) : echo ""; else: foreach ($__LIST__ as $key => $v): $mod = ($i % 2);
                            ++$i; ?>
                            <li class="poster-item">
                                <div class="pb_box">
                                    <p class="p_img"><img src="<?php echo thumb($v['thumb'], 300, 312); ?>"/></p>
                                    <div class="p_info">
                                        <p class="p1"><?php echo cn_substr($v['title'], 20); ?></p>
                                        <p class="p2"><?php echo cn_substr($v['content'], 60); ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; endif; else: echo "";endif; ?>
                </ul>
                <div class="poster-btn poster-next-btn"></div>
            </div>
            <script type="text/javascript">
                $(function () {
                    Carousel.init($(".J_Poster"));
                });
                $(".pb_box").eq(0).addClass("index2");
                $(".poster-prev-btn").click(function () {
                    for (var i = 0; i < $(".poster-item").length; i++) {
                        if ($(".poster-item").eq(i).css("z-index") == "2") {
                            $(".poster-item").eq(i - 1).find(".pb_box").addClass("index2");
                        } else {
                            $(".poster-item").eq(i - 1).find(".pb_box").removeClass("index2");
                        }
                    }
                });
                $(".poster-next-btn").click(function () {
                    $(".poster-item").find(".pb_box").removeClass("index2");
                    for (var i = 0; i < $(".poster-item").length; i++) {
                        if ($(".poster-item").eq(i).css("z-index") == "2") {
                            if (i == 4) {
                                $(".pb_box").eq(0).addClass("index2");
                            } else {
                                $(".poster-item").eq(i + 1).find(".pb_box").addClass("index2");
                            }
                        }
                    }
                });
            </script>

        </div>
        <a href="product.html"><p class="moreP">MORE</p></a>
    </div>
    <div class="cont3">
        <div class="title">
            <p class="p1">N</p>
            <div class="p2">
                <p class="pp1">新闻</p>
                <p class="pp2">EWS</p>
            </div>
        </div>
        <div class="swiper-container1">
            <div class="swiper-wrapper">
                <?php if (is_array($newslist) || $newslist instanceof \think\Collection || $newslist instanceof \think\Paginator): $i = 0;
                    $__LIST__ = $newslist;
                    if (count($__LIST__) == 0) : echo ""; else: foreach ($__LIST__ as $key => $v): $mod = ($i % 2);
                        ++$i; ?>
                        <div class="swiper-slide">
                            <div class="news_li">
                                <p class="p1"><?php echo date('d', $v['addtime']); ?>
                                    <span>/<?php echo date('m', $v['addtime']); ?></span></p>
                                <p class="p2"><?php echo $v['title']; ?></p>
                                <p class="p3"><img src="<?php echo thumb($v['thumb'], 530, 100); ?>"/></p>
                                <p class="p4"><?php echo $v['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; endif; else: echo "";endif; ?>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
        </div>
        <script>
            var mySwiper = new Swiper('.swiper-container1', {
                direction: 'horizontal',
                loop: true,
                slidesPerView: 2,
                pagination: '.swiper-pagination',
                paginationClickable: true,
                spaceBetween: 60
            })
        </script>
        <a href="news.html"><p class="moreP">MORE</p></a>
    </div>
    <div class="line"></div>
    <div class="cont4">
        <div class="title">
            <p class="p1">C</p>
            <div class="p2">
                <p class="pp1">案例</p>
                <p class="pp2">ASE</p>
            </div>
        </div>
        <div class="cont4_box">
            <ul class="cont4_left">
                <li><img src="__STATIC__/img/cont4_pic2.jpg"/></li>
                <li><img src="__STATIC__/img/cont4_pic3.jpg"/></li>
                <li><img src="__STATIC__/img/cont4_pic4.jpg"/></li>
                <li><img src="__STATIC__/img/cont4_pic5.jpg"/></li>
            </ul>
            <div class="cont4_center">
                <p class="p1">专注提供高品质专修砂浆</p>
                <p class="p2">
                    公司秉承“以科技为先导，以创新求发展，以质量为依托，以诚信待客户”的企业精神，“以信誉为生命，以产品为基石，以服务为保证，以价格为标杆，以利润为中心”的经营理念，坚持以“水泥基为基础，创科技型、管理型、专家型”企业的发展方向，追求品牌专业化、环境榜样化、团队素质化、顾客主动化，以奉献绿色建材为己任。</p>
            </div>
            <ul class="cont4_right">
                <li><img src="__STATIC__/img/cont4_pic6.jpg"/></li>
                <li><img src="__STATIC__/img/cont4_pic7.jpg"/></li>
                <li><img src="__STATIC__/img/cont4_pic8.jpg"/></li>
                <li><img src="__STATIC__/img/cont4_pic9.jpg"/></li>
            </ul>
        </div>
        <a href="project.html"><p class="moreP">MORE</p></a>
    </div>
    <div class="line"></div>
    <div class="cont5">
        <div class="title">
            <p class="p1">C</p>
            <div class="p2">
                <p class="pp1">合作企业</p>
                <p class="pp2">OOPERATION</p>
            </div>
        </div>
        <div class="cont5_box">
            <table border="0" cellpadding="0" cellspacing="0 ">
                <tr>
                    <td><img src="__STATIC__/img/cont5_pic1.jpg"/></td>
                    <td><img src="__STATIC__/img/cont5_pic2.jpg"/></td>
                    <td><img src="__STATIC__/img/cont5_pic3.jpg"/></td>
                    <td><img src="__STATIC__/img/cont5_pic4.jpg"/></td>
                </tr>
                <tr>
                    <td><img src="__STATIC__/img/cont5_pic5.jpg"/></td>
                    <td><img src="__STATIC__/img/cont5_pic6.jpg"/></td>
                    <td><img src="__STATIC__/img/cont5_pic7.jpg"/></td>
                    <td><img src="__STATIC__/img/cont5_pic8.jpg"/></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="right_box">
        <ul>
            <li>
                <img class="img1" src="__STATIC__/img/kefu1.png"/>
                <img class="img2" src="__STATIC__/img/kefu2.png"/>
            </li>
            <li class="active er">
                <img class="img1" src="__STATIC__/img/pu1.png"/>
                <img class="img2" src="__STATIC__/img/pu2.png"/>
            </li>
            <li class="to_top" style="height: 69px;">
                <img class="img1" src="__STATIC__/img/to_top1.png"/>
                <img class="img2" src="__STATIC__/img/to_top2.png"/>
            </li>
        </ul>
        <div class="erweima">
            <img src="__STATIC__/img/erweima.jpg"/>
            <p>装修公司砂浆人人店</p>
        </div>
    </div>
    <div class="footer">
        <div class="footer_box">
            <div class="footer_left">
                <p>
                    <a href="about.html">关于我们 </a> |
                    <a>使用帮助</a> |
                    <a>用户协议</a> |
                    <a>联系我们</a> |
                    <a>版权声明</a>
                </p>
                <p>XXX有限公司 </p>
                <p>联系电话：123-4566-4666</p>
                <p>E-mail：123@qq.com </p>
                <p>网址:www.123.</p>
                <p>地址：中国·成都</p>
            </div>
            <div class="footer_right">
                <p style="margin-right: 30px;">
                    <img src="__STATIC__/img/erweima2.jpg"/>
                    <span>公众号二维码</span>
                </p>
                <p>
                    <img src="__STATIC__/img/erweima2.jpg"/>
                    <span>人人店二维码</span>
                </p>
            </div>
        </div>
    </div>
</body>
<script>
    $(window).resize(function () {
        $(".cont4_center ").css("height", $(".cont4_left").css("height"));
    });
    $(function () {
        $(".cont4_center ").css("height", $(".cont4_left").css("height"));
        $(".to_top").click(function () {
            $('html,body').animate({scrollTop: 0}, 500);
        });
        $(".right_box ul li").hover(function () {
            $(this).addClass("active");
        }, function () {
            $(this).removeClass("active");
        });
        $(".right_box ul li.er").hover(function () {
            $(".erweima").stop().fadeIn();
        }, function () {
            $(".erweima").stop().fadeOut();
        });
        $(".header ul li").find(".span2").hide();
        $(".header ul li.active").find(".span1").hide();
        $(".header ul li.active").find(".span2").show();
        $(".header ul li.active").find(".underLine").css("width", "100%");
        $(".header ul li").hover(function () {
            $(this).addClass("active");
            $(this).find(".span1").hide();
            $(this).find(".span2").show();
            $(this).find(".underLine").stop().animate({width: "100%"});
        }, function () {
            $(this).removeClass("active");
            $(this).find(".span1").show();
            $(this).find(".span2").hide();
            $(this).find(".underLine").stop().animate({width: "0"});
        });

    });
</script>
</html>
