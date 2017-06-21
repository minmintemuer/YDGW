<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
   public function admin_login(){
       layout(false);
       if(!empty(cookie('think1'))){
           $this->assign('user',cookie('think1'));
           $this->assign('pwd',cookie('think2'));
       }
       $this->display();
   }
   public function login_action(){
       if(!empty($_POST)){
           $pass = $_POST['login_yd_admin_password'];
           $login_id =$_POST['login_yd_admin_user']; //获取登录用户名
           $chenggong = U('Admin/Index/index','','');
           if($_POST['login_yd_admin_id'] === 'SA'){
               $_POST['login_yd_admin_password'] = md5($_POST['login_yd_admin_password']);
                $login = D('tb_manager')->where("manager_user='$login_id'")->find();  //跟据登录名查找相关数据
                $pwd = $login['manager_sale'].$_POST['login_yd_admin_password']; //拼接密码
               if($pwd === $login['manager_password'] ){ //注册SESSION
                    session('login',$_POST);
                    $save_time = 3600*24*3;
                    cookie('think1',"$login_id",$save_time);
                    cookie('think2',"$pass",$save_time);
                   $this->success('登陆成功', $chenggong,3);
               }else{
                   $this->error('用户名或密码错误！请正确输入用户名,密码,正确选择用户类别！','',3);
               }
           }elseif($_POST['login_yd_admin_id'] === 'CS'){ //如果为客服
               $_POST['login_yd_admin_password'] = md5($_POST['login_yd_admin_password']);
               $login = D('tb_customer_service')->where("customer_service_user='$login_id'")->find();  //跟据登录名查找相关数据
               $pwd = $login['customer_service_sale'].$_POST['login_yd_admin_password']; //拼接密码
                   if($pwd === $login['customer_service_password']){  //注册SESSION
                       if($login['is_shenhe'] === '1'){
                           if($login['is_use'] === '1'){
                               session('login',$_POST);
                               $save_time = 3600*24*3;
                               cookie('think1',"$login_id",$save_time);
                               cookie('think2',"$pass",$save_time);
                               $this->success('登陆成功', $chenggong,3);
                           }else{
                               $this->error('登录失败！您的账号已经被停用！请联系管理员启用该用户！','',3);
                           }
                       }else{
                           $this->error('登录失败！您的账号还未通过管理员审核！请即使联系管理员！','',3);
                       }
                   }else{
                       $this->error('用户名或密码错误！请正确输入用户名,密码,正确选择用户类别！','',3);
                   }
           }else{
               $this->error('服务器繁忙！请稍后再试！','',1);
           }
       }else{
            $this->error('服务器繁忙！请稍后再试！','',1);
       }
   }
   public function rg(){
       layout(false);
       $this->display();
   }
    public function arae_top(){
        $this->display();
    }
    public function comment_top(){
        $this->display();
    }
    public function jianjie_top(){
        $this->display();
    }
    public function jitang_top(){
        $this->display();
    }
    public function kefu_top(){
        $this->display();
    }
    public function news_top(){
        $this->display();
    }
    public function pro_top(){
        $this->display();
    }
    public function user_top(){
        $this->display();
    }
    public function zhuanti_top(){
        $this->display();
    }
    public function del($table,$pk,$id){
        $data = array(
            'is_del' => 1
        );
     if(D($table)->where("$pk=$id")->save($data)){
         $this->success('删除信息成功！','',1);
     }else{
         $this->error('数据库出错！','',1);
     }
    }
    public function shangjia($table,$pk,$id){
        $show = array('is_show'=> 1 );
        $data = D($table)->where("is_show = '1'")->select();
        $data = count($data);
        if($data < 4){
            if(D($table)->where("$pk=$id")->save($show)){
                $this->success('展示在首页成功！首页必须显示4条信息','',1);
            }else{
                 $this->error('数据库出错！','',1);
            }
        }else{
            $this->error('展示在首页失败！首页只能显示4条信息','',3);
        }
    }
    public function xiajia($table,$pk,$id){
        $show = array('is_show'=> 0 );

        if(D($table)->where("$pk=$id")->save($show)){
            $this->success('把首页的该信息隐藏成功！','',1);
        }else{
            $this->error('数据库出错！','',3);
        }
    }
    public function shangjiejian($table,$pk,$id){
        $show = array('is_show'=> 1 );
        $data = D($table)->where("is_show = '1'")->select();
        $data = count($data);
        if($data < 1){
            if(D($table)->where("$pk=$id")->save($show)){
                $this->success('展示在首页成功！简介只能显示一条！','',1);
            }else{
                $this->error('数据库出错！','',1);
            }
        }else{
            $this->error('展示在首页失败！简介必须显示一条！','',3);
        }
    }
    public function xiajianjie($table,$pk,$id){
        $show = array('is_show'=> 0 );
        if(D($table)->where("$pk=$id")->save($show)){
            $this->success('把首页的该信息隐藏成功！','',1);
        }else{
            $this->error('数据库出错！','',3);
        }
    }
    public function useKefu($id){
        $show = array('is_use'=> 1 );
        if(D('tb_customer_service')->where("customer_service_id=$id")->save($show)){
            $this->success('启用客服成功！','',1);
        }else{
            $this->error('数据库出错！','',3);
        }
    }
    public function unUseKefu($id){
        $show = array('is_use'=> 0 );
        if(D('tb_customer_service')->where("customer_service_id=$id")->save($show)){
            $this->success('禁用客服成功！','',1);
        }else{
            $this->error('数据库出错！','',3);
        }
    }
    public function chuli($table,$pk,$id){
        $login_user = session('login_yd_admin_user');//管理员登录名
        $login_id = session('login_yd_admin_id');//管理员权限
        if($login_id === 'SA' or $login_id === 'PA'){
            $data = D('tb_manager')->where("manager_user=$login_user")->select();
            $admin_id = '0';
        }else{
            $data = D('tb_customer_service')->where("customer_service_user=$login_user")->select();
            $admin_id= $data[0]['customer_service_id'];
        }
        $show = array( //要加入SESSION的判断和使用
            'is_chuli'=> 1,
            'customer_service_id' => "$admin_id",
        );
        if(D($table)->where("$pk=$id")->save($show)){
            $this->success('没有制作该功能，因为没有没有判断SESSION！','',1);
        }else{
            $this->error('数据库出错！','',3);
        }
    }
    public function logout(){
        session(null);
        $tiaozhuan = U('Admin/Public/admin_login','','');
        $this->success('退出系统成功!',$tiaozhuan,3);
    }
    public function shenhe($id){
        $data = array(
          'is_shenhe' => 1,
        );
        if(D('tb_customer_service')->where("customer_service_id=$id")->save($data)){
            $this->success('审核管理成功！','',1);
        }else{
            $this->error('审核管理失败！','',3);
        }

    }
}
