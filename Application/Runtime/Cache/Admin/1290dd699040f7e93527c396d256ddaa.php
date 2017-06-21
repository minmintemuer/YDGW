<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>优大系统后台</title>

    <!-- Bootstrap core CSS -->
    <link href="/YD/Public/Home/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/YD/Public/Home/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/YD/Public/Home/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="/YD/Public/Home/css/morris-0.4.3.min.css">
</head>

<body>
<div id="rg">
    <div class="section">
     <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>注册客服账号 <small>注册客服账号</small></h1>
        </div>
    </div><!-- /.row -->
    <form action="/YD/Admin/Public/rg.html" method="post">
    <div class="row">
        <div class="col-xs-12">

                <div class="form-group">
                <label>客服帐户</label>
                <input class="form-control" id="customer_service_user">
                <p class="help-block">请输入账号（不能为空）</p>
            </div>
                <div class="form-group">
                    <label>客服登录密码</label>
                    <input class="form-control" id="pwd1" type="password">
                    <p class="help-block">请输入客服登录密码</p>
                </div>
                <div class="form-group">
                    <label>客服登录密码</label>
                    <input class="form-control" id="pwd2" type="password">
                    <p class="help-block">请重复输入客服登录密码</p>
                </div>
                <div class="form-group">
                    <label>客服昵称</label>
                    <input class="form-control" id="customer_service_name">
                    <p class="help-block">请输入客服昵称</p>
                </div>
                <div class="form-group">
                    <label>电话号码</label>
                    <input class="form-control" id="customer_service_tel">
                    <p class="help-block">请输入电话号码</p>
                </div>
                <div class="form-group">
                    <label>身份证号码</label>
                    <input class="form-control" id="customer_service_id_number">
                    <p class="help-block">请输入身份证号码</p>
                </div>
        </div>
    </div>
    <button type="button" class="btn btn-default" onclick="submit_()">注册</button>
    </form>
         <hr>
     </div>
    </div>
</div>

<!-- JavaScript -->
<script src="/YD/Public/Home/js/jquery-1.10.2.js"></script>
<script src="/YD/Public/Home/js/bootstrap.js"></script>

<!-- Page Specific Plugins -->
<script src="/YD/Public/Home/js/raphael-min.js"></script>
<script src="/YD/Public/Home/js/morris-0.4.3.min.js"></script>
<script src="/YD/Public/Home/js/morris/chart-data-morris.js"></script>
<script src="/YD/Public/Home/js/tablesorter/jquery.tablesorter.js"></script>
<script src="/YD/Public/Home/js/tablesorter/tables.js"></script>
<script language="JavaScript">
    function submit_(){
        if(confirm("是否添加新客服")){
            if($("#rg_user").val()!=""&&$("#pwd2").val()!=""&&$("#pwd1")!=""&&$("#rg_name").val()!=""){
                if($("#rg_tel").val()!=""&&$("#rg_idnumber").val()!=""){
                    if($("#pwd1").val()==$("#pwd2").val()){
                        $.ajax({
                            url:"<?php echo U('/Admin/Ajax/ajax_add_kefu','','html');?>",
                            dataType: 'json',
                            type:'post',
                            data:{
                                customer_service_user:$("#customer_service_user").val(),
                                password:$("#pwd1").val(),
                                customer_service_tel:$("#customer_service_tel").val(),
                                customer_service_name:$("#customer_service_name").val(),
                                customer_service_id_number:$("#customer_service_id_number").val()
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
                    }else {
                        alert("登录密码不一致，请重新输入");
                    }
                }else{
                    alert("信息未填写完整");
                }
            }else {
                alert("请输入完整信息");
            }
        }
    }
</script>
</body>
</html>