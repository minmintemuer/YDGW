<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台管理系统 V1.0</title>
    <!-- Bootstrap core CSS -->
    <link href="/company/YD/Public/Home/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/company/YD/Public/Home/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/company/YD/Public/Home/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="/company/YD/Public/Home/css/morris-0.4.3.min.css">
</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">优大新渝 后台管理系统 V1.0</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li><a href="index.html"><i class="fa fa-home"></i> 后台主页</a></li>
                <?php if(($id == 'SA') OR ($id == 'PA')): ?><li><a href="<?php echo U('Admin/Index/index_img','','html');?>"><i class="fa fa-dashboard"></i> 首页大图管理</a></li>
                    <li><a href="<?php echo U('Admin/Index/user_','','html');?>"><i class="fa fa-user "></i> 添加管理员</a></li>
                    <li><a href="<?php echo U('Admin/Index/seo','','html');?>"><i class="fa fa-bar-chart-o"></i> 页面信息管理</a></li>
                    <li><a href="<?php echo U('Admin/Index/news_','','html');?>"><i class="fa fa-gavel"></i> 新闻管理</a></li>
                    <li><a href="<?php echo U('Admin/Index/comment_','','html');?>"><i class="fa fa-table"></i> 简介管理</a></li>
                    <li><a href="<?php echo U('Admin/Index/zhuanti','','html');?>"><i class="fa fa-edit"></i> 活动管理</a></li>
                    <li><a href="<?php echo U('Admin/Index/menu','','html');?>"><i class="fa fa-font"></i> 课程管理</a></li>
                    <li><a href="<?php echo U('Admin/Index/area_','','html');?>"><i class="fa fa-desktop"></i> 教师风采管理</a></li>
                    <li><a href="<?php echo U('Admin/Index/jitang','','html');?>"><i class="fa fa-wrench"></i> 案例管理</a></li>
                    <li><a href="<?php echo U('Admin/Index/kefu_','','html');?>"><i class="fa fa-tags"></i> 客服管理</a></li><?php endif; ?>
                <li><a href="<?php echo U('Admin/Index/order_','','html');?>"><i class="fa fa-group"></i> 预订人员管理</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-user">

                <!--<li class="dropdown alerts-dropdown">-->
                    <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> 提醒 <span class="badge">3</span> <b class="caret"></b></a>-->
                    <!--<ul class="dropdown-menu">-->
                        <!--<li><a href="#">Default <span class="label label-default">Default</span></a></li>-->
                        <!--<li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>-->
                        <!--<li><a href="#">Success <span class="label label-success">Success</span></a></li>-->
                        <!--<li><a href="#">Info <span class="label label-info">Info</span></a></li>-->
                        <!--<li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>-->
                        <!--<li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>-->
                        <!--<li class="divider"></li>-->
                        <!--<li><a href="#">View All</a></li>-->
                    <!--</ul>-->
                <!--</li>-->
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo ($da[0]['admin_name']); ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>-->
                        <li><a href="<?php echo U('Admin/Index/edit_user','','');?>"><i class="fa fa-gear"></i> 更改密码</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('Admin/Public/logout','','');?>"><i class="fa fa-power-off"></i> 退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">
              <div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills">
            <li>
                <a href="<?php echo U('Admin/Index/index','','html');?>">首页</a>
            </li>
            <li>
                <a href="<?php echo U('Admin/Index/seo','','html');?>">页面信息详情</a>
            </li>
            <?php if($id == 'SA'): ?><li>
                    <a href="<?php echo U('Admin/Index/edit_seo','','html');?>">修改页面信息</a>
                </li><?php endif; ?>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>页面信息详情 <small>页面信息详情</small></h1>
    </div>
</div><!-- /.row -->
<?php if(is_array($seo)): $i = 0; $__LIST__ = $seo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$seo): $mod = ($i % 2 );++$i;?><div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover tablesorter">
                    <thead>
                    <tr>
                        <th>字段 </th>
                        <th>内容  </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>网页关键字</td>
                        <td><?php echo ($seo['seo_keyword']); ?></td>
                    </tr>
                    <tr>
                        <td>网页作者</td>
                        <td><?php echo ($seo['seo_author']); ?></td>
                    </tr>
                    <tr>
                        <td>网页摘要</td>
                        <td><?php echo ($seo['seo_description']); ?></td>
                   </tr>
                    <tr>
                        <td>直播入口</td>
                        <td><?php echo ($seo['seo_live_entry']); ?></td>
                    </tr>
                    <tr>
                        <td>微信公众号二维码</td>
                        <td><img src="/company/YD/Public<?php echo ($seo['seo_wechat']); ?>" alt="" class="height_max_300"></td>
                    </tr>
                    <tr>
                        <td>在线客服qq</td>
                        <td><?php echo ($seo['seo_online_qq']); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo U('Admin/Index/edit_seo','','');?>/id/<?php echo ($seo['seo_id']); ?>" class="btn btn-default">修改</a>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div><!-- /#wrapper -->

<!-- JavaScript -->
<script src="/company/YD/Public/Home/js/jquery-1.10.2.js"></script>
<script src="/company/YD/Public/Home/js/bootstrap.js"></script>

<!-- Page Specific Plugins -->
<script src="/company/YD/Public/Home/js/raphael-min.js"></script>
<script src="/company/YD/Public/Home/js/morris-0.4.3.min.js"></script>
<script src="/company/YD/Public/Home/js/morris/chart-data-morris.js"></script>
<script src="/company/YD/Public/Home/js/tablesorter/jquery.tablesorter.js"></script>
<script src="/company/YD/Public/Home/js/tablesorter/tables.js"></script>

</body>
</html>