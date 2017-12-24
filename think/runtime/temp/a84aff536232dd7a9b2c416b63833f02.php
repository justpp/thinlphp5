<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:99:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/index\view\cate\product.html";i:1514119852;s:100:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/index\view\public\header.html";i:1514119849;s:100:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/index\view\public\footer.html";i:1513307705;}*/ ?>
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

<div class="banner">
    <img src="__STATIC__/img/product_banner.jpg"/>
</div>
<div class="product">
    <div class="title">
        <p class="p1">P</p>
        <div class="p2">
            <p class="pp1">产品</p>
            <p class="pp2">RODUCT</p>
        </div>
    </div>
    <div class="product_box">
        <ul>
            <?php if (is_array($arclist) || $arclist instanceof \think\Collection || $arclist instanceof \think\Paginator): $i = 0;
                $__LIST__ = $arclist;
                if (count($__LIST__) == 0) : echo ""; else: foreach ($__LIST__ as $key => $v): $mod = ($i % 2);
                    ++$i; ?>
                    <!--<a href="<?php echo url('article/index?cid=' . $v['cid'], ['id' => $v['id']]); ?>"><li>-->
                    <!--<img src="<?php echo thumb($v['thumb'], 224, 224); ?>"/>-->
                    <!--<div class="new_p">-->
                    <!--<p class="p1"><?php echo date('d', $v['addtime']); ?><span>/<?php echo date('m', $v['addtime']); ?></span></p>-->
                    <!--<p class="p2"><?php echo $v['title']; ?></p>-->
                    <!--<p class="p3"><?php echo $v['description']; ?></p>-->
                    <!--</div>-->
                    <!--</li></a>-->

                    <a href="<?php echo url('article/index?cid=' . $v['cid'], ['id' => $v['id']]); ?>">
                        <li>
                            <div class="pb_box">
                                <p class="p_img"><img src="<?php echo thumb($v['thumb'], 224, 224); ?>"/></p>
                                <div class="p_info">
                                    <p class="p1"><?php echo $v['title']; ?></p>
                                    <p class="p2"><?php echo $v['description']; ?><img
                                                src="__STATIC__/img/product_addIcon.png"/></p>
                                </div>
                            </div>

                        </li>
                    </a>
                <?php endforeach; endif; else: echo "";endif; ?>

        </ul>

    </div>

    <?php echo $pages; ?>
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
        $(".product_box ul li").find(".pb_box").hover(function () {
            $(this).stop().animate({width: '300px', height: '500px'});
            $(this).addClass("active");
        }, function () {
            $(this).stop().animate({width: '270px', height: '450px'});
            $(this).removeClass("active");
        });
        $(".paging a").hover(function () {
            $(this).addClass("active");
        }, function () {
            $(this).removeClass("active");
        });

    });
</script>
</html>
