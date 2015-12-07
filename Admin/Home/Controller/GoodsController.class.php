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
	
	public function insert() {
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






}