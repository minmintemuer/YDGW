<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>系统后台</title>

    <!-- Bootstrap core CSS -->
    <link href="/YD/Public/Home/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/YD/Public/Home/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/YD/Public/Home/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="/YD/Public/Home/css/morris-0.4.3.min.css">

</head>

<body>
<div class="section">
    <div class="container">
        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <form method="post" action="<?php echo U('Admin/Public/login_action','','');?>">
                <div class="col-xs-12 text-center">
                    <h3>后台登录</h3>
                </div>
                <div class="form-group">
                    <input type="radio" class="" name="login_yd_admin_id" value="SA" checked>管理员
                    <input type="radio" class="" name="login_yd_admin_id"  value="CS">客服
                </div>
                <div class="form-group">
                    <label>账户</label>
                    <input type="text" class="form-control" name="login_yd_admin_user" value="<?php echo ($user); ?>">
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="password" class="form-control" name="login_yd_admin_password" value="<?php echo ($pwd); ?>">
                </div>
                <div class="form-group">
                    <label>用户名密码默认保存3天</label>
                </div>
                <button type="submit" class="btn btn-default ">登录</button>
                <a  class="btn btn-default" href="<?php echo U('Admin/Public/rg'.''.'');?>">注册客服账号</a>
            </form>
        </div>
    </div>
</div>
<!-- JavaScript -->
<script src="/YD/Public/Home/js/jquery-1.10.2.js"></script>
<script src="/YD/Public/Home/js/bootstrap.js"></script>

<!-- Page Specific Plugins -->    <script src="/YD/Public/Home/js/raphael-min.js"></script>
<script src="/YD/Public/Home/js/morris-0.4.3.min.js"></script>
<script src="/YD/Public/Home/js/morris/chart-data-morris.js"></script>
<script src="/YD/Public/Home/js/tablesorter/jquery.tablesorter.js"></script>
<script src="/YD/Public/Home/js/tablesorter/tables.js"></script>
</body>
</html>