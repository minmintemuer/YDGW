<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        if(!empty(session('login.login_yd_admin_user'))){
            $admin_user = session('login.login_yd_admin_id'); //类型
            $admin_name = session('login.login_yd_admin_user'); //登录名
            if($admin_user === 'SA' && $admin_name === 'admin'){
                //如果是超级管理员
                $data = D('tb_manager')->where("manager_user='$admin_name'")->select();//获取超级管理员的信息
                $data[0]['admin_name'] = $data[0]['manager_name'];
                $this->assign('da',$data);//推送超管信息给模板
                $this->assign('id','SA'); //传递用户类别给前端模板
            }elseif($admin_user === 'SA'){
                //如果是普通管理员
                $data = D('tb_manager')->where("manager_user='$admin_name'")->select();//获取普通管理员的信息
                $data[0]['admin_name'] = $data[0]['manager_name'];
                $this->assign('da',$data);//推送超管信息给模板
                $this->assign('id','PA'); //传递用户类别给前端模板
            }else{
                //如果是客服
                $data = D('tb_customer_service')->where("customer_service_user='$admin_name' ")->select();//获取客服的信息
                $data[0]['admin_name'] = $data[0]['customer_service_name'];
                $this->assign('da',$data);//推送超管信息给模板
                $this->assign('id','CS'); //传递用户类别给前端模板
                //接下来做不允许翻墙处理操作
                $now_controller = CONTROLLER_NAME; //获取当前控制器名称
                $now_action = ACTION_NAME; //获取当前控制器名称
                $now_ca = $now_controller."_".$now_action;
                $allow_url = "Public_admin_login,Public_login_action,Public_chuli,Public_logout,Index_edit_user,Public_del,Index_index,Index_order_detail,Index_order_"; //允许客服进入的模块
                if(!strpos($allow_url,$now_ca)) {
                        $chenggong = U('Admin/Index/index', '', '');
                    $this->error('对不起，您没有权限！', $chenggong, 3);
                }
            }

        }else{
            $chenggong = U('Admin/Public/admin_login','','');
            $this->error('请先登录！',$chenggong,3);
        }
    }
    public function index(){
        $this->display();
    }
    public function add_area(){
        $this->display();
    }
    public function add_jianjie(){
        $this->display();
    }
    public function add_jitang(){
        $this->display();
    }
    public function add_kecheng(){
        $this->display();
    }
    public function add_news(){
           $this->display();
    }
    public function add_user(){
            $this->display();
    }
    public function add_zhuanti(){
        $this->display();
    }
    public function area_(){
        $data = D('tb_teacher')->where("is_del='0'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function area_detail($id){
        $data = D('tb_teacher')->where("teacher_id=$id && is_del='0'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function comment_(){
        $news = D('tb_introduction')->where("is_del='0'")->select();
        $this->assign('data',$news);
        $this->display();
    }
    public function edit_area($id){
        $data = D('tb_teacher')->where("is_del='0' && teacher_id='$id''")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function edit_jianjie($id){
        $data = D('tb_introduction')->where("introduction_id='$id' && is_del='0'")->select();
        $admin_id = $data[0]['introduction_admin_id'];
        $admin = D('tb_manager')->where("manager_id='$admin_id'")->select();
        $data[0]['introduction_admin_id'] = $admin[0]['manager_name'];
        $this->assign('data',$data);
        $this->display();
    }
    public function edit_jitang($id){
        $data = D('tb_soft_text')->where("soft_text_id=$id && is_del='0'")->select();
        $admin_id = $data[0]['soft_text_admin'];
        $admin = D('tb_manager')->where("manager_id='$admin_id'")->select();
        $data[0]['sofe_text_admin'] = $admin[0]['manager_name'];
        $this->assign('data',$data);
        $this->display();
    }
    public function edit_news($id){
        $data = D('tb_news')->where("news_id='$id'&& is_del='0'")->select();
        $admin_id = $data[0]['news_admin'];
        $admin = D('tb_manager')->where("manager_id='$admin_id'")->select();
        $data[0]['news_admin'] = $admin[0]['manager_name'];
        $this->assign('data',$data);
        $this->display();
    }
    public function edit_pro($id){
        $data = D('tb_class')->where("class_id=$id && is_del='0'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function edit_zhuanti($id){
        $data = D('tb_activety')->where("activety_id='$id' && is_del='0' ")->select();
        $admin_id = $data[0]['activety_admin'];
        $admin = D('tb_manager')->where("manager_id='$admin_id'")->select();
        $data[0]['activety_admin'] = $admin[0]['manager_name'];
        $this->assign('data',$data);
        $this->display();
    }
    public function jianjie_detail($id){
        $news=D('tb_introduction')->where("introduction_id='$id' && is_del='0'")->select();
        $admin_id = $news[0]['introduction_admin_id'];
        $admin = D('tb_manager')->where("manager_id='$admin_id'")->select();
        $news[0]['introduction_admin_id'] = $admin[0]['manager_name'];
        $this->assign('data',$news);
        $this->display();
    }
    public function jitang(){
        $data = D('tb_soft_text')->where("is_del='0'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function jitang_detail($id){
        $data = D('tb_soft_text')->where("soft_text_id=$id && is_del='0'")->select();
        $admin_id = $data[0]['soft_text_admin'];
        $admin = D('tb_manager')->where("manager_id='$admin_id'")->select();
        $data[0]['soft_text_admin'] = $admin[0]['manager_name'];
        $this->assign('data',$data);
        $this->display();
    }
    public function kefu_(){
        $data = D('tb_customer_service')->where("is_del='0'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function kefu_detail($id){
        $data = D('tb_customer_service')->where("customer_service_id=$id && is_del='0'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function menu(){
        $data = D('tb_class')->where("is_del='0'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function news_(){
        $news = D('tb_news')->where("is_del='0'")->select();
        $this->assign('data',$news);
        $this->display();
    }
    public function news_detail($id){
        $news=D('tb_news')->where("news_id='$id'&& is_del='0'")->select();
        $admin_id = $news[0]['news_admin'];
        $admin = D('tb_manager')->where("manager_id='$admin_id'")->select();
        $news[0]['news_admin'] = $admin[0]['manager_name'];
        $this->assign('data',$news);
        $this->display();
    }
    public function order_(){
        $data = D('tb_order')->where("is_del='0'")->select();//查询出订单数据
        if($data){
            $classId = $data[0]['class_id'];//查询课程名
            $className = D('tb_class')->where("class_id=$classId")->select();
            $data[0]['class_id'] = $className[0]['class_name'];
            $touristsId = $data[0]['tourists_id'];//查询游客名
            $touristsName = D('tb_tourists')->where("tourists_id=$touristsId")->select();
            $data[0]['tourists_id'] = $touristsName[0]['tourists_name'];
            $customer_service_id = $data[0]['customer_service_id'];//查询客服名
            $customer_service_name = D('tb_customer_service')->where("customer_service_id=$customer_service_id")->select();
            $data[0]['customer_service_id'] = $customer_service_name[0]['customer_service_name'];
        }
        $this->assign('data',$data);
        $this->display();
    }
    public function order_detail($id){
        $data = D('tb_order')->where("order_id=$id  && is_del='0'")->select();//查询出订单数据
        $classId = $data[0]['class_id'];//查询课程名
        $className = D('tb_class')->where("class_id=$classId")->select();
        $data[0]['class_name'] = $className[0]['class_name'];
        $data[0]['class_teacher'] = $className[0]['class_teacher'];
        $touristsId = $data[0]['tourists_id'];//查询游客信息
        $touristsName = D('tb_tourists')->where("tourists_id=$touristsId")->select();
        $data[0]['tourists_name'] = $touristsName[0]['tourists_name'];
        $data[0]['tourists_tel'] = $touristsName[0]['tourists_tel'];
        $data[0]['tourists_id_number'] = $touristsName[0]['tourists_id_number'];
        $data[0]['tourists_address'] = $touristsName[0]['tourists_address'];
        $data[0]['tourists_email'] = $touristsName[0]['tourists_email'];
        $customer_service_id = $data[0]['customer_service_id'];//查询客服名
        $customer_service_name = D('tb_customer_service')->where("customer_service_id=$customer_service_id")->select();
        $data[0]['customer_service_name'] = $customer_service_name[0]['customer_service_name'];
        $this->assign('data',$data);
        $this->display();
    }
    public function pro_detail($id){
        $data = D('tb_class')->where("class_id=$id && is_del='0'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function user_(){ //管理员列表页面得数据推送
        $manager = D('tb_manager')->where("is_del='0'")->select();
//        dump ($manager);
        $this->assign('manager',$manager);
        $this->display();
    }
    public function zhuanti(){
        $manager = D('tb_activety')->where("is_del='0'")->select();
        $this->assign('data',$manager);
        $this->display();
    }
    public function zhuanti_detail($id){
        $news=D('tb_activety')->where("activety_id='$id '&& is_del='0'")->select();
        $admin_id = $news[0]['activety_admin'];
        $admin = D('tb_manager')->where("manager_id='$admin_id'")->select();
        $news[0]['activety_admin'] = $admin[0]['manager_name'];
        $this->assign('data',$news);
        $this->display();
    }
    public function index_img(){
        $data = D('tb_img')->where("is_del='0'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function edit_index_img($id){
        $data = D('tb_img')->where("is_del='0' && img_id=$id")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function edit_user(){
        $this->display();
    }
    public function edit_seo(){
        $data = D('tb_seo')->where("seo_id=1")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function seo(){
        $data = D('tb_seo')->select();
        $this->assign('seo',$data);
        $this->display();
    }
}