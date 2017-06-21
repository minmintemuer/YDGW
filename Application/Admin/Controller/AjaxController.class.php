<?php
namespace Admin\Controller;
use Think\Controller;
class AjaxController extends Controller {
   public function add_user(){
       if(!empty($_POST)){
           $admin = $_POST['manager_user'];
           if(!D('tb_manager')->where("manager_user='$admin'")->select()){
               $_POST['manager_password'] = md5($_POST['manager_password']);
               $rand = "";
               //产生5位数得盐值
               for ($i = 0 ;$i < 5;$i++){
                   $rand .= mt_rand(0,9);
               }
               $_POST['manager_sale'] = md5($rand);
               $_POST['manager_password'] =$_POST['manager_sale'].$_POST['manager_password']; //拼接密码
               $manger_id = D('tb_manager')->add($_POST);
               if($manger_id){
                   $r_date['success'] = true;
                   $r_date['message'] = '添加新管理员成功!';
               }else{
                   $r_date['success'] = false;
                   $r_date['message'] = '添加新管理员失败!请稍后再试!';
               }
           }else{
               $r_date['success'] = false;
               $r_date['message'] = '添加新管理员失败!此用户名已经存在!请更换用户名！';
           }
           $this->ajaxReturn($r_date);
       }else{
          $this->error('服务器繁忙');
       }
   }
   public function ajax_save_news(){
       if(!empty($_POST)){
           $admin_name = $_POST['news_admin'];
           $admin = D('tb_manager')->where("manager_name='$admin_name'")->select();
           if($admin){
               $_POST['news_time'] = time();
               $_POST['news_admin'] = $admin[0]['manager_id'];
               $manger_id = D('tb_news')->where("news_id=".$_POST['id'])->save($_POST);
               if($manger_id){
                   $r_date['success'] = true;
                   $r_date['message'] = '修改新闻成功!';
               }else{
                   $r_date['success'] = false;
                   $r_date['message'] = '修改新闻失败!请稍后再试!';
               }
           }else{
               $r_date['success'] = false;
               $r_date['message'] = '修改新闻失败!不存在该管理员!';
           }

           $this->ajaxReturn($r_date);
       }else{
           $this->error('服务器繁忙');
       }
   }
    public function ajax_upload_image()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/production/image/'; // 设置附件上传根目录
        $upload->savePath = 'image/'; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        if (!$info) {// 上传错误提示错误信息
            $message = $upload->getError();
            echo "<script language='JavaScript'>parent.alert('$message',false)</script>";
        } else {// 上传成功
            foreach ($info as $file) {
                $img_url = "/production/image/" . $file['savepath'] . $file['savename'];
                echo "<script language='JavaScript'>parent.callback('$img_url',true);</script>";
            }
        }
    }
    public function ajax_add_news(){
        if(!empty($_POST)) {
            $admin_name = $_POST['news_admin'];
            $admin = D('tb_manager')->where("manager_name='$admin_name'")->select();
            if($admin){
                $_POST['news_admin'] = $admin[0]['manager_id'];
                $_POST['news_time'] = time();
                $data = D('tb_news')->add($_POST);
                if ($data) {
                    $r_date['success'] = true;
                    $r_date['message'] = '添加新闻成功!';
                } else {
                    $r_date['success'] = false;
                    $r_date['message'] = '添加新闻失败!请稍后再试!';
                }
            }else{
                $r_date['success'] = false;
                $r_date['message'] = '添加新闻失败!不存在该管理员!';
            }

            $this->ajaxReturn($r_date);
        }else{
                $this->error('服务器繁忙，请稍后再试！','',1);
            }
    }
    public function ajax_save_introduction(){
        if(!empty($_POST)) {
            $admin_name = $_POST['introduction_admin_id'];
            $admin = D('tb_manager')->where("manager_name='$admin_name'")->select();
            if($admin){
                $admin_id = $admin[0]['manager_id'];
                $_POST['introduction_admin_id'] = $admin_id;
                $_POST['introduction_time'] = time();
                $data = D('tb_introduction')->where("introduction_id=".$_POST['id'])->save($_POST);
                if ($data) {
                    $r_date['success'] = true;
                    $r_date['message'] = '修改简介成功!';
                } else {
                    $r_date['success'] = false;
                    $r_date['message'] = '修改简介失败!请稍后再试!';
                }
            }else{
                $r_date['success'] = false;
                $r_date['message'] = '修改简介失败!不存在该管理员!';
            }

            $this->ajaxReturn($r_date);
        }else{
            $this->error('服务器繁忙，请稍后再试！','',1);
        }
    }
    public function ajax_add_introduction(){
        if(!empty($_POST)) {
            $admin_name = $_POST['introduction_admin_id'];
            $admin = D('tb_manager')->where("manager_name='$admin_name'")->select();
            if($admin){
                    $_POST['introduction_admin_id'] = $admin[0]['manager_id'];
                    $_POST['introduction_time'] = time();
                    $data = D('tb_introduction')->add($_POST);
                    if ($data) {
                        $r_date['success'] = true;
                        $r_date['message'] = '添加简介成功!';
                    } else {
                        $r_date['success'] = false;
                        $r_date['message'] = '添加简介失败!请稍后再试!';
                    }
                }else{
                    $r_date['success'] = false;
                    $r_date['message'] = '添加简介失败!不存在该管理员!';
                }
            $this->ajaxReturn($r_date);
        }else{
            $this->error('服务器繁忙，请稍后再试！','',1);
        }
    }
    public function ajax_add_zhuanti(){ //还没有操作
        if(!empty($_POST)) {
            $start = explode('-',$_POST['activety_start_time']);
            $end = explode('-',$_POST['activety_end_time']);
            $_POST['activety_time'] = time();
            $_POST['activety_start_time'] = mktime(0,0,0,$start[1],$start[2],$start[0]);  //制作开始时间和结束时间戳
            $_POST['activety_end_time'] = mktime(0,0,0,$end[1],$end[2],$end[0]);
            if(count($start) != 3  && count($end) != 3 || $_POST['activety_end_time'] < $_POST['activety_start_time']){
                $r_date['success'] = false;
                $r_date['message'] = '请输入正确的开始或结束时间格式';
            }else{
                $admin_name = $_POST['activety_admin'];
                $admin = D('tb_manager')->where("manager_name='$admin_name'")->select();
                if($admin){
                    $_POST['activety_admin'] = $admin[0]['manager_id'];
                    $data = D('tb_activety')->add($_POST);
                    if ($data) {
                        $r_date['success'] = true;
                        $r_date['message'] = '添加活动成功!';
                    } else {
                        $r_date['success'] = false;
                        $r_date['message'] = '添加活动失败!请稍后再试!';
                    }
                }else{
                    $r_date['success'] = false;
                    $r_date['message'] = '添加活动失败!不存在该管理员!';
                }
            }
            $this->ajaxReturn($r_date);
        }else{
            $this->error('服务器繁忙，请稍后再试！','',1);
        }
    }
    public function ajax_save_zhuanti(){
        if(!empty($_POST)) {
            $start = explode('-',$_POST['activety_start_time']);
            $end = explode('-',$_POST['activety_end_time']);
            $_POST['activety_time'] = time();
            if(count($start) != 3  && count($end) != 3){
                $this->error('请输入正确的开始或结束时间格式！','',1);
            }else{
                $admin_name = $_POST['activety_admin'];
                $admin = D('tb_manager')->where("manager_name='$admin_name'")->select();
                if($admin){
                    $_POST['activety_admin'] = $admin[0]['manager_id'];
                    $_POST['activety_start_time'] = mktime(0,0,0,$start[1],$start[2],$start[0]);  //制作开始时间和结束时间戳
                    $_POST['activety_end_time'] = mktime(0,0,0,$end[1],$end[2],$end[0]);
                    $data = D('tb_activety')->where("activety_id=".$_POST['id'])->save($_POST);
                    if ($data) {
                        $r_date['success'] = true;
                        $r_date['message'] = '修改活动成功!';
                    } else {
                        $r_date['success'] = false;
                        $r_date['message'] = '修改活动失败!请稍后再试!';
                    }
                }else{
                    $r_date['success'] = false;
                    $r_date['message'] = '修改活动失败!不存在该管理员!';
                }
                $this->ajaxReturn($r_date);
            }
        }else{
            $this->error('服务器繁忙，请稍后再试！','',1);
        }
    }
    public function ajax_add_jiaoshi(){ //添加教师的时候允许把课程全部添加进数据库
        if(!empty($_POST)) {
                $data = D('tb_teacher')->add($_POST);
                if ($data) {
                    $r_date['success'] = true;
                    $r_date['message'] = '添加教师成功!';
                } else {
                    $r_date['success'] = false;
                    $r_date['message'] = '添加教师失败!，请稍后再试!';
                }
            $this->ajaxReturn($r_date);
        }else{
            $this->error('服务器繁忙，请稍后再试！','',1);
        }
    }
    public function ajax_save_teacher(){
        if(!empty($_POST)){
            $id = $_POST['id'];
            $data = D('tb_teacher')->where("teacher_id = $id")->save($_POST);
            if ($data) {
                $r_date['success'] = true;
                $r_date['message'] = '修改教师成功!';
            } else {
                $r_date['success'] = false;
                $r_date['message'] = '添加教师失败!，请稍后再试!';
            }
            $this->ajaxReturn($r_date);
        }else{
            $this->assign('服务器繁忙，请稍后再试！','',1);
        }
    }
    public function ajax_save_class(){
        if(!empty($_POST)){
            $id = $_POST['id'];
            $_POST['class_time'] = time();
            $data = D('tb_class')->where("class_id = $id")->save($_POST);
            if ($data) {
                $r_date['success'] = true;
                $r_date['message'] = '修改课程成功!';
            } else {
                $r_date['success'] = false;
                $r_date['message'] = '修改课程失败!，请稍后再试!';
            }
            $this->ajaxReturn($r_date);
        }else{
            $this->assign('服务器繁忙，请稍后再试！','',1);
        }
    }
    public function ajax_add_class(){ //在添加课程入表前判断这门课程是否为该老师上，并且是否存在该课程
        if(!empty($_POST)){
            $class_name = $_POST['class_name'];
            $class_teacher = $_POST['class_teacher'];
            if(D('tb_teacher')->where("teacher_name='$class_teacher' && teacher_class_name like '%".$class_name."%'")->select()){
                //如果满足条件添加课程
                $_POST['class_time'] = time();
                $data = D('tb_class')->add($_POST);
                if ($data) {
                    $r_date['success'] = true;
                    $r_date['message'] = '添加课程成功!';
                } else {
                    $r_date['success'] = false;
                    $r_date['message'] = '添加课程失败!请稍后再试!';
                }
            }else{
                //返回错误数据
                $r_date['success'] = false;
                $r_date['message'] = '添加课程失败!可能不存在该老师或者该课程不是该老师开设!';
            }
            $this->ajaxReturn($r_date);
        }else{
            $this->assign('服务器繁忙，请稍后再试！','',1);
        }
    }
    public function ajax_add_soft_text(){
        if(!empty($_POST)){
            $admin_name = $_POST['sofe_text_admin'];
            $admin = D('tb_manager')->where("manager_name='$admin_name'")->select();
            if($admin){ //如果存在管理员
                $_POST['sofe_text_admin'] = $admin[0]['manager_id'];
                $_POST['soft_text_time'] = time();
                $data = D('tb_soft_text')->add($_POST);
                if ($data) {
                    $r_date['success'] = true;
                    $r_date['message'] = '添加鸡汤成功!';
                } else {
                    $r_date['success'] = false;
                    $r_date['message'] = '添加鸡汤失败!请稍后再试!';
                }
            }else{
                $r_date['success'] = false;
                $r_date['message'] = '添加鸡汤失败!不存在该管理员!';
            }
            $this->ajaxReturn($r_date);
        }else{
            $this->assign('服务器繁忙，请稍后再试！','',1);
        }
    }
    public function ajax_save_soft_text(){
        if(!empty($_POST)){
            $admin_name = $_POST['sofe_text_admin'];
            $admin = D('tb_manager')->where("manager_name='$admin_name'")->select();
            if($admin){ //如果存在管理员
                $_POST['sofe_text_admin'] = $admin[0]['manager_id'];
                $_POST['soft_text_time'] = time();
                $id = $_POST['id'];
                $data = D('tb_soft_text')->where("soft_text_id=$id")->save($_POST);
                if ($data) {
                    $r_date['success'] = true;
                    $r_date['message'] = '修改鸡汤成功!';
                } else {
                    $r_date['success'] = false;
                    $r_date['message'] = '修改鸡汤失败!请稍后再试!';
                }
            }else{
                $r_date['success'] = false;
                $r_date['message'] = '修改鸡汤失败!不存在该管理员!';
            }
            $this->ajaxReturn($r_date);
        }else{
            $this->assign('服务器繁忙，请稍后再试！','',1);
        }
    }
    public function ajax_add_kefu(){
        if(!empty($_POST)){
            //身份证正则表达式(15位)
            $ID1 = "/^\d{14}(\d|x)$/";
            //身份证正则表达式(18位)
            $ID2 = "/^\d{17}(\d|x)$/";
            //手机号码正则表达式
            $TEL = $g = "/^1[34578]\d{9}$/";
            $kefu = $_POST['customer_service_user'];
            if(!D('tb_customer_service')->where("customer_service_user='$kefu'")->select()){
                if(preg_match( $TEL,$_POST['customer_service_tel'])){ //验证手机号码
                    if(preg_match( $ID1,$_POST['customer_service_id_number']) || preg_match( $ID2,$_POST['customer_service_id_number'])){//验证身份证号码
                        $_POST['customer_service_password'] = md5($_POST['password']);
                        $rand = "";
                        //产生5位数得盐值
                        for ($i = 0 ;$i < 5;$i++){
                            $rand .= mt_rand(0,9);
                        }
                        $_POST['customer_service_sale'] = md5($rand);
                        $_POST['customer_service_password'] =$_POST['customer_service_sale'].$_POST['customer_service_password']; //拼接密码
                        $manger_id = D('tb_customer_service')->add($_POST);
                        if($manger_id){
                            $r_date['success'] = true;
                            $r_date['message'] = '申请客服成功!请待管理员审核！';
                        }else{
                            $r_date['success'] = false;
                            $r_date['message'] = '申请客服失败!请稍后再试!';
                        }
                    }else{
                        $r_date['success'] = false;
                        $r_date['message'] = '申请客服失败!请输入正确的身份证号码!';
                    }
                }else{
                    $r_date['success'] = false;
                    $r_date['message'] = '申请客服失败!请输入正确的手机号码!';
                }
            }else{
                $r_date['success'] = false;
                $r_date['message'] = '申请客服失败!此用户名已存在!请更换用户名！';
            }
            $this->ajaxReturn($r_date);
        }else{

        }
    }
    public function ajax_add_img(){
        if(!empty($_POST)){
            if(D('tb_img')->add($_POST)){
                $r_date['success'] = true;
                $r_date['message'] = '添加首页大图成功！';
            }else{
                $r_date['success'] = true;
                $r_date['message'] = '添加首页大图失败！';
            }
            $this->ajaxReturn($r_date);
        }else{
            $this->error('系统繁忙，请稍后再试！','',3);
        }
    }
    public function ajax_save_img(){
        if(!empty($_POST)){
            $id = $_POST['id'];
            $date = D('tb_img')->where("img_id=$id && is_del='0'")->save($_POST);
            if($date){
                $r_date['success'] = true;
                $r_date['message'] = '修改首页大图成功！';
            }else{
                $r_date['success'] = false;
                $r_date['message'] = '修改首页大图失败！';
            }
            $this->ajaxReturn($r_date);
        }else{
            $this->error('服务器繁忙，请稍后再试！','',3);
        }
    }
    public function ajax_save_pwd(){
        if(!empty($_POST)){
            $login_authority = session('login.login_yd_admin_id'); //取权限
            $login_user = session('login.login_yd_admin_user');
            if($login_authority == 'SA'){
                $data1 = D('tb_manager')->where("manager_user='$login_user'")->select();
                $data_pass = $data1[0]['manager_password'];
                $data_sale = $data1[0]['manager_sale'];
                $now_pass =  $data_sale.md5($_POST['old_pwd']);
                if($now_pass === $data_pass){
                    $_POST['manager_password'] = md5($_POST['new_pwd']);
                    $rand = "";
                    //产生5位数得盐值
                    for ($i = 0 ;$i < 5;$i++){
                        $rand .= mt_rand(0,9);
                    }
                    $_POST['manager_sale'] = md5($rand);
                    $_POST['manager_password'] =$_POST['manager_sale'].$_POST['manager_password']; //拼接密码
                    if(D('tb_manager')->where("manager_user='$login_user'")->save($_POST)){
                        $r_data['success'] = true;
                        $r_data['message'] = '修改密码成功！';
                    }else{
                        $r_data['success'] = false;
                        $r_data['message'] = '服务器繁忙！修改密码失败，请稍后再试！';
                    }
                }else{
                    $r_data['success'] = true;
                    $r_data['message'] = '修改密码失败，请输入正确的旧密码！';
                }
            }else{
                $data1 = D('tb_customer_service')->where("customer_service_user='$login_user'")->select();
                $data_pass = $data1[0]['customer_service_password'];
                $data_sale = $data1[0]['customer_service_sale'];
                $now_pass =  $data_sale.md5($_POST['old_pwd']);
                if($now_pass === $data_pass){
                    $_POST['customer_service_password'] = md5($_POST['new_pwd']);
                    $rand = "";
                    //产生5位数得盐值
                    for ($i = 0 ;$i < 5;$i++){
                        $rand .= mt_rand(0,9);
                    }
                    $_POST['customer_service_sale'] = md5($rand);
                    $_POST['customer_service_password'] =$_POST['customer_service_sale'].$_POST['customer_service_password']; //拼接密码
                    if(D('tb_customer_service')->where("customer_service_user='$login_user'")->save($_POST)){
                        $r_data['success'] = true;
                        $r_data['message'] = '修改密码成功！';
                    }else{
                        $r_data['success'] = false;
                        $r_data['message'] = '服务器繁忙！修改密码失败，请稍后再试！';
                    }
                }else{
                    $r_data['success'] = true;
                    $r_data['message'] = '修改密码失败，请输入正确的旧密码！';
                }
            }
            $this->ajaxReturn($r_data);
        }else{
            $this->error('服务器繁忙！请稍后再试！','',3);
        }
    }
    public function ajax_add_seo(){
        if(!empty($_POST)){
            if(D('tb_seo')->where("seo_id=1")->save($_POST)){
                $r_data['success'] = true;
                $r_data['message'] = '修改页面信息成功！';
            }else{
                $r_data['success'] = false;
                $r_data['message'] = '修改页面信息失败！';
            }
            $this->ajaxReturn($r_data);
        }else{
            $this->error('对不起服务器繁忙，请稍后再试!');
        }

    }
}