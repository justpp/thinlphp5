<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpStudy\WWW\PHP\1206\think\public/../application/index\view\cate\contact.html";i:1513562760;s:82:"D:\phpStudy\WWW\PHP\1206\think\public/../application/index\view\public\header.html";i:1513931899;s:82:"D:\phpStudy\WWW\PHP\1206\think\public/../application/index\view\public\footer.html";i:1513307705;}*/ ?>
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
            if (count($__LIST__) == 0) : echo "";
            else: foreach ($__LIST__ as $key => $v): $mod = ($i % 2);
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
<div class="banner">
    <img src="__STATIC__/img/contact_banner.jpg"/>
</div>
<div class="cont1">
    <div class="title">
        <p class="p1">C</p>
        <div class="p2">
            <p class="pp1">联系</p>
            <p class="pp2">ONCTACT</p>
        </div>
    </div>
    <ul class="contact_box1">
        <li>
            <img src="__STATIC__/img/contact_icon1.png"/>
            <p class="p1">公司地址</p>
            <p class="p2">成都市武侯区<br/>邮编 : 12344</p>
        </li>
        <li>
            <img src="__STATIC__/img/contact_icon2.png"/>
            <p class="p1">联系方式</p>
            <p class="p2">联系电话 : 34124s<br/>传真 : 32534534</p>
        </li>
        <li>
            <img src="__STATIC__/img/contact_icon3.png"/>
            <p class="p1">公司邮箱</p>
            <p class="p2">aaaaa@126.com</p>
        </li>
        <li>
            <img src="__STATIC__/img/contact_icon4.png"/>
            <p class="p1">联系QQ</p>
            <p class="p2">客服土豆 : 23412383<br/>客服地瓜 : 45343433</p>
        </li>
    </ul>
    <div class="title">
        <p class="p1">M</p>
        <div class="p2">
            <p class="pp1">留言</p>
            <p class="pp2">ESSAGE</p>
        </div>
    </div>
    <div class="contact_box2">
        <div class="cb2_left">
            <form action="" method="post">
                <p class="list">
                    <span>姓名</span>
                    <input type="text" name="" id="" value="" placeholder="(请输入您的姓名,此为必填项)"/>
                </p>
                <p class="list">
                    <span>电话</span>
                    <input type="tel" name="" id="" value="" placeholder="(请输入您的电话,此为必填项)"/>
                </p>
                <p class="list">
                    <span>邮箱</span>
                    <input type="email" name="" id="" value=""/>
                </p>
                <div class="list2">
                    <span class="span1">邮箱</span>
                    <textarea name="" rows="" cols=""></textarea>
                    <span class="span2">*最多输入200字</span>
                </div>
                <p class="btn">发送</p>
            </form>
        </div>
        <div class="cb2_right">
            <div style="width: 100%;height: 279px;" id="dituContent"></div>
        </div>
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
<script type="text/javascript">
    function initMap() {
        createMap();
        setMapEvent();
        addMapControl();
    }

    function createMap() {
        var map = new BMap.Map("dituContent");
        var point = new BMap.Point(104.043877, 30.630995);
        map.centerAndZoom(point, 25);
        window.map = map;
        var marker = new BMap.Marker(new BMap.Point(104.043877, 30.630995));
        map.addOverlay(marker);
    }

    function setMapEvent() {
        map.enableDragging();
        map.enableScrollWheelZoom();
        map.enableDoubleClickZoom();
        map.enableKeyboard();
    }

    function addMapControl() {
        var ctrl_nav = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_LEFT, type: BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
        var ctrl_ove = new BMap.OverviewMapControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: 1});
        map.addControl(ctrl_ove);
        var ctrl_sca = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }

    initMap();
</script>
<script>
    $(function () {
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
