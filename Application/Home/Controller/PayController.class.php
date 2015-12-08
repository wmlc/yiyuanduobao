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
    
        $adm_session = session('admin_info');
        if($adm_session == '')
        {
            //尚未登录
            $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__.'/Home/Admin/login');
        }
         
        $this->display();
    }
    
    //支付
    public function pay()
    {
    
        $adm_session = session('admin_info');
        if($adm_session == '')
        {
            //尚未登录
            $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__.'/Home/Admin/login');
        }
         
        $this->display();
    }
    
    
    
    
}