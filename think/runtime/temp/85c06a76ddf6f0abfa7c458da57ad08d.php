<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\phpStudy\WWW\PHP\1206\think\public/../application/index\view\cate\about.html";i:1513562804;s:82:"D:\phpStudy\WWW\PHP\1206\think\public/../application/index\view\public\header.html";i:1513931899;s:82:"D:\phpStudy\WWW\PHP\1206\think\public/../application/index\view\public\footer.html";i:1513307705;}*/ ?>
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
    <img src="__STATIC__/img/about_banner.jpg"/>
</div>
<div class="cont1">
    <div class="title">
        <p class="p1">I</p>
        <div class="p2">
            <p class="pp1">简介</p>
            <p class="pp2">NTRODUCTION</p>
        </div>
    </div>
    <div class="cont1_box">
        <div class="cont1_left about_conLeft">
            <p class="p1" id="tt_p1">成都装修公司建筑有限公司</p>
            <p class="p2">
                成都市易建建筑材料有限公司成立于2012年5月18日，注册资金25000万，年产干拌砂浆50万吨、湿拌砂浆80万吨。公司办公地址位于中海国际中心E座，公司生产地址位于成都市大邑县沙渠工业园区，拥有机械化标准厂区50余亩，是目前成都地区预拌砂浆生产企业风向标。</p>
            <p class="p2">成都市易建建筑材料公司在公司的统一规划下，以预拌砂浆的生产与销售作为重点加强的核心业务。<a class="open">>>展开</a></p>
            <p class="p2 p3">
                成都市易建建筑材料有限公司成立于2012年5月18日，注册资金25000万，年产干拌砂浆50万吨、湿拌砂浆80万吨。公司办公地址位于中海国际中心E座，公司生产地址位于成都市大邑县沙渠工业园区，拥有机械化标准厂区50余亩，是目前成都地区预拌砂浆生产企业风向标。</p>
            <p class="p2 p3">
                成都市易建建筑材料有限公司成立于2012年5月18日，注册资金25000万，年产干拌砂浆50万吨、湿拌砂浆80万吨。公司办公地址位于中海国际中心E座，公司生产地址位于成都市大邑县沙渠工业园区，拥有机械化标准厂区50余亩，是目前成都地区预拌砂浆生产企业风向标。</p>
            <p class="p2 p3">
                成都市易建建筑材料有限公司成立于2012年5月18日，注册资金25000万，年产干拌砂浆50万吨、湿拌砂浆80万吨。公司办公地址位于中海国际中心E座，公司生产地址位于成都市大邑县沙渠工业园区，拥有机械化标准厂区50余亩，是目前成都地区预拌砂浆生产企业风向标。</p>
            <a href="#tt_p1"><p class="p2 stop" style="color: #40be5d;">收起>></p></a>
        </div>
        <div class="cont1_right">
            <img src="__STATIC__/img/about_pic1.jpg"/>
        </div>
    </div>
</div>
<div class="ab_cont2">
    <div class="title">
        <p class="p1">S</p>
        <div class="p2">
            <p class="pp1" style="color: #fff;">服务</p>
            <p class="pp2" style="color: #fff;">ERVICE</p>
        </div>
    </div>
    <ul>
        <li>
            <div class="ab_top"><img src="__STATIC__/img/about_png1.png"/></div>
            <div class="ab_bottm">
                <p class="p1">NO.1</p>
                <p class="p2"><span>Pre-sale</span>售前</p>
                <p class="p3">根据工程特点及要求定制满足施工要求的通用和专用砂浆产品,并制定供应及服务方案,必要时制作标准样板间</p>
            </div>
        </li>
        <li>
            <div class="ab_top"><img src="__STATIC__/img/about_png2.png"/></div>
            <div class="ab_bottm">
                <p class="p1">NO.2</p>
                <p class="p2"><span>Sale</span>售中</p>
                <p class="p3">根据工程特点及要求定制满足施工要求的通用和专用砂浆产品,并制定供应及服务方案,必要时制作标准样板间</p>
            </div>
        </li>
        <li>
            <div class="ab_top"><img src="__STATIC__/img/about_png3.png"/></div>
            <div class="ab_bottm">
                <p class="p1">NO.3</p>
                <p class="p2"><span>Customer service</span>售后</p>
                <p class="p3">根据工程特点及要求定制满足施工要求的通用和专用砂浆产品,并制定供应及服务方案,必要时制作标准样板间</p>
            </div>
        </li>
    </ul>
</div>
<div class="cont5">
    <div class="title">
        <p class="p1">C</p>
        <div class="p2">
            <p class="pp1">资信</p>
            <p class="pp2">REDIT</p>
        </div>
    </div>
    <div class="ab_cont5">
        <table border="0" cellpadding="0" cellspacing="0 ">
            <tr>
                <td><img src="__STATIC__/img/about_pic3.jpg"/></td>
                <td>
                    <p class="p1">营业执照</p>
                    <p class="p2">名称:成都装修公司建筑材料有限公司</p>
                    <p class="p2">成立日期:2017年5月31日</p>
                </td>
                <td><img src="__STATIC__/img/about_pic4.jpg"/></td>
                <td>
                    <p class="p1">检验检测报告</p>
                    <p class="p2">产品名称:家装地面砂浆</p>
                    <p class="p2">检测单位:成都产品质量检验研究院有限责任公司</p>
                </td>
                <td><img src="__STATIC__/img/about_pic5.jpg"/></td>
                <td>
                    <p class="p1">营业执照</p>
                    <p class="p2">名称:成都装修公司建筑材料有限公司</p>
                    <p class="p2">成立日期:2017年5月31日</p>
                </td>
                <td><img src="__STATIC__/img/about_pic6.jpg"/></td>
                <td>
                    <p class="p1">检验检测报告</p>
                    <p class="p2">产品名称:家装地面砂浆</p>
                    <p class="p2">检测单位:成都产品质量检验研究院有限责任公司</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="p1">营业执照</p>
                    <p class="p2">名称:成都装修公司建筑材料有限公司</p>
                    <p class="p2">成立日期:2017年5月31日</p>
                </td>
                <td><img src="__STATIC__/img/about_pic6.jpg"/></td>
                <td>
                    <p class="p1">检验检测报告</p>
                    <p class="p2">产品名称:家装地面砂浆</p>
                    <p class="p2">检测单位:成都产品质量检验研究院有限责任公司</p>
                </td>
                <td><img src="__STATIC__/img/about_pic5.jpg"/></td>
                <td>
                    <p class="p1">营业执照</p>
                    <p class="p2">名称:成都装修公司建筑材料有限公司</p>
                    <p class="p2">成立日期:2017年5月31日</p>
                </td>
                <td><img src="__STATIC__/img/about_pic4.jpg"/></td>
                <td>
                    <p class="p1">检验检测报告</p>
                    <p class="p2">产品名称:家装地面砂浆</p>
                    <p class="p2">检测单位:成都产品质量检验研究院有限责任公司</p>
                </td>
                <td><img src="__STATIC__/img/about_pic3.jpg"/></td>
            </tr>
        </table>
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
        $(".open").click(function () {
            $(this).hide();
            $(".stop").show();
            $(".about_conLeft").css("overflow-y", "scroll");
        });
        $(".stop").click(function () {
            $(this).hide();
            $(".open").show();
            $(".about_conLeft").css("overflow-y", "hidden");
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

        $(".ab_cont2 ul li").hover(function () {
            $(this).find(".ab_bottm .p3").stop().fadeIn();
            $(this).find(".ab_top").stop().animate({marginTop: "-100px"});
        }, function () {
            $(this).find(".ab_bottm .p3").stop().fadeOut();
            $(this).find(".ab_top").stop().animate({marginTop: "0px"});
        });
    });
</script>
</html>
