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
    
    //会员列表
    public function user_list(){
        if (!session('admin_info.name')) {
            $this->redirect('Admin/login');
        }
        $user_list = M("User")->select();
        foreach ($user_list as $key=>$val){
            if($user_list["$key"]['login_time']){
                $user_list["$key"]['login_time']= date("Y-m-d H:i:s", $user_list["$key"]['login_time']);
            }
        
        }
        
        $this->assign("user_list",$user_list);
        $this->display();
        
        
    }
    
    
    
    
    
    
    
    
}