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
<style>
	.wenben_tag p{
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 2;
		-webkit-box-orient: vertical;
	}
</style>
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
					<a class="navbar-brand" href="<?php echo U('Home/Index/index','','');?>"><span>优大</span></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-ex-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="">
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
		<!--首页大图-->
		<div class="carousel slide hidden-xs" id="fullcarousel-example" data-interval="2000" data-ride="carousel">
			<div class="carousel-inner">
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; if($data['biaoji'] == 1): ?><div class="item active">
                            <img src="/YD/Public<?php echo ($data['img_url']); ?>" class="height_max_400">

                        </div>
                        <?php else: ?>
                        <div class="item">
                            <img src="/YD/Public<?php echo ($data['img_url']); ?>" class="height_max_400">
                        </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
			<a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
		</div>
        <!--行业资讯-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo U('Home/Index/hyzx','','');?>" class="a_color"><h1 class="text-left">行业资讯
                        </h1></a>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
                    <?php if(is_array($hyzx)): $i = 0; $__LIST__ = $hyzx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hyzx): $mod = ($i % 2 );++$i;?><div class="col-md-3">
                            <a href="<?php echo U('Home/Index/zxxq','','');?>/id/<?php echo ($hyzx['news_id']); ?>" class="a_color"><img src="/YD/Public/<?php echo ($hyzx['news_img']); ?>" class="img-responsive heght_max_197"></a>
                            <a href="<?php echo U('Home/Index/zxxq','','');?>/id/<?php echo ($hyzx['news_id']); ?>" class="a_color wenben_tag">
                                <h2><?php echo ($hyzx['news_categroy']); ?></h2>
                            <?php echo ($hyzx['news_introduction']); ?>
								</a>
							<hr>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
         <!--公司活动-->
		<div class="section ">
			<div class="container ">
				<div class="row ">
					<div class="col-md-12 ">
						<a href="<?php echo U('Home/Index/gshd','','');?>" class="a_color"><h1>公司活动</h1></a>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="fullcarousel-example" data-interval="1500" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
                                <?php if(is_array($activety)): $i = 0; $__LIST__ = $activety;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$activety): $mod = ($i % 2 );++$i; if($activety['biaoji'] == 1): ?><div class="item active">
                                            <a href="<?php echo U('Home/Index/hdxq','','');?>/id/<?php echo ($activety['activety_id']); ?>">
                                                <img src="/YD/Public/<?php echo ($activety['activety_img']); ?>" class="heght_max_197">
                                            </a>
                                            <div class="carousel-caption">
                                                <a href="<?php echo U('Home/Index/hdxq','','');?>/id/<?php echo ($activety['activety_id']); ?>">
                                                    <h2><?php echo ($activety['activety_name']); ?></h2>
                                                </a>
                                                    <?php echo ($activety['activety_introduction']); ?>
                                            </div>
                                        </div>
                                        <?php else: ?>   
                                        <div class="item">
                                            <a href="<?php echo U('Home/Index/hdxq','','');?>/id/<?php echo ($activety['activety_id']); ?>">
												<img src="/YD/Public/<?php echo ($activety['activety_img']); ?>" class="heght_max_197"></a>
                                            <div class="carousel-caption">
                                                <a href="<?php echo U('Home/Index/hdxq','','');?>/id/<?php echo ($activety['activety_id']); ?>">
                                                    <h2><?php echo ($activety['activety_name']); ?></h2>
                                                </a>
                                                    <p><?php echo ($activety['activety_introduction']); ?></p>
                                            </div>
                                        </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
         <!--案例-->
		<div class="section ">
			<div class="container ">
				<div class="row ">
					<div class="col-md-12 ">
						<a href="<?php echo U('Home/Index/allb','','');?>" class="a_color"><h1>成功案例</h1></a>
					</div>
				</div>
			</div>
		</div>
		<div class="section ">
			<div class="container ">
				<div class="row">
                    <?php if(is_array($al)): $i = 0; $__LIST__ = $al;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$al): $mod = ($i % 2 );++$i;?><div class="col-md-3">
                            <a href="<?php echo U('Home/Index/alxq','','');?>/id/<?php echo ($al['soft_text_id']); ?>">
                                <img src="/YD/Public<?php echo ($al['soft_text_img']); ?>" class="img-responsive height_max_197">
                            </a>
                            <a class="a_color" href="<?php echo U('Home/Index/alxq','','');?>/id/<?php echo ($al['soft_text_id']); ?>">
                                <h2><?php echo ($al['soft_text_title']); ?></h2>
                            </a>
                            <p><?php echo ($al['soft_text_introduction']); ?></p>
							<hr>
					    </div><?php endforeach; endif; else: echo "" ;endif; ?>
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