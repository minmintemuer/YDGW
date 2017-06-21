<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php echo ($seo[0]['seo_keyword']); ?>" />
    <meta name="description" content="<?php echo ($seo[0]['seo_author']); ?>" />
    <meta name="author" content="<?php echo ($seo[0]['seo_description']); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="/YD/Public/bootstrap-3.3.4/js/tests/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="/YD/Public/bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
    <link href="/YD/Public/style.css" rel="stylesheet" type="text/css">
</head>
<body>

   <!--导航栏-->
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					<a class="navbar-brand" href="<?php echo U('Home/Index/index','','');?>">优大</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-ex-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?php echo U('Home/Index/gsjj','','');?>">公司简介</a>
						</li>
						<li>
							<a href="<?php echo U('Home/Index/hyzx','','');?>">行业资讯</a>
						</li>
						<li>
							<a href="<?php echo U('Home/Index/kcjj','','');?>">课程展示</a>
						</li>
						<li>
							<a href="<?php echo U('Home/Index/gshd','','');?>">公司活动</a>
						</li>
						<li  class="active">
							<a href="<?php echo U('Home/Index/jsfc','','');?>">教师风采</a>
						</li>
						<li>
							<a href="<?php echo U('Home/Index/allb','','');?>">典型案例</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
   <!--教师风采大图-->
		<div class="carousel slide" id="fullcarousel-example" data-interval="false" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
					<img src="/YD/Public/banner1.jpg" class="height_max_400">
				</div>
			</div>
		</div>
   <!--教师列表-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center">教师团队</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row row_h">
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-md-4"> <a href="<?php echo U('Home/Index/jsxq','','');?>/id/<?php echo ($data['teacher_id']); ?>">
							<img src="/YD/Public<?php echo ($data['teacher_img']); ?>" class="center-block img-circle img-responsive heght_max_300">
						</a>
							<a href="<?php echo U('Home/Index/jsxq','','');?>/id/<?php echo ($data['teacher_id']); ?>" class="a_color">
								<h3 class="text-center"><?php echo ($data['teacher_name']); ?></h3>
							</a>
							<p class="text-center"><?php echo ($data['teacher_introduction']); ?></p>
							<br>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
   <!--翻页按钮-->
   <div class="section">
	   <div class="container">
		   <div class="row">
			   <div class="col-md-12 text-center">
				   <?php echo ($page); ?>
			   </div>
		   </div>
	   </div>
   </div>


<!--友情链接-->
<footer class="section section-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 hidden-xs">
                <h3 class="text-center">微信链接</h3>
                <img src="/YD/Public<?php echo ($seo[0]['seo_wechat']); ?>" class="heght_max_197 center-block">
            </div>
            <div class="col-sm-3 hidden-xs">
                <h3 class="text-center ">QQ在线客服</h3>
               <a href="tencent://message/?uin=<?php echo ($seo[0]['seo_online_qq']); ?>&Menu=yes"><img src="/YD/Public/ft_qq.png" class="heght_max_197 center-block"></a>
            </div>
            <div class="col-sm-6 hidden-xs">
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
<a href="tencent://message/?uin=<?php echo ($seo[0]['seo_online_qq']); ?>&Menu=yes"><div class="online_kefu hidden-xs">
    在<br>线<br>客<br>服
</div></a>
<a href="<?php echo ($seo[0]['seo_live_entry']); ?>"><div class="online_live hidden-xs">
    直<br>播<br>入<br>口
</div></a>
</body>
</html>