<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpStudy\WWW\PHP\1206\think\public/../application/index\view\cate\project.html";i:1513562681;s:82:"D:\phpStudy\WWW\PHP\1206\think\public/../application/index\view\public\header.html";i:1513931899;s:82:"D:\phpStudy\WWW\PHP\1206\think\public/../application/index\view\public\footer.html";i:1513307705;}*/ ?>
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
    <img src="__STATIC__/img/project_banner.jpg"/>
</div>
<div class="product" style="background: #fff;">
    <div class="title">
        <p class="p1">C</p>
        <div class="p2">
            <p class="pp1">案例</p>
            <p class="pp2">ASE</p>
        </div>
    </div>
    <div class="project_box">
        <ul>
            <li>
                <img src="__STATIC__/img/project_pic1.jpg"/>
                <p class="p1">乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p2">乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p3">
                    <span class="span1">+</span>
                    <span class="span2">了解更多</span>
                </p>
            </li>
            <li class="active">
                <img src="__STATIC__/img/project_pic2.jpg"/>
                <p class="p1">乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p2">乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p3">
                    <span class="span1">+</span>
                    <span class="span2">了解更多</span>
                </p>
            </li>
            <li>
                <img src="__STATIC__/img/project_pic3.jpg"/>
                <p class="p1">乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p2">乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p3">
                    <span class="span1">+</span>
                    <span class="span2">了解更多</span>
                </p>
            </li>
            <li>
                <img src="__STATIC__/img/project_pic4.jpg"/>
                <p class="p1">乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p2">乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p3">
                    <span class="span1">+</span>
                    <span class="span2">了解更多</span>
                </p>
            </li>
            <li>
                <img src="__STATIC__/img/project_pic5.jpg"/>
                <p class="p1">乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p2">乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p3">
                    <span class="span1">+</span>
                    <span class="span2">了解更多</span>
                </p>
            </li>
            <li>
                <img src="__STATIC__/img/project_pic6.jpg"/>
                <p class="p1">乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p2">乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建乐天圣苑项目-华西集团十二分公司承建</p>
                <p class="p3">
                    <span class="span1">+</span>
                    <span class="span2">了解更多</span>
                </p>
            </li>
        </ul>
        <div class="paging">
            <p><img src="__STATIC__/img/arrow2_left.png"/></p>
            <a>1</a>
            <a class="active">2</a>
            <a>3</a>
            <a>4</a>
            <a>5</a>
            <a>6</a>
            <p style="margin-left: 35px;"><img src="__STATIC__/img/arrow2_right.png"/></p>
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
<script>
    $(function () {
        $(".project_box ul li").hover(function () {
            $(this).addClass("active");
        }, function () {
            $(this).removeClass("active");
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
        $(".paging a").hover(function () {
            $(this).addClass("active");
        }, function () {
            $(this).removeClass("active");
        });
    });
</script>
</html>
