<?php
// +----------------------------------------------------------------------
// | 仿网易一元夺宝购物系统
// +----------------------------------------------------------------------
// | Author: 王茂林 (1290800466@qq.com)
// +----------------------------------------------------------------------
// | Tel: 18612446985
// +----------------------------------------------------------------------
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    //商品详情
    public function details(){
        $id=$_REQUEST['id'];
        $Goods = M("Goods"); // 实例化User对象
        // 获取ID为3的用户的昵称
        $goods_details = $Goods->where("id=$id")->getField('description');
        $goods_details=htmlspecialchars_decode($goods_details);
        $this->assign('goods',$goods_details);
        $this->display ();
    }
    //往期查询
    public function past(){
        //$id=$_REQUEST['id'];
        $Goods = M("Goods"); // 实例化User对象
        // 获取ID为3的用户的昵称
        $goods_past = $Goods->where('type=2')->select();
        
        foreach ($goods_past as $key=>$val){
            if($goods_past["$key"]['publish_time']!=0){
                $goods_past["$key"]['publish_time']= date("Y-m-d H:i:s", $goods_past["$key"]['publish_time']);
            }
            $User = M("User"); // 实例化User对象
            $user_id=$goods_past["$key"]['user_id'];
            // 获取ID为3的用户的昵称
            $User_name = $User->where("id='$user_id'")->getField('name');
            $User_image = $User->where("id='$user_id'")->getField('image');
            $goods_past["$key"]['user'] = $User_name;
            $goods_past["$key"]['head'] = $User_image;
            
        }
        
        //$notice_sn = to_date(NOW_TIME,"Ymd").rand(100,999);
        //var_dump($notice_sn);
        $this->assign('goods_past',$goods_past);
        $this->display ();
    }
    
    //往期详情
    public function past_details(){
        $issue=$_REQUEST['issue'];
       // var_dump($issue);
       // exit;
        $goods_one = M("Goods")->where("issue='$issue'")->find();
        $percent=round(($goods_one['pay_number']/$goods_one['number'])*100).'%';
        $remainder=$goods_one['number']-$goods_one['pay_number'];
        if(($goods_one['begin_time']!=0)&&($goods_one['begin_time']!='')){
            $goods_one['begin_time']=date("Y-m-d H:i:s",$goods_one['begin_time']);
        }
        if($goods_one['publish_time']){
            $goods_one['publish_time']=date("Y-m-d H:i:s",$goods_one['publish_time']);
        }
        if($goods_one['end_time']){
            $goods_one['end_time']=date("Y-m-d H:i:s",$goods_one['end_time']);
        }
        
        $User = M("User"); // 实例化User对象
        $user_id=$goods_one['user_id'];
        // 获取ID为3的用户的昵称
        $User_name = $User->where("id='$user_id'")->getField('name');
        $User_image = $User->where("id='$user_id'")->getField('image');
        $goods_one['user'] = $User_name;
        $goods_one['head'] = $User_image;
        
        $this->assign('goods',$goods_one);
        $this->assign('percent',$percent);
        $this->assign('remainder',$remainder);
        $now_time=date('Y-m-d',time());
        $this->assign('now_time',$now_time);
        
        
        $id=$goods_one['id'];
        $pay_list = M("order")->where("is_paid=1 AND goods_id=$id")->select();
        foreach ($pay_list as $key=>$val){
            if(($pay_list["$key"]['pay_time']!=0)&&($pay_list["$key"]['pay_time']!='')){
                $pay_list["$key"]['pay_time']= date("Y-m-d H:i:s", $pay_list["$key"]['pay_time']);
            }
            
            $Userinfo = M("User"); // 实例化User对象
            $user_id=$pay_list["$key"]['user_id'];
            // 获取ID为3的用户的昵称
            $Userinfo_name = $Userinfo->where("id='$user_id'")->getField('name');
            $Userinfo_image = $Userinfo->where("id='$user_id'")->getField('image');
            $pay_list["$key"]['user'] = $Userinfo_name;
            $pay_list["$key"]['head'] = $Userinfo_image;
        
        }
        
       
        
        $this->assign('pay_list',$pay_list);
        //user_id  此处要填写session值
        $user = M("order")->where("is_paid=1 AND goods_id=$id AND user_id=1")->select();
        $this->assign('user',$user);
        
        $this->display ();
    }






}