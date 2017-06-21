(function($){
    $.showHide = function(options){
        var defaults={
            show_num:8,     //显示多少个
            interval:3000,  //间隔
            speed:600       //隐藏显示速度
        }
        var options=$.extend(defaults,options);
        var obj = options.obj;
        var show_num = options.show_num;
        var interval = options.interval;
        var speed = options.speed;
        var hide_index = 0;//隐藏的那个的索引
        var total_num = $(obj).size();//获取总数
        $(obj+':gt('+(show_num-1)+')').hide();//初始化，只显示前面N个，隐藏后面的
        var rotation = function(){
            if(hide_index >= total_num-show_num){//将前面的放到后面
                var temp = $(obj+':lt('+hide_index+')').remove();
                $(obj).parent().append(temp);
                hide_index = 0;
            }
            var show_index = hide_index+show_num;//显示的那个的索引
            $(obj).eq(hide_index).slideUp(speed);
            $(obj).eq(show_index).slideDown(speed);
            hide_index++;
        }
        if(total_num>show_num){
            setInterval(rotation,interval);
        }
    }
})(jQuery);