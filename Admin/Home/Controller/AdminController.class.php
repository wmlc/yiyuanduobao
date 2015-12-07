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
class AdminController extends Controller {
    //登陆页面
    public function login(){				
		//验证是否已登录
		//管理员的SESSION
		$adm_session = session('admin_info.name');
		if($adm_session != '')
		{
			//已登录
			$this->redirect(u("Index/index"));			
		}
		else
		{
		    
			$this->display();
		}
	}
	
    //生成验证码
	public function verify(){
	    $Verify = new \Think\Verify();
	    $Verify->fontSize = 12;
	    $Verify->length   = 4;
	    $Verify->useNoise = false;
	    $Verify->useCurve = false;
	    $Verify->codeSet = '0123456789';
	    $Verify->entry('verify_code');
	}
	
    //登录函数
    public function do_login()
    
    {		
        $adm_session = session('admin_info.name');
        if($adm_session != '')
        {
            //已登录
            $this->redirect(u("Index/index"));
        }
    	$adm_name = trim($_REQUEST['adm_name']);
    	$adm_password = trim($_REQUEST['adm_password']);
    	if($adm_name == '')
    	{
    	    $this->error('用户名不能为空');
    	}
    	if($adm_password == '')
    	{
    	    $this->error('密码不能为空');
    	}
    	$Verify = new \Think\Verify();
    	$adm_verify=$Verify->authcode1($_REQUEST['adm_verify']);
    	if(session('verify_code.verify_code') != $adm_verify) {
    	    $this->error('验证码错误');
    	}
		$condition['adm_name'] = $adm_name;
		$adm_data = M("Admin")->where($condition)->find();
		if($adm_data) //有用户名的用户
		{
			if($adm_data['adm_password']!=md5($adm_password))
			{
				$this->error('账号或密码错误，请重新输入');
			}
			else
			{
				//登录成功
			    session('admin_info.name',$adm_data['adm_name']);  //设置session
			    session('admin_info.id',$adm_data['id']);  //设置session
				$this->success('登陆成功，正在跳转！',__APP__.'/Home/Index/index');
			}
		}
		else
		{
			$this->error('账号或密码错误，请重新输入');
		}
    }

    
    //登出函数
    public function do_loginout()
    {
        //验证是否已登录
        //管理员的SESSION
        $adm_session = session('admin_info');
       // $adm_id = intval($adm_session['adm_id']);
    
        if($adm_session == '')
        {
            //尚未登录
            $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__.'/Home/Admin/login');
        }
        else
        {
            session(null); // 清空当前的session
            $this->success('注销成功！',__APP__.'/Home/Admin/login');
        }
    }
    
    
    
    
}    
    
?>