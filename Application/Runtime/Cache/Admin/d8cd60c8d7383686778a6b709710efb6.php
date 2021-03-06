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
                <a href="<?php echo U('Admin/Index/jitang','','');?>">鸡汤管理首页</a>
            </li>
            <!--<li>-->
                <!--<a href="<?php echo ($U['news_list']); ?>">新闻列表</a>-->
            <!--</li>-->
            <li>
                <a href="<?php echo U('Admin/Index/add_jitang','','');?>">发布鸡汤</a>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>鸡汤列表 <small>鸡汤管理总览</small></h1>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover tablesorter">
                <thead>
                <tr>
                    <th>鸡汤标题  </th>
                    <th>显示状态  </th>
                    <th>添加时间  </th>
                    <th>操作 </th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p_d): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($p_d['soft_text_title']); ?></td>
                        <?php if($p_d['is_show'] == 1): ?><td style="background-color: #b16549">展示中</td>
                            <?php else: ?>
                            <td>不显示</td><?php endif; ?>
                        <td><?php echo (Date("Y-m-d H:i:s",$p_d['soft_text_time'])); ?></td>
                        <td>
                            <a href="<?php echo U('Admin/Index/jitang_detail','','');?>/id/<?php echo ($p_d['soft_text_id']); ?>" this-id="<?php echo ($p_d['soft_text_id']); ?>" class="btn btn-primary">查看详情</a>
                            <button this-id="<?php echo ($p_d['soft_text_id']); ?>" onclick="ask_delete(this)" class="btn btn-danger">删除</button>
                            <a href="<?php echo U('Admin/Index/edit_jitang','','');?>/id/<?php echo ($p_d['soft_text_id']); ?>" class="btn btn-success">编辑</a>
                            <?php if($p_d['is_show'] == 1): ?><a href="<?php echo U('Admin/Public/xiajia','','');?>/table/tb_soft_text/pk/soft_text_id/id/<?php echo ($p_d['soft_text_id']); ?>" class="btn btn-danger">隐藏</a>
                        <?php else: ?>
                                <a href="<?php echo U('Admin/Public/shangjia','','');?>/table/tb_soft_text/pk/soft_text_id/id/<?php echo ($p_d['soft_text_id']); ?>" class="btn btn-default">展示</a><?php endif; ?>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><!-- /.row -->
<script language="JavaScript">
    function ask_delete(e){
        if(confirm("是否要删除该条鸡汤？")){
            window.location.href="<?php echo U('Admin/Public/del','','');?>/table/tb_soft_text/pk/soft_text_id/id/"+$(e).attr("this-id");
        }
    }
</script>
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