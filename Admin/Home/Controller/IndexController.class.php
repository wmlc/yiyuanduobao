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
    //首页
    public function index(){
        //echo phpinfo();
        //session('user_info.name','123');
        if (!session('admin_info.name')) {
            $this->redirect('Admin/login');
        }
        $this->display();
    }
    
    
    
    
    //框架头
    public function top()
    {
        if (!session('admin_info.name')) {
            $this->redirect('Admin/login');
        }
        $this->display();
    }
    
    //默认框架主区域
    public function main()
    {
        if (!session('admin_info.name')) {
            $this->redirect('Admin/login');
        }
        $goods_list = M("Goods")->select();
        foreach ($goods_list as $key=>$val){
            if($goods_list["$key"]['creat_time']!=0){
                $goods_list["$key"]['creat_time']= date("Y-m-d H:i:s", $goods_list["$key"]['creat_time']);
            }
            if($goods_list["$key"]['type']==0){
                $goods_list["$key"]['type']='未开始';
            }elseif ($goods_list["$key"]['type']==1){
                $goods_list["$key"]['type']='售卖中';
            }else{
                $goods_list["$key"]['type']='已结束';
            }
            if($goods_list["$key"]['end_time']!=0){
                $goods_list["$key"]['end_time']= date("Y-m-d H:i:s", $goods_list["$key"]['end_time']);
            }
            if($goods_list["$key"]['begin_time']!=0){
                $goods_list["$key"]['begin_time']= date("Y-m-d H:i:s", $goods_list["$key"]['begin_time']);
            }
            $user_id=$goods_list["$key"]['user_id'];
            if($user_id){
                $goods_list["$key"]['user'] = M("user")->where("id='$user_id'")->getField('name');
            }
            
        }
        
        $this->assign("goods_list",$goods_list);
        $this->display();
    }

    
    
    
}