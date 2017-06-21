<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        $page_information = D('tb_seo')->select();
        $this->assign('seo',$page_information);
    }
    public function index(){
        $data = D('tb_img')->where("is_del='0' && is_show ='1'")->select(); //查询首页大图
        $data[0]['biaoji'] = 1;
        $hyzx = D('tb_news')->where("is_del='0' && is_show ='1'")->limit(4)->select(); //查询行业资讯（新闻）4条记录
        /* 涉及到富文本内容，不好操作 */
//        foreach ($hyzx as $k => $v){
//           foreach($v as $kk =>$vv){
//              if($kk == "news_content"){
//                  //截取数据
//                  if(mb_strlen($vv)>90){
//                      $hyzx[$k][$kk] = mb_substr($vv,0,90,'UTF-8')."...";
//                  }
//              }
//           }
//        }
        $activety = D('tb_activety')->where("is_del='0' && is_show ='1'")->select(); //查询活动信息
        $activety[0]['biaoji'] = 1;
        $al = D('tb_soft_text')->where("is_del='0' && is_show ='1'")->limit(4)->select(); //查询案例信息 4条
        $this->assign('al',$al);
        $this->assign('activety',$activety);
        $this->assign('data',$data);
        $this->assign('hyzx',$hyzx);
        $this->display();
    }
    public function allb(){ //案例列表

        $db = D('tb_soft_text');
        $num = $db->where("is_del='0'")->count();
        $page = new \Think\Page($num,8);
        $show       = $page->show();// 分页显示输出
        $list = $db->where('is_del="0"')->order('soft_text_time desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function alxq($id){
        //案例详情
        $data = D('tb_soft_text')->where("is_del='0' && soft_text_id='$id'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function gsjj(){
        //公司简介
        $data = D("tb_introduction")->where("is_del='0'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function gshd(){
        //公司活动
        $db = D('tb_activety');
        $num = $db->where("is_del='0'")->count();
        $page = new \Think\Page($num,4);
        $show       = $page->show();// 分页显示输出
        $list = $db->where('is_del="0"')->order('activety_time desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function hdxq($id){
        //活动详情
        $data = D('tb_activety')->where("is_del = '0' && activety_id='$id'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function hyzx(){
        //行业资讯
        $db = D('tb_news');
        $num = $db->where("is_del='0'")->count();
        $page = new \Think\Page($num,8);
        $show       = $page->show();// 分页显示输出
        $list = $db->where('is_del="0"')->order('news_time desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function jsfc(){
        //教师风采
        $db = D('tb_teacher');
        $num = $db->where("is_del='0'")->count();
        $page = new \Think\Page($num,8);
        $show       = $page->show();// 分页显示输出
        $list = $db->where('is_del="0"')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function jsxq($id){
        //教师详情
        $data = D('tb_teacher')->where("is_del = '0' && teacher_id = '$id'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function kcjj(){
        //课程简介
        $db = D('tb_class');
        $num = $db->where("is_del='0'")->count();
        $page = new \Think\Page($num,8);
        $show   = $page->show();// 分页显示输出
        $list = $db->where('is_del="0"')->order('class_img desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function kcxq($id){
        //课程详情
        $data = D('tb_class')->where("class_id='$id' && is_del = '0'")->select();
        $teacher_name = $data[0]['class_teacher'];
        $teacher = D('tb_teacher')->where("teacher_name='$teacher_name'")->select();
        $teacher_id = $teacher[0]['teacher_id'];
        $data[0]['teacher_id'] = $teacher_id;
        $this->assign('data',$data);
        $this->display();
    }
    public function kcyd($id){
        //课程预定
        $data = D('tb_class')->where("class_id='$id' && is_del = '0'")->select();
        $teacher_name = $data[0]['class_teacher'];
        $teacher = D('tb_teacher')->where("teacher_name='$teacher_name'")->select();
        $teacher_id = $teacher[0]['teacher_id'];
        $data[0]['teacher_id'] = $teacher_id;
        $this->assign('data',$data);
        $this->display();
    }
    public function zxxq($id){
        //资讯详情
        $data = D('tb_news')->where("news_id='$id' && is_del = '0'")->select();
        $sd = $data[0]['news_hits'];
        $save_data = array(
            'news_hits' => $sd+1,
        );
        D('tb_news')->where("news_id='$id' && is_del = '0'")->save($save_data);
        $this->assign('data',$data);
        $this->display();
    }
}