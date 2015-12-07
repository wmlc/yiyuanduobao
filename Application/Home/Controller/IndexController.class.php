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
class IndexController extends Controller {
    public function index(){
        $goods_one = M("Goods")->where('type=1')->order('creat_time asc')->find();
        if($goods_one==''){
            $goods_one = M("Goods")->where('type=0')->order('creat_time asc')->find();
            $id=$goods_one['id'];
            $date['type']=1;
            $date['begin_time'] = get_gmtime();
            $date['issue'] = date("Ym",get_gmtime()).$id;
            // 要修改的数据对象属性赋值
            M("Goods")->where("id=$id")->save($date); // 根据条件更新记录
            $goods_one = M("Goods")->where('type=1')->order('creat_time asc')->find();
        }
        $percent=round(($goods_one['pay_number']/$goods_one['number'])*100).'%';
        $remainder=$goods_one['number']-$goods_one['pay_number'];
        if(($goods_one['begin_time']!=0)&&($goods_one['begin_time']!='')){
            $goods_one['begin_time']=date("Y-m-d H:i:s",$goods_one['begin_time']);
        }
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