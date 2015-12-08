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

    //添加商品
	public function add()
	{

	    $adm_session = session('admin_info');
	    if($adm_session == '')
	    {
	        //尚未登录
	        $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__.'/Home/Admin/login');
	    }
	    
		$this->display();
	}
	
	//将添加商品插入数据库
	public function insert() {
	    $adm_session = session('admin_info');
	    if($adm_session == '')
	    {
	        //尚未登录
	        $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__.'/Home/Admin/login');
	    }
	    $data = M("Goods")->create ();

	    //开始验证有效性
	    $this->assign("jumpUrl",u(MODULE_NAME."/add"));
	    if(!check_empty($data['name']))
	    {
	        $this->error("请输入商品名称");
	    }
	    if(!check_empty($data['total_price']))
	    {
	        $this->error("商品价格不能为空");
	    }
	    if(!check_empty($data['image']))
	    {
	        $this->error("请上传商品图片");
	    }
	    if(!check_empty($data['unit_price']))
	    {
	        $this->error("每份价格不能为空");
	    }
	    if(!check_empty($data['number']))
	    {
	        $this->error("请输入商品份数");
	    }
	    if(!check_empty($data['description']))
	    {
	        $this->error("请输入商品图文详情");
	    }
 	
	    $data['description'] = addslashes(trim(valid_tag($data['description'])));
	    $data['pay_number'] = 0;
	    $data['begin_time'] = 0;
	    $data['end_time'] = 0;
	    $data['type'] = 0;
	    $data['creat_time'] = get_gmtime();
	    // 添加数据

	    $list=M("Goods")->add($data);
	
	    if (false !== $list) {
	        //成功提示
	        $this->success('商品添加成功',__APP__.'/Home/Index/main');
	    } else {
	        //错误提示
	        $this->error('商品添加失败');
	    }
	}

	//编辑商品
	public function edit()
	{
	
	    $adm_session = session('admin_info');
	    if($adm_session == '')
	    {
	        //尚未登录
	        $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__.'/Home/Admin/login');
	    }
	    $goods_id = $_REQUEST['id'];
	    
	    $Goods = M("Goods"); // 实例化User对象
	    // 获取ID为3的用户的昵称
	    $goods_info = $Goods->where("id=$goods_id")->find();
	    
	    $this->assign("goods_info",$goods_info);
	     
	    $this->display();
	}
	
	//更新商品
	public function update()
	{
	
	    $adm_session = session('admin_info');
	    if($adm_session == '')
	    {
	        //尚未登录
	        $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__.'/Home/Admin/login');
	    }
	    $data = M("Goods")->create ();

	    //开始验证有效性
	    //$this->assign("jumpUrl",u(MODULE_NAME."/add"));
	    if(!check_empty($data['name']))
	    {
	        $this->error("请输入商品名称");
	    }
	    if(!check_empty($data['total_price']))
	    {
	        $this->error("商品价格不能为空");
	    }
	    if(!check_empty($data['image']))
	    {
	        $this->error("请上传商品图片");
	    }
	    if(!check_empty($data['unit_price']))
	    {
	        $this->error("每份价格不能为空");
	    }
	    if(!check_empty($data['number']))
	    {
	        $this->error("请输入商品份数");
	    }
	    if(!check_empty($data['description']))
	    {
	        $this->error("请输入商品图文详情");
	    }
 	
	    $data['description'] = addslashes(trim(valid_tag($data['description'])));
	    $goods_id = $_REQUEST['id'];
	    $list=M("Goods")->where("id=$goods_id")->save($data); // 根据条件更新记录
	    if (false !== $list) {
	        //成功提示
	        $this->success('商品修改成功',__APP__.'/Home/Index/main');
	    } else {
	        //错误提示
	        $this->error('商品修改失败');
	    }
	}

	
	//编辑商品
	public function delete()
	{
	
	    $adm_session = session('admin_info');
	    if($adm_session == '')
	    {
	        //尚未登录
	        $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__.'/Home/Admin/login');
	    }
	    $goods_id = $_REQUEST['id'];
	     
	    $Goods = M("Goods"); // 实例化User对象
	    $result=$Goods->where("id=$goods_id")->delete(); // 删除id为 $goods_id 的商品数据
	    if ($result== 1) {
	        //成功提示
	        $this->success('商品删除成功',__APP__.'/Home/Index/main');
	    } else {
	        //错误提示
	        $this->error('商品删除失败');
	    }
	}
	
	//添加商品幸运号
	public function input_lucky()
	{
	
	    $adm_session = session('admin_info');
	    if($adm_session == '')
	    {
	        //尚未登录
	        $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__.'/Home/Admin/login');
	    }
	    $goods_id = $_REQUEST['id'];
	    $Goods = M("Goods"); // 实例化User对象
	    // 获取ID为3的用户的昵称
	    $goods_info = $Goods->where("id=$goods_id")->find();
	     
	    $this->assign("goods_info",$goods_info);
	    
	     
	    $this->display();
	}
	
	
	//更新商品幸运号
	public function lucky_insert()
	{
	
	    $adm_session = session('admin_info');
	    if($adm_session == '')
	    {
	        //尚未登录
	        $this->error('您尚未登陆，正在跳转到登陆页面。。。',__APP__.'/Home/Admin/login');
	    }
	    $data = M("Goods")->create ();
	
	    //开始验证有效性
	    //$this->assign("jumpUrl",u(MODULE_NAME."/add"));
	    if(!check_empty($data['lucky_number']))
	    {
	        $this->error("幸运号不能为空！");
	    }
	    $goods_id = $_REQUEST['id'];
	    $list=M("Goods")->where("id=$goods_id")->save($data); // 根据条件更新记录
	    if (false !== $list) {
	        //成功提示
	        $this->success('幸运号保存成功',__APP__.'/Home/Index/main');
	    } else {
	        //错误提示
	        $this->error('幸运号保存失败');
	    }
	}
	
	
	//商品购买列表
	public function pay_list()
	{
	    if (!session('admin_info.name')) {
	        $this->redirect('Admin/login');
	    }
	    $goods_id=$_REQUEST['id'];
	    $pay_list = M("order")->where("goods_id= '$goods_id' AND is_paid=1")->select();
	    $id=$pay_list['0']['goods_id'];
	    if($id){
	        $pay_list['0']['name'] = M("goods")->where("id=$id")->getField('name');
	        $this->assign("pay_name",$pay_list['0']['name']);
	    }
	    foreach ($pay_list as $key=>$val){
	        if($pay_list["$key"]['pay_time']!=0){
	            $pay_list["$key"]['pay_time']= date("Y-m-d H:i:s", $pay_list["$key"]['pay_time']);
	        }
	        $user_id=$pay_list["$key"]['user_id'];
	        if($user_id){
	            $pay_list["$key"]['user'] = M("user")->where("id='$user_id'")->getField('name');
	        }
	    }

	    $this->assign("pay_list",$pay_list);
	    $this->display();
	}
	
	
	
	
	

}