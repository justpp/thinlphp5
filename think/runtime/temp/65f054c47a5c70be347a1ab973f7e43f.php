<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:100:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/admin\view\article\index.html";i:1514119852;s:93:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/admin\view\layout.html";i:1514119849;s:100:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/admin\view\public\header.html";i:1514119852;s:98:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/admin\view\public\left.html";i:1514119853;s:100:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/admin\view\public\footer.html";i:1514126568;}*/ ?>
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
        <table id="sample-table-1" class="table table-striped table-bordered table-hover">
            <thead>
            <button class="btn">
                <a href="<?php echo url('add'); ?>"><i class=" fa fa-pencil align-top bigger-125"></i>
                    添加记录</a>
            </button>
            <form action="<?php echo url('del'); ?>" method="post">
                <tr>
                    <th class="center">
                        <label class="position-relative">
                            <input type="checkbox" class="checkAll ">
                            <span class="lbl"></span>
                        </label>
                    </th>
                    <th>分类名称</th>
                    <th>英文名称</th>
                    <th>排序</th>
                    <th>

                        状态
                    </th>

                    <th class="hidden-480">操作</th>
                </tr>
            </thead>
            <?php echo $cateTr; ?>
        </table>
        <script src="__STATIC__/js/jquery-2.2.0.min.js"></script>
        <script src="__STATIC__/layer/layer.js"></script>
        <script>
            $('.dels').click(function (e) {
                e.preventDefault();
                var url = $(this).attr('href');
                layer.confirm('您确定删除？', {
                    btn: ['是', '否'] //按钮
                }, function () {
                    window.location = url;
                })
            });
            $('.checkAll').click(function () {
                var isCheck = $(this).prop('checked');
                $('input[type=checkbox]').prop('checked', isCheck);
            });
            $('input[name=sort]').change(function () {

                var $sort = $(this).val();

                var $id = $(this).attr('data-id');

                if (!/^\d+$/.test($sort)) {
                    layer.msg('排序必须是数字');
                    return;
                }
                $.getJSON('<?php echo url("sort"); ?>', {id: $id, sort: $sort, rand: Math.random()}, function (rs) {
                    layer.msg(rs.msg);
                });
            });
            $('.c2').click(function () {
                $id = $(this).attr('data-id');
                $cid = $(this).attr('data-c') == 1 ? 0 : 1;
                $ok = $(this);
                $.getJSON('<?php echo url("status"); ?>', {id: $id, status: $cid, rand: Math.random()}, function (re) {

                    layer.msg(re.msg);
                });
            });
            $('.btn-show').click(function () {
                var status = $(this).attr('data-status');
                var id = $(this).attr('data-id');
                var obj = $(this);
                $.getJSON('<?php echo url("status"); ?>', {id: id, status: status, rand: Math.random()}, function (rs) {
                    if (rs.state) {
                        //更改前端样式
                        if (status == 1) {
                            obj.attr('data-status', 0).removeClass('btn-success').addClass('btn-default').html('<i class="fa fa-eye-slash"></i> 隐藏');
                        } else {
                            obj.attr('data-status', 1).removeClass('btn-default').addClass('btn-success').html('<i class="fa fa-eye"></i> 显示');
                        }
                    } else {
                        layer.msg(rs.msg);
                    }
                });

            });
        </script>
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
<script src="__STATIC__/assets/js/ace.min.js"></script>
<script src="__STATIC__/assets/js/ace-elements.min.js"></script>


</body>
</html>
