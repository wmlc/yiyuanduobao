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
class PayController extends Controller {
    
    //参加夺宝
    public function join()
    {
    
        /* $user_session = session('user_info');
        if($user_session == '')
        {
            //尚未登录
            $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__);
        } */
        
        $id=$_REQUEST['id'];
        $Goods = M("Goods"); // 实例化User对象
        // 获取ID为  $_REQUEST['id'] 的用户的昵称
        $goods_info = $Goods->where("id=$id")->find();
        $goods_info['remainder']=$goods_info['number']-$goods_info['pay_number'];
        $this->assign('goods',$goods_info);
        $this->display();
    }
    
    //支付
    public function pay()
    {
    
        /* $user_session = session('user_info');
        if($user_session == '')
        {
            //尚未登录
            $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__);
        } */
        
        $id=$_REQUEST['id'];
        $number=$_REQUEST['number'];
        $Goods = M("Goods"); // 实例化User对象
        // 获取ID为  $_REQUEST['id'] 的用户的昵称
        $goods_info = $Goods->where("id=$id")->find();
        $goods_info['buy_number'] = $number;
        $goods_info['total_money']=$goods_info['unit_price']*$goods_info['buy_number'];
        $goods_info['remainder']=$goods_info['number']-$goods_info['pay_number'];
        if($goods_info['remainder']==0){
            $this->error('您选择的商品已经达到指定购买人次，您已无法购买！');
        }
        if($number>$goods_info['remainder']){
            $this->error('您选择的商品购买人次超过商品剩余人次，请重新选择！');
        }
        $this->assign('goods',$goods_info);
        $this->display();
    }
    
    public function go_pay()
    {
    
        /* $user_session = session('user_info');
         if($user_session == '')
         {
         //尚未登录
         $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__);
         } */
    
        $id=$_REQUEST['id'];
        //$Goods = M("Goods"); // 实例化User对象
        // 获取ID为  $_REQUEST['id'] 的用户的昵称
        //$goods_info = $Goods->where("id=$id")->find();
       
        $Goods = M("unique"); // 实例化User对象
        $d=100;
        for($i=0;$i<$d;$i++){
                $data['lucky_number']['key'."$i"] = $i;
            
        }
        
        $data['lucky_number'] = serialize($data['lucky_number']);
        // 获取ID为  $_REQUEST['id'] 的用户的昵称
        //$goods_info = $Goods->where("goods_id=9")->save($data);
        $goods_info = $Goods->where("goods_id=9")->getField('lucky_number');
        //unserialize — 从已存储的表示中创建 PHP 的值
        var_dump($goods_info);
        echo "<br/>";echo "<br/>";
        $goods_info=unserialize($goods_info);
        var_dump($goods_info);
        echo "<br/>";echo "<br/>";
        $vale = 23;
        $lu_number=5;
        for($i=0;$i<$lu_number;$i++){
            $goods_info = $Goods->where("goods_id=9")->getField('lucky_number');
            //unserialize — 从已存储的表示中创建 PHP 的值
            
            
            $goods_info=unserialize($goods_info);
            var_dump($goods_info);
            echo "<br/>";echo "<br/>";
            do{
                $number = rand(0,$d-1);
               // echo "$number";echo "<br/>";
            }while($goods_info['key'."$number"]=='');
            echo "$number";
            $number1=$number1.$number;
            echo "<br/>";echo "<br/>";
            unset($goods_info['key'."$number"]);
            $data['lucky_number'] = serialize($goods_info);
            $goods_info = $Goods->where("goods_id=9")->save($data);
        }
        //$data['lucky_number'] = serialize($goods_info);
        //$goods_info = $Goods->where("goods_id=9")->save($data);
        /* if($goods_info['key'."$vale"]!=''){
            unset($goods_info['key'."$vale"]);
            var_dump($goods_info);
            echo "<br/>";echo "<br/>";
            echo 'key='.$goods_info['key'."$vale"];
            echo "<br/>";echo "<br/>";
            $data['lucky_number'] = serialize($goods_info);
            // 获取ID为  $_REQUEST['id'] 的用户的昵称
            $goods_info = $Goods->where("goods_id=9")->save($data);
        }else{
            echo "该中奖号重复！";
            echo "<br/>";echo "<br/>";
        } */
        //if
        /* $goods_info['buy_number'] = $number;
        $goods_info['total_money']=$goods_info['unit_price']*$goods_info['buy_number'];
        $goods_info['remainder']=$goods_info['number']-$goods_info['pay_number'];
        if($goods_info['remainder']==0){
            $this->error('您选择的商品已经达到指定购买人次，您已无法购买！');
        }
        if($number>$goods_info['remainder']){
            $this->error('您选择的商品购买人次超过商品剩余人次，请重新选择！');
        }
        $this->assign('goods',$goods_info); */
        $this->display();
    }
    
    
    
    
}