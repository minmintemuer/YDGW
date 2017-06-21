<?php
/**
 * Created by PhpStorm.
 * User: czj
 * Date: 2017/3/23
 * Time: 0:57
 */

namespace Home\Controller;
use Think\Controller;

class AjaxController extends Controller
{
    public function ajax_add_order(){
        if(!empty($_POST)){
            //身份证正则表达式(15位)
            $ID1 = "/^\d{14}(\d|x)$/";
            //身份证正则表达式(18位)
            $ID2 = "/^\d{17}(\d|x)$/";
            //手机号码正则表达式
            $TEL = $g = "/^1[34578]\d{9}$/";
            if(preg_match( $TEL,$_POST['tourists_tel'])){
                if(preg_match( $ID1,$_POST['tourists_id_number']) or preg_match( $ID2,$_POST['tourists_id_number'])){
                    $id1 = D('tb_tourists')->add($_POST);
                    if($id1){ //先保存游客信息
                        $id2 = $_POST['id'];
                        $data = array(
                            'class_id' =>  $id2,
                            'tourists_id' =>  $id1,
                        );
                       if(D('tb_order')->add($data)){
                           $r_date['success'] = true;
                           $r_date['message'] = '预定课程成功！';
                       }else{
                           $r_date['success'] = false;
                           $r_date['message'] = '预定课程失败！请稍后再试!';
                       }
                    }else{
                        $r_date['success'] = false;
                        $r_date['message'] = '预定课程失败！请稍后再试!';
                    }
                }else{
                    $r_date['success'] = false;
                    $r_date['message'] = '身份证错误！请输入正确的身份证!';
                }
            }else{
                $r_date['success'] = false;
                $r_date['message'] = '手机号码错误！请输入正确的手机号码!';
            }
            $this->ajaxReturn($r_date);
        }else{
            $this->error('服务器繁忙，请稍后再试！','',3);
        }
    }
}