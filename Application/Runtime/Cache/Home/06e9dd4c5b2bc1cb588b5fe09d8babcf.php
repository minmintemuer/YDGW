<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php echo ($seo[0]['seo_keyword']); ?>" />
    <meta name="description" content="<?php echo ($seo[0]['seo_author']); ?>" />
    <meta name="author" content="<?php echo ($seo[0]['seo_description']); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="/company/YD/Public/bootstrap-3.3.4/js/tests/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="/company/YD/Public/bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
    <link href="/company/YD/Public/style.css" rel="stylesheet" type="text/css">
</head>
<body>

	<!--导航栏-->
		<div class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo U('Home/Index/index','','');?>" class="navbar-brand"><span>优大</span></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-ex-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="<?php echo U('Home/Index/gsjj','','');?>">公司简介</a>
					</li>
					<li>
						<a href="<?php echo U('Home/Index/hyzx','','');?>">行业资讯</a>
					</li>
					<li  class="active">
						<a href="<?php echo U('Home/Index/kcjj','','');?>">课程展示</a>
					</li>
					<li>
						<a href="<?php echo U('Home/Index/gshd','','');?>">公司活动</a>
					</li>
					<li>
						<a href="<?php echo U('Home/Index/jsfc','','');?>">教师风采</a>
					</li>
                    <li>
                        <a href="<?php echo U('Home/Index/allb','','');?>">典型案例</a>
                    </li>
				</ul>
			</div>
		</div>
	</div>
	<!--课程介绍-->
		<div class="section ">
			<div class="container ">
				<div class="row ">
					<div class="col-md-12 ">
						<ul class="breadcrumb" style="background-color: #fff;">
							<li>
								<a href="<?php echo U('Home/Index/index','','');?>">首页</a>
							</li>
							<li>
								<a href="<?php echo U('Home/Index/kcjj','','');?>">全部课程</a>
							</li>
							<li>
								<a href="<?php echo U('Home/Index/kcxq','','');?>"><?php echo ($data[0]['class_name']); ?></a>
							</li>
							<li class="active">
								课程预订
							</li>
						</ul>
						<h1><?php echo ($data[0]['class_name']); ?></h1>

					</div>
				</div>
			</div>
		</div>
		<div class="section " data-interval="false ">
			<div class="container ">
				<div class="row ">
					<div class="col-md-4 ">
						<img src="/company/YD/Public<?php echo ($data[0]['class_img']); ?>" class="img-responsive heght_max_300">
					</div>
					<div class="col-md-8">
						<h1><?php echo ($data[0]['class_name']); ?></h1>
						<a href="<?php echo U('Home/Index/jsxq','','');?>/id/<?php echo ($data[0]['teacher_id']); ?>">
							<p>任课教师：<?php echo ($data[0]['class_teacher']); ?></p>
						</a>
						<hr>
						<div class="panel panel-primary ">
							<div class="panel-heading ">
								<h3 class="panel-title">￥&nbsp;&nbsp;<?php echo ($data[0]['class_price']); ?>&nbsp;&nbsp;RMB</h3>
							</div>
						</div>
						<a href="#" class="btn btn-info btn-lg ">在线咨询</a>
				</div>
			</div>
		</div>
		</div>
	<!--预定提交表-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							<div class="form-group has-feedback"><label class="control-label" for="tourists_name">姓名</label><input class="form-control input-lg" id="tourists_name" placeholder="请输入你的姓名" type="text"></div>
							<div class="form-group has-feedback"><label class="control-label" for="tourists_tel">电话</label><input class="form-control input-lg" id="tourists_tel" placeholder="请输入你的电话号码" type="text"></div>
							<div class="form-group"><label class="control-label" for="tourists_email">邮箱</label><input class="form-control input-lg" id="tourists_email" placeholder="请输入你的邮箱" type="text"></div>
							<div class="form-group has-feedback"><label class="control-label" for="tourists_id_number">身份证号</label><input class="form-control input-lg" id="tourists_id_number" placeholder="请输入你的身份证号码" type="text"></div>
							<div class="form-group has-feedback"><label class="control-label" for="tourists_address">地址</label><input class="form-control input-lg" id="tourists_address" placeholder="请输入你的地址" type="text"></div>
							<button type="submit" class="btn btn-block btn-lg btn-primary" onclick="yuding()">预订</button>
					</div>
				</div>
			</div>
		</div>

		<script>
            function yuding(){
                if(confirm("是否提交？")){
                    if($('#tourists_name').val()!="" && $('#tourists_address').val()!="" && $('#tourists_id_number').val()!="" && $('#tourists_email').val()!="" && $('#tourists_tel').val()!="" ){
                        $.ajax({
                            url:"<?php echo U('/Home/Ajax/ajax_add_order','','html');?>",
                            dataType: 'json',
                            type:'post',
                            data:{
                                id:<?php echo ($data[0]['class_id']); ?>,
                                tourists_name:$("#tourists_name").val(),
                                tourists_address: $("#tourists_address").val(),
                                tourists_id_number:$("#tourists_id_number").val(),
                                tourists_email: $("#tourists_email").val(),
                                tourists_tel:$("#tourists_tel").val()
                            },
                            success:function (data) {
                                if (data.success){
                                    alert(data.message);
                                    if(confirm("是否立即联系客服？")){
                                       window.location.href='tencent://message/?uin=1634621150&Menu=yes';
                                    }
                                    window.location.reload();
                                }else {
                                    alert(data.message);
                                }
                            }
                        })
                    }else{
                        alert('请输入完整的信息！');
                    }
                }
            }

		</script>


<!--友情链接-->
<footer class="section section-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3 class="text-center">微信链接</h3>
                <img src="/company/YD/Public<?php echo ($seo[0]['seo_wechat']); ?>" class="heght_max_197 center-block">
            </div>
            <div class="col-sm-3">
                <h3 class="text-center">QQ在线客服</h3>
               <a href="tencent://message/?uin=<?php echo ($seo[0]['seo_online_qq']); ?>&Menu=yes"><img src="/company/YD/Public/ft_qq.png" class="heght_max_197 center-block"></a>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-2">
                   <a href="<?php echo U('Home/Index/gsjj','','');?>" class="text-right" style="color: #fff;"><h5>公司简介</h5></a>
                </div>
                <div class="col-sm-2">
                    <a href="<?php echo U('Home/Index/hyzx','','');?>"  class="text-right" style="color: #fff;"><h5>行业资讯</h5></a>
                </div>
                <div class="col-sm-2">
                    <a href="<?php echo U('Home/Index/kcjj','','');?>"  class="text-right" style="color: #fff;"><h5>课程展示</h5></a>
                </div>
                <div class="col-sm-2">
                    <a href="<?php echo U('Home/Index/gshd','','');?>"  class="text-right" style="color: #fff;"><h5>公司活动</h5></a>
                </div>
                <div class="col-sm-2">
                    <a href="<?php echo U('Home/Index/jsfc','','');?>"  class="text-right" style="color: #fff;"><h5>教师风采</h5></a>
                </div>
                <div class="col-sm-2">
                    <a href="<?php echo U('Home/Index/allb','','');?>"  class="text-right" style="color: #fff;"><h5>典型案例</h5></a>
                </div>
            </div>
            <div class="col-sm-12" >
                <h6 class="text-right"> 版权所有：重庆优大文化传播有限公司　技术支持：<a href="www.changeke.com"  style="color: #fff;">重庆焕延科技有限公司</a> </h6>
                <h6 class="text-right"></h6>
            </div>
        </div>
    </div>
</footer>
<!--直播入口和在线客服-->
<a href="tencent://message/?uin=<?php echo ($seo[0]['seo_online_qq']); ?>&Menu=yes"><div class="online_kefu">
    在<br>线<br>客<br>服
</div></a>
<a href="<?php echo ($seo[0]['seo_live_entry']); ?>"><div class="online_live">
    直<br>播<br>入<br>口
</div></a>
</body>
</html>