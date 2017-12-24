<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:80:"D:\phpStudy\WWW\PHP\1206\think\public/../application/admin\view\index\index.html";i:1512617401;s:75:"D:\phpStudy\WWW\PHP\1206\think\public/../application/admin\view\layout.html";i:1512638527;s:82:"D:\phpStudy\WWW\PHP\1206\think\public/../application/admin\view\public\header.html";i:1512717201;s:80:"D:\phpStudy\WWW\PHP\1206\think\public/../application/admin\view\public\left.html";i:1513647025;s:82:"D:\phpStudy\WWW\PHP\1206\think\public/../application/admin\view\public\footer.html";i:1512609878;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>首页</title>

    <meta name="description" content="This is page-header (.page-header &gt; h1)"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <link rel="stylesheet" href="__STATIC__/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="__STATIC__/assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="__STATIC__/assets/css/ace.min.css" id="main-ace-style"/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="__STATIC__/assets/css/ace-part2.min.css"/>
    <![endif]-->
    <link rel="stylesheet" href="__STATIC__/assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="__STATIC__/assets/css/ace-rtl.min.css"/>
    <!--[if lte IE 9]>

    <link rel="stylesheet" href="__STATIC__/assets/css/ace-ie.min.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <script src="__STATIC__/assets/js/html5shiv.min.js"></script>
    <script src="__STATIC__/assets/js/respond.min.js"></script>
    <script src="__STATIC__/layer/layer.js"></script>


    <![endif]-->
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default">
    <div class="navbar-container" id="navbar-container">

        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <!-- /section:basics/sidebar.mobile.toggle -->
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="index.html" class="navbar-brand">
                <small>
                    <img src="__STATIC__/assets/avatars/logo.png" alt=""/>
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">


                <!-- #section:basics/navbar.user_menu -->
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="__STATIC__/assets/avatars/user.jpg" alt="Jason's Photo"/>
                        <span class="user-info">
									欢迎您<br/>
                            <?php echo session('userName'); ?>
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                系统设置
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo url('admin/index'); ?>">
                                <i class="ace-icon fa fa-user"></i>
                                个人信息设置
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="<?php echo url('login/logout'); ?>">
                                <i class="ace-icon fa fa-power-off"></i>
                                登出
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- /section:basics/navbar.user_menu -->
            </ul>
        </div>

        <!-- /section:basics/navbar.dropdown -->
    </div><!-- /.navbar-container -->
</div>

<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">

    <!-- #section:basics/sidebar -->
    <div id="sidebar" class="sidebar responsive">


        <ul class="nav nav-list">
            <li class="active">
                <a href="<?php echo url('index/index'); ?>">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> 总控制台 </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="<?php echo url('admin/index'); ?>">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> 个人信息 </span>
                </a>

                <b class="arrow"></b>
            </li>


            <li class="hsub">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> 文章管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu nav-hide" style="display: none;">
                    <li class="">
                        <a href="<?php echo url('Article/index'); ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            文章分类
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="hsub">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> 模板管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu nav-hide" style="display: none;">
                    <li class="">
                        <a href="<?php echo url('Modell/index'); ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            模板分类
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
            </li>


        </ul><!-- /.nav-list -->

        <!-- #section:basics/sidebar.layout.minimize -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
               data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

    </div>

    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <!-- #section:basics/content.breadcrumbs -->
        <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="index.html">首页</a>
                </li>
            </ul><!-- /.breadcrumb -->

            <!-- #section:basics/content.searchbox -->
            <div class="nav-search" id="nav-search">
                <form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="请输入关键字 ..." class="nav-search-input"
                                       id="nav-search-input" autocomplete="off"/>
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
                </form>
            </div><!-- /.nav-search -->

            <!-- /section:basics/content.searchbox -->
        </div>
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="alert alert-block alert-info">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>

                <i class="ace-icon fa fa-check green"></i>

                <strong class="green">最新公告：</strong>
                南航开通华中首条直达美国航线，广州-武汉-旧金山首航，为中部崛起注入创新活力
            </div>
            <div class="row center">
                <img src="assets/avatars/logo_2.png"/>
            </div><!-- /.row -->

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
        <!-- /section:settings.box -->
        <div class="page-content-area">

            <div class="row">
                <div class="col-xs-12">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content-area -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->

<div class="footer">
    <div class="footer-inner">
        <!-- #section:basics/footer -->
        <div class="footer-content">
						<span class="bigger-120">
							 统一开发平台-UI库 &copy; 2014
						</span>
        </div>

        <!-- /section:basics/footer -->
    </div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='__STATIC__/assets/js/jquery.min.js'>" + "<" + "/script>");
</script>
<!-- <![endif]-->
<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='__STATIC__/assets/js/jquery1x.min.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='__STATIC__/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="__STATIC__/assets/js/bootstrap.min.js"></script>
<!--[if lte IE 8]>
<script src="__STATIC__/assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="__STATIC__/assets/js/jquery-ui.custom.min.js"></script>
<script src="__STATIC__/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="__STATIC__/assets/js/ace-elements.min.js"></script>
<script src="__STATIC__/assets/js/ace.min.js"></script>

</body>
</html>
