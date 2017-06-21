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
                <a href="<?php echo U('Admin/Index/area_','','');?>">教师管理首页</a>
            </li>
            <li>
                <a href="<?php echo U('Admin/Index/add_area','','');?>">添加教师</a>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>教师名字</label>
            <input class="form-control" id="teacher_name" value="<?php echo ($data[0]['teacher_name']); ?>">
            <p class="help-block">请输入教师名字</p>
        </div>
        <div class="form-group">
            <label>任教课程</label>
            <input class="form-control" id="teacher_class_name" value="<?php echo ($data[0]['teacher_class_name']); ?>">
            <p class="help-block">请输入课程名称</p>
        </div>
        <div class="form-group">
            <label>教师头像</label>
            <form id="image_form" action="<?php echo U('/Admin/Ajax/ajax_upload_image','','');?>" method="post" target="hidden_frame" enctype="multipart/form-data">
                <div class="form-group">
                    <!--<label for="index_company_logo">允许格式：</label>-->
                    <input id="index_company_logo" name="index_company_logo" type="file" onchange="uploadImg()" class="form-control" >
                    <div class="col-xs-12" id="error_info" style="display: none"></div>
                    <div class="col-md-3" style="display: block">
                        <img  id="image_area" src="/company/YDGW/Public<?php echo ($data[0]['teacher_img']); ?>" width="100%" height="auto" ihref="<?php echo ($data[0]['teacher_img']); ?>" >
                    </div>
                </div>
            </form> <iframe style="display:none" name='hidden_frame' id="hidden_frame"></iframe>
            <p class="help-block">请上传教师头像</p>
            <script language="JavaScript">
                function uploadImg()
                {
                    $("#image_form").submit();
                }
                function callback(message,success)
                {
                    if(success==false)
                    {
                        $("#error_info").html("<div class='bzsj_left'></div>"+message);
                        $("#error_info").show();
                        alert(message);
                    }
                    else{
                        $("#error_info").hide();
                        $("#image_area").attr("src",'/company/YDGW/Public'+message);
                        $("#image_area").attr("ihref",message);
                        $("#image_area").css("display","block");
                        $("#image_area").show();
                    }
                }
            </script>
        </div>
        <div class="col-md-12" style="display: inline-block;">
            <div class="form-group">
                <label>请写入教师特点</label>
                <script id="container" style="height:800px"  type="text/plain">
                       <?php echo ($data[0]['teacher_features']); ?>
                </script>
                <!-- 配置文件 -->
                <script type="text/javascript" src="/company/YDGW/Public/ueditor/ueditor.config.js"></script>
                <!-- 编辑器源码文件 -->
                <script type="text/javascript" src="/company/YDGW/Public/ueditor/ueditor.all.js"></script>
                <script type="text/javascript" charset="utf-8" src="/company/YDGW/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
                <!-- 实例化编辑器 -->
                <script type="text/javascript">
                    var ue = UE.getEditor('container');
                </script>
            </div>
        </div>
        <div class="col-md-12 text-right">
            <label class="hvr-sweep-to-right" style="margin: 30px">
                <button class="btn btn-primary" type="submit" value="提交" onclick="tijiao()">提交修改</button>
            </label>
        </div>
    </div>
</div>
<script language="JavaScript">
    function tijiao(){
        if(confirm("是否提交？")){
            $.ajax({
                url:"<?php echo U('/Admin/Ajax/ajax_save_teacher','','html');?>",
                dataType: 'json',
                type:'post',
                data:{
                    id:<?php echo ($data[0]['teacher_id']); ?>,
                    teacher_name:$("#teacher_name").val(),
                    teacher_class_name:$("#teacher_class_name").val(),
                    teacher_img: $("#image_area").attr("ihref"),
                    teacher_features:UE.getEditor('container').getContent()
                },
                success:function (data) {
                    if (data.success){
                        alert(data.message);
                        window.location.reload();
                    }else {
                        alert(data.message);
                    }
                }
            })
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