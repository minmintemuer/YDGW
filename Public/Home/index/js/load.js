var window_w=$(window).width();
var time_delay=null;
var maxwindow_width=1920;
var mobile_width=740;
var readpiclist=[]
var pc_tempobj={}
var mobile_tempobj={}
$(document).ready(function(){
	$.fn.runall()
	$("#banner").css("visibility","visible");
	$(".Searchform .text").key("搜索...","#333","#999")
	$("#quickNav ul li").bind("mouseenter",function(){
		$(this).find("img").attr("src","/images/1_hover.gif")
		
	}).bind("mouseleave",function(){
		
		$(this).find("img").attr("src","/images/1.gif")
		
	})
	
	
	
	
	
	
	
	
})

//输入关键词
$.fn.key=function(a,color1,color2){
	var self=$(this)
	if (self.length==0) return false;
	if (!self.is("input") && !self.is("textarea")) return false;
	self.css("color",color2)
		var keywords=a;	
		self.val(keywords).bind("focus",function(){
			if (this.value==keywords){this.value="";this.style.color=color1}
		}).bind("blur",function(){
			if (this.value==""){this.value=keywords;this.style.color=color2}
		});
}


$.fn.runall=function(){
	
			

	
	/*侧栏导航*/
	$("#Floatingbar").dynamic_fn({
		"idname":"Floatingbarhtml",
		"pc_run":function(self){
				self.show()
				self.find("ul li").floatingbar();
		},
		"mobile_run":function(self){
			
				self.hide()
		}
	})

	
	/*菜单*/
	$("#menu").dynamic_fn({
		"idname":"menuhtml",
		"dynamic_pic":true,
		"pc_run":function(self){
				if (self.is(":hidden")){self.fadeIn()	}			
				if ($("#Search").is(":hidden")){$("#Search").fadeIn()	}			
				self.dropdown_menu()
		},
		"mobile_run":function(self){
			
				if (self.is(":visible")){self.hide()	}			
				if ($("#Search").is(":visible")){$("#Search").hide()	}			
				self.mobile_dropdown_menu()
		}
	})
	
	
	
	/*主广告滚动*/
	$("#banner").dynamic_fn({
		"idname":"bannerhtml",
		"dynamic_pic":true,
		"pc_run":function(self){
					self.wrapInner("<div id='banner_slider'></div>")
					$('#banner_slider').bxSlider({ 
						slideWidth: 1920, 
						infiniteLoop: false,
						hideControlOnEnd: true,
						slideMargin: 0,
						auto: true
					  });	
							
		},
		"mobile_run":function(self){
				self.wrapInner("<div id='banner_slider'></div>")
				$('#banner_slider').bxSlider({ 
					slideWidth: 1920, 
					infiniteLoop: false,
					hideControlOnEnd: true,
					slideMargin: 0,
					auto: true
				  });	
			
		}
	})
	
	/*全国优秀 企业展示 滚动*/
	$("#PhotoShow .scrollleft").dynamic_fn({
		"idname":"PhotoShowhtml",
		"pc_run":function(self){
				self.imgscroll({
					speed: 40,    //图片滚动速度
					amount: 10,    //图片滚动过渡时间
					width:2,     //图片滚动步数
					dir: "left"   // "left" 或 "up" 向左或向上滚动
				});	
				
			
				$(".PhotoList li").bind('mouseenter',function(){
						var self=$(this).find("img");
						time_delay=setTimeout(function(){
									if(!self.is(":animated"))
									{
										self.addClass("star_animate");
										self.stop(true,false).animate({"opacity":0.6}, 500);
									}
							
						},100)
					
				}).bind('mouseleave',function(){
						clearTimeout(time_delay)	
								var self=$(this).find("img")
								if (self.is(".star_animate"))
								{		
										self.removeClass("star_animate");
										self.stop(true,false).animate({"opacity":1}, 500);
								}
				})	
				
				
		},
		"mobile_run":function(self){
			
			$("#PhotoShow .scrollleft .PhotoList")
			.listgroup({group_number:2,group_wrap:"PhotoShowGroupbox"})
			.swiperGroupBrowse({"bannername":"PhotoShowswiper","nav":1,"prevnext":0,"itemobj":".PhotoList"})
		}
		
	})
		
		
	/*合作伙伴展示*/	
	$("#partner .scrollleft").dynamic_fn({
		"idname":"partnerhtml",
		"pc_run":function(self){
			
				self.imgscroll({
					speed: 40,    //图片滚动速度
					amount: 10,    //图片滚动过渡时间
					width:2,     //图片滚动步数
					dir: "left"   // "left" 或 "up" 向左或向上滚动
				});	
		},
		"mobile_run":function(self){
			
			
			
			$("#partner .scrollleft .PicList")
			.listgroup({group_number:3,group_wrap:"partnerGroupbox"})
			.swiperGroupBrowse({"bannername":"partnersswiper","nav":1,"prevnext":0,"itemobj":".PicList"})
			
		}
		
		})
	
		
	/*新闻热点滚动*/
	$("#HotNews .scrolltop").dynamic_fn({
		"idname":"HotNewshtml",
		"pc_run":function(self){
			
				$(".scrolltop").imgscroll({
					speed: 40,    //图片滚动速度
					amount: 0,    //图片滚动过渡时间
					width: 1,     //图片滚动步数
					dir: "up"   // "left" 或 "up" 向左或向上滚动
				});
		},
		"mobile_run":function(self){
			
			$("#HotNews .scrolltop .PictureList")
			.listgroup({group_number:2,group_wrap:"HotNewsGroupbox"})
			.swiperGroupBrowse({"bannername":"HotNewsswiper","nav":1,"prevnext":0,"itemobj":".PictureList"})
			
			
			
		}
		
		})
	
	
	//新闻选项卡	
	$("#News").dynamic_fn({
		"idname":"NewsTsbhtml",
		"pc_run":function(self){
				self.find('.Tab').Tab({lilab:"a",labselect:".change",Tabname:".Tab_nr",labaction:"click",animatename:"scroll_x",animateTime:300,mode:"none"})
		},
		"mobile_run":function(self){
			
				self.find('.Tab').Tab({lilab:"a",labselect:".change",Tabname:".Tab_nr",labaction:"click",animatename:"scroll_x",animateTime:300,mode:"none"})
		}
		})
	
	
	
	
	
}


//动态功能
$.fn.dynamic_fn=function(options){
	var self=$(this)
	if (self.length==0) return false;
	var config={
		"idname"		:	null,
		"pc_run_zt"		:	true,
		"mobile_run_zt" :	true,
		"pc_run"		:	null,
		"mobile_run"	:	null,
		"dynamic_pic"   :   false
	}
		
	$.extend(config,options)
	
	var access_name=config.idname
	var pchtml=self.html()
	var fn={
		
		"dynamic_change":function(type){
				switch(type)
				{
					
					case "data-mobile-src":
						$("body").append("<div id='temp_html' style='display:none'>"+pchtml+"</div>")
						$("#temp_html").find("img[data-mobile-src]").each(function(index, element) {
							var mobilesrc=$(this).attr("data-mobile-src")
							$(this).removeAttr("data-mobile-src")
							$(this).attr("src",mobilesrc)
						});	
					break;	
					
				}
				var html=$("#temp_html").html();
				$("#temp_html").empty().remove();
				return html
		}
		
	}
	$.extend(config,fn)
	
	if (config.dynamic_pic)
	{
		//var mobile_html=self.dynamic_change("data-mobile-src");
		var mobile_html=config.dynamic_change("data-mobile-src")
		$.fn.dynamic_temphtml(access_name,pchtml,mobile_html);
	}
	else
	{
		$.fn.dynamic_temphtml(access_name,pchtml,pchtml)
	}
		

	
	
	if (window_w>mobile_width)
	{
		
		
		if (config.pc_run_zt==false ) return false;
		if (!config.pc_run && typeof(config.pc_run)!="undefined" && config.pc_run!=0){return false;}
		
		if (self.is(".pc_ok")) return false;
		self.wrapInner("<div class='tempdiv'></div>")
		self.dynamic_remove().html(pc_tempobj[access_name])
			
		config.pc_run(self)
		self.addClass("pc_ok")
	}
	else
	{
		if (config.mobile_run_zt==false ) return false;
		if (!config.mobile_run && typeof(config.mobile_run)!="undefined" && config.mobile_run!=0)
		{ //alert("不运行"+config.idname);
		 return false;
		}
		self.wrapInner("<div class='tempdiv'></div>")
		self.dynamic_remove().html(mobile_tempobj[access_name])
		config.mobile_run(self)
		self.removeClass("pc_ok")
	}
	
	
	
}


$.fn.dynamic_remove=function(){
	if ($(this).find(">div.tempdiv")[0])
	{
		$(this).find(">div.tempdiv").empty().remove()
	}
	return $(this)
}

$.fn.dynamic_temphtml=function(savename,saveval,mobile_saveval){
	if (typeof(pc_tempobj[savename])=="undefined")
	{
		
		pc_tempobj[savename]=saveval;
		mobile_tempobj[savename]=mobile_saveval;
		
	}
}
$(window).resizeEnd({
	delay :100
}, function(){
	 window_w=$(window).width()
	$.fn.runall()
	
})

//手机下拉菜单
	$.fn.mobile_dropdown_menu=function(){
		var self=$(this);
		if (self.length==0) return false;
		$(".header_icon1x1").unbind("click")
		$(".header_icon2x1").unbind("click")
		
		/*搜索*/
		$(".header_icon1x1").bind("click",function(){
			if ($("#menu").is(":visible"))
			{$("#menu").toggle()}
			$("#Search").toggle()
			return false;
			
		})
		/*菜单 */
		$(".header_icon2x1").bind("click",function(){
				if ($("#Search").is(":visible"))
				{$("#Search").toggle()}
				$("#menu").toggle()
				return false;
			
		})
		self.find("ol").hide()
		self.find("ul>li>a").unbind("click")
		self.find("ol").prev().addClass("btn_submenu")
		self.find("ul>li>a").bind("click",function(){
			var ol=$(this).next("ol");
			var liobj=$(this).parent()
			if (ol.length>0) 
			{
				
					if (liobj.is(".change"))
					{
							liobj.removeClass("change")
							ol.slideUp();	
						
					}
					else
					{
							liobj.addClass("change")
							ol.slideDown();	
						
					}
			}
			return false;
		})
		
				
	}
	
//下拉菜单
	$.fn.dropdown_menu=function(){
		var self=$(this);
		if (self.length==0) return false;
		

		
		var select_classname='hover',
			submenu_name="ol",
			olobj=self.find(submenu_name);
		
		self.unbind("mouseleave")
		self.bind("mouseleave",function(){
			olobj.hide();
			self.find("li."+select_classname).removeClass(select_classname)
		})
		self.find("ul>li").unbind()
		self.find("ul>li").bind("mouseenter",function(){
			var obj=$(this),submenuobj=obj.find(submenu_name);
			self.find("ol:visible").slideUp(50)
			if (submenuobj.length>0) 
			{
				obj.addClass(select_classname);
				submenuobj.slideDown(80);
			}
		}).bind("mouseleave",function(){
			
			var obj=$(this),submenuobj=obj.find(submenu_name+":visible");
			if (submenuobj.length>0) 
			{
				obj.removeClass(select_classname);
				submenuobj.slideUp(50);
			}
		})
	}




//选项卡切换
		$.fn.Tab=function(config){
			var self=$(this);
			var select_=0;
			var classname=config.labselect.replace(".","")
			if (self.length==0) return false;
			if (self.find(config.lilab).length==0) return false;
			
			
			self.each(function(index, element) {
							
				self=$(this);
						
						if (self.find(config.labselect).length==0) 
						{self.find(config.lilab+":eq(0)").addClass(classname);}
						self.find(config.lilab).each(function(index, element) {
							if (!$(this).is(config.labselect))
							{
								self.siblings(config.Tabname+":eq("+index+")").hide();
							}
						});
						self.find(config.lilab).unbind(".action")
						self.find(config.lilab).bind(config.labaction+".action",function(){
							
							var index=$(this).index();
							if(self.siblings(config.Tabname+":visible").is(":animated")){ 
							return false;
							
							}

							
							if ($(this).is(config.labselect)) return false;
							var index2=$(this).siblings(config.labselect).index()
							$(this).addClass(classname).siblings().removeClass(classname);
							
							config.animate(index,index2,config.animatename)
							return config.labaction=="click"?   false :  true;
						})
						
						config.animate=function(index,index2,active){
							
							switch (active)
							{
								case "fade":
									self.siblings(config.Tabname+":visible").hide();
									self.siblings(config.Tabname+":eq("+index+")").fadeIn(config.animateTime);
								break;
								case "scroll_x":
									self.parent().css({"position":"relative","overflow":"hidden"});
									var selfs=self.siblings(config.Tabname+":visible")
									var dr="100%",dr2="100%"
									if (index2>index)
									{
										dr="100%";
										dr2="-100%"
									}
									else
									{
										dr="-100%";
										dr2="100%"
									}
									var top=selfs.position().top
									
									
									if (config.mode=="delay")		
									{
									//当前渐隐
									selfs
									.css({"position":"relative","width":"100%"})
									.stop(true,false)
									.animate({"left":dr,"opacity":0},config.animateTime,
												function(){
													 $(this).css({"position":"static","left":"auto","opacity":1,"display":"none"}
												)}
											)
									setTimeout(function(){
												self.siblings(config.Tabname+":eq("+index+")").css({"position":"relative","left":dr2,"display":"block","opacity":0})
												.stop(true,false)
												.animate({"left":0,"opacity":1},config.animateTime
												,function(){
														$(this).css({"top":0,"position":"static"})	
														
												})
									},config.animateTime)		
								
									}
									
									else
									{
										
											selfs
											.css({"position":"absolute","width":"100%","left":selfs.position().left,"top":selfs.position().top})
											.stop(true,false)
											.animate({"left":dr,"opacity":0},config.animateTime,
												function(){
													 $(this).css({"position":"relative","top":"auto","left":"auto","opacity":1,"display":"none"}
												)}
											)
									
									
												self.siblings(config.Tabname+":eq("+index+")").css({"position":"relative","left":dr2,"display":"block","opacity":0})
												.stop(true,false)
												.animate({"left":0,"opacity":1},config.animateTime
												,function(){
														$(this).css({"top":0,"position":"relative"})	
														
												})
									}
								break;
								
								
								case "none":
									self.siblings(config.Tabname+":visible").hide();
									self.siblings(config.Tabname+":eq("+index+")").show();
								break;	
								
							}
							
							
						}


            });

		}



//右侧浮动条
$.fn.floatingbar=function(){
	var self=$(this);
	if (self.length==0){return false;}
	var time=null;
	self.bind("mouseenter",function(){
			var span=$(this).find("span")
			if (span.length==0) return false;
			var self=$(this);
			clearTimeout(time)
		time=setTimeout(function(){
			self.addClass("change")
			if(!span.is(":animated"))
			{span.stop(true,false).animate({"right":"64px" }, 300);}			
			
		},150)
			
	}).bind("mouseleave",function(){
		var span=$(this).find("span")
		var self=$(this)
		
		setTimeout(function(){span.stop(true,false).animate({"right":"-200px"},200,function(){
			self.removeClass("change");
		});},150)
	})
	
	$("#btn_backtop").click(function(){$("html,body").animate({scrollTop:0},500);return false;})
}




//对指定列表进行列表分组
$.fn.listgroup=function(options){
	var config={
		group_number:4	
	}
	$.extend(config,options);
	var self=$(this)
	if (self.length==0) return self;
	
	var class_name=self.attr("class");
	var ul="<ul class='"+class_name+"'>{list_nr}</ul>";
	var lengths=$(this).find("li").length;
	var k=0,htmls="",tempclass,temphtml="";
	if (lengths>config.group_number)
	{	
		var groups=parseInt(lengths/config.group_number);
		var groups_end=lengths%config.group_number;
		if (groups_end>0){groups=groups+1;}
						for (var i=0;i<groups;i++)
						{
							for (var j=0;j<config.group_number;j++)
							{
								tempobjs=self.find("li:eq("+k+")");
								if (tempobjs.length>0)
								{temphtml=temphtml+tempobjs.prop("outerHTML");	}
								k=k+1;
							}
							htmls=htmls+ul.replace("{list_nr}",temphtml)
							temphtml="";
						}
		self.replaceWith(htmls);
		$("."+class_name).wrapAll('<div id="'+config.group_wrap+'"></div>')
		return $("#"+config.group_wrap)
	}
	else
	{
		 return self;
	}
}



//list分组浏览
$.fn.swiperGroupBrowse=function(config){
	var self=$(this)
	if (self.length==0) return false;
	var ulobj=self
	var liobj=self .find(config.itemobj)
	var nav,prevnext
	config.nav==1? nav='<div class="swiper-pagination"></div>':nav=''
	config.prevnext==1? prevnext='<div class="swiper-button-next"></div><div class="swiper-button-prev"></div>': prevnext=' '
	
	if (liobj.length>0)
	{
	
		liobj.wrap('<div class="swiper-slide"></div>')
		ulobj.replaceWith('<div class="swiper-container" id="'+config.bannername+'"><div class="swiper-wrapper">'+ulobj.html()+'</div>'+nav+prevnext+'</div>')
		var swiper = new Swiper('#'+config.bannername, {
			pagination: '#'+config.bannername+' .swiper-pagination',
			nextButton: '#'+config.bannername+' .swiper-button-next',
			prevButton: '#'+config.bannername+' .swiper-button-prev',
			slidesPerView: 1,
			paginationClickable: true,
			spaceBetween: 1,
			loop: true
		});
	}
	
}


