<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:100:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/admin\view\article\modfi.html";i:1514119849;s:93:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/admin\view\layout.html";i:1514119849;s:100:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/admin\view\public\header.html";i:1514119852;s:98:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/admin\view\public\left.html";i:1514119853;s:100:"D:\phpstudy\PHPTutorial\WWW\1206\thinlphp5\think\public/../application/admin\view\public\footer.html";i:1514126568;}*/ ?>
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
        <style type="text/css">
            #J_imageView .item {
                float: left;
                width: 100px;
                margin: 10px;
                position: relative
            }

            #J_imageView .item:first-child {
                margin-left: 0;
            }

            #J_imageView .item .fa {
                position: absolute;
                right: -5px;
                top: -5px;
                background: rgba(0, 0, 0, 0.7);
                width: 20px;
                height: 20px;
                line-height: 20px;
                color: #fff;
                border-radius: 100%;
                text-align: center;
                cursor: pointer;
            }
        </style>
        <div class="col-xs-12">
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                <!-- #section:elements.form -->
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right">分类名称：</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="输入分类名称" class="col-xs-10 col-sm-5" name="cname"
                               value="<?php echo $info['cname']; ?>">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right">英文名称：</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="输入英文名称" class="col-xs-10 col-sm-5" name="enname"
                               value="<?php echo $info['enname']; ?>">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right">上级分类：</label>
                    <div class="col-sm-9">
                        <select name="pid" class="col-xs-10 col-sm-5">
                            <option value="0">顶级分类</option>
                            <?php echo $cateOpt; ?>
                        </select>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right">页面类型：</label>
                    <div class="col-sm-9">
                        <div class="radio">
                            <label>
                                <input type="radio" name="type"
                                       value="1" <?php echo $info['type'] == 1 ? 'checked' : null; ?> class="ace">
                                <span class="lbl">列表</span>
                            </label>
                            <label>
                                <input type="radio" name="type"
                                       value="2" <?php echo $info['type'] == 2 ? 'checked' : null; ?> class="ace">
                                <span class="lbl">单页</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right">缩略图：</label>
                    <div class="col-sm-9">
                        <div class="thumb" style="width:160px;margin-bottom:10px;background:#f1f1f1">
                            <!--<img src="" width="160" onerror="this.src='__STATIC__/img/101.jpg'">-->
                        </div>
                        <input type="hidden" placeholder="上传图片" class="col-xs-10 col-sm-5" name="thumb"
                               value="<?php echo $info['thumb']; ?>">
                        <button class="btn btn-info btn-sm" id="btn-thumb">上传图片</button>
                        <button class="btn btn-sm" id="btn-delthumb">删除图片</button>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right">分类描述 ：</label>
                    <div class="col-sm-9">
                        <div class="pos-rel">
                            <textarea class="form-control"
                                      name="description"><?php echo $info['description']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right">分类内容 ：</label>
                    <div class="col-sm-9">
                        <div class="pos-rel">
                    <textarea class="form-control" style="height:300px" name="content"
                              id="editor"><?php echo $info['content']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            立即提交
                        </button>
                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            重置
                        </button>
                    </div>
                </div>
            </form>
            <script charset="utf-8" src="__STATIC__/assets/editor/kindeditor-all.js"></script>
            <script src="__STATIC__/js/jquery-2.2.0.min.js"></script>
            <script charset="utf-8" src="__STATIC__/assets//editor/lang/zh-CN.js"></script>
            <script>
                //产品介绍
                KindEditor.ready(function (K) {
                    window.editor = K.create('#editor', {
                        uploadJson: '<?php echo url("common/upload"); ?>',//自定义上传路径
                        allowFileManager: true,
                        fileManagerJson: '<?php echo url("common/filemanager"); ?>'//自定义文件管理程序路径
                    });
                });
                //单图片上传
                KindEditor.ready(function (K) {
                    var editor = K.editor({
                        uploadJson: '<?php echo url("common/upload"); ?>',//自定义处理上传程序路径
                        allowFileManager: true,
                        fileManagerJson: '<?php echo url("common/filemanager"); ?>'//自定义文件管理程序路径
                    });
                    K('#btn-thumb').click(function (e) {
                        e.preventDefault();
                        editor.loadPlugin('image', function () {
                            editor.plugin.imageDialog({
                                imageUrl: K('input[name=thumb]').val(),
                                //上传成功回调函数
                                clickFn: function (url, title, width, height, border, align) {
                                    K('input[name=thumb]').val(url);
                                    K('.thumb img').attr('src', url);
                                    editor.hideDialog();
                                }
                            });
                        });
                    });
                });
                //删除上传图片
                $('#btn-delthumb').click(function (e) {
                    e.preventDefault();
                    $('input[name=thumb]').val('');
                    $('.thumb img').attr('src', '');
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
