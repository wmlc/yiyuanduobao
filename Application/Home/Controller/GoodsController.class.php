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






}