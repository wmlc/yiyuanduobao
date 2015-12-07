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
class UserController extends Controller {
    //查看幸运码
    public function lucky(){
        $id=$_REQUEST['id'];
        $user_id=$_REQUEST['user_id'];
        $lucky = M("order"); // 实例化User对象
        // 获取ID为3的用户的昵称
        $lucky_number = $lucky->where("goods_id=$id AND user_id=$user_id")->getField('lucky_number');
        //var_dump($lucky_number);
        //exit;
        //$this->assign('goods',$goods_details);
        $this->display ();
    }
    
    
    
}

?>