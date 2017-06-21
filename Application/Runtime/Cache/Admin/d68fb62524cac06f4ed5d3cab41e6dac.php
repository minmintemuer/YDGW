<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>优大系统后台</title>

    <!-- Bootstrap core CSS -->
    <link href="/company/YDGW/Public/Home/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/company/YDGW/Public/Home/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/company/YDGW/Public/Home/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="/company/YDGW/Public/Home/css/morris-0.4.3.min.css">
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
            <a class="navbar-brand" href="index.html">优大新渝 后台管理</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li><a href="index.html"><i class="fa fa-home"></i> 后台主页</a></li>
                <li><a href="<?php echo U('Admin/Index/user_','','html');?>"><i class="fa fa-dashboard"></i> 添加管理员</a></li>
                <li><a href="<?php echo U('Admin/Index/news_','','html');?>"><i class="fa fa-bar-chart-o"></i> 新闻管理</a></li>
                <li><a href="<?php echo U('Admin/Index/comment_','','html');?>"><i class="fa fa-table"></i> 简介管理</a></li>
                <li><a href="<?php echo U('Admin/Index/zhuanti','','html');?>"><i class="fa fa-edit"></i> 活动管理</a></li>
                <li><a href="<?php echo U('Admin/Index/menu','','html');?>"><i class="fa fa-font"></i> 课程管理</a></li>
                <li><a href="<?php echo U('Admin/Index/area_','','html');?>"><i class="fa fa-desktop"></i> 教师风采管理</a></li>
                <li><a href="<?php echo U('Admin/Index/jitang','','html');?>"><i class="fa fa-wrench"></i> 鸡汤管理</a></li>
                <li><a href="<?php echo U('Admin/Index/kefu_','','html');?>"><i class="fa fa-file"></i> 客服管理</a></li>
                <li><a href="<?php echo U('Admin/Index/order_','','html');?>"><i class="fa fa-file"></i> 预订人员管理</a></li>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ($admin_data['admin_name']); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>-->
                        <!--<li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>-->
                        <li><a href="#"><i class="fa fa-gear"></i> 更改密码</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-power-off"></i> 登出</a></li>
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
                <a href="<?php echo ($U['Index_Index']); ?>">首页</a>
            </li>
            <li>
                <a href="<?php echo U('Admin/Index/zhuanti','','');?>">活动管理首页</a>
            </li>
            <li>
                <a href="<?php echo U('Admin/Index/add_zhuanti');?>">添加活动</a>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>专题列表 <small>专题管理总览</small></h1>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
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
                    <td>专题名</td>
                    <td><?php echo ($data[0]['activety_name']); ?></td>
                </tr>
                <tr>
                    <td>面向人群</td>
                    <td><?php echo ($data[0]['activety_crowd']); ?></td>
                </tr>
                <tr>
                    <td>开始时间</td>
                    <td><?php echo (date("Y-m-d",$data[0]['activety_start_time'])); ?></td>
                </tr>
                <tr>
                    <td>结束时间</td>
                    <td><?php echo (date("Y-m-d",$data[0]['activety_end_time'])); ?></td>
                </tr>
                <tr>
                    <td>发布人</td>
                    <td><?php echo ($data[0]['activety_admin']); ?></td>
                </tr>
                <tr>
                    <td>展示状态</td>
                    <?php if($data[0]['is_show'] == 1): ?><td style="background-color: #b16549">展示中</td>
                        <?php else: ?>
                        <td>不显示</td><?php endif; ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <h1>专题详情 <small>以下是专题详情</small></h1>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <?php echo ($data[0]['activety_content']); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <a href="<?php echo U('Admin/Index/edit_zhuanti','','');?>/id/<?php echo ($data[0]['activety_id']); ?>" class="btn btn-default">修改</a>
        <button this-id="<?php echo ($data[0]['activety_id']); ?>" onclick="ask_delete(this)" class="btn btn-danger">删除</button>
        <?php if($data[0]['is_show'] == 1): ?><a href="<?php echo U('Admin/Public/xiajia','','');?>/table/tb_activety/pk/activety_id/id/<?php echo ($data[0]['activety_id']); ?>" class="btn btn-danger">隐藏</a>
            <?php else: ?>
            <a href="<?php echo U('Admin/Public/shangjia','','');?>/table/tb_activety/pk/activety_id/id/<?php echo ($data[0]['activety_id']); ?>" class="btn btn-default">展示</a><?php endif; ?>
    </div>
</div>
<script language="JavaScript">
    function ask_delete(e){
        if(confirm("是否要删除该条专题？")){
           window.location.href="<?php echo U('Admin/Public/del','','');?>/table/tb_activety/pk/activety_id/id/"+$(e).attr("this-id");
        }
    }
</script>

</div>


</div><!-- /#wrapper -->

<!-- JavaScript -->
<script src="/company/YDGW/Public/Home/js/jquery-1.10.2.js"></script>
<script src="/company/YDGW/Public/Home/js/bootstrap.js"></script>

<!-- Page Specific Plugins -->
<script src="/company/YDGW/Public/Home/js/raphael-min.js"></script>
<script src="/company/YDGW/Public/Home/js/morris-0.4.3.min.js"></script>
<script src="/company/YDGW/Public/Home/js/morris/chart-data-morris.js"></script>
<script src="/company/YDGW/Public/Home/js/tablesorter/jquery.tablesorter.js"></script>
<script src="/company/YDGW/Public/Home/js/tablesorter/tables.js"></script>

</body>
</html>