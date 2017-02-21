<?php
namespace Back\Controller;
use Think\Controller;
//控制器及相关的方法
class GoodsController extends Controller{
	//列表展示
	function showlist(){
		//数据库是否可以连接使用
		$goods = D('Goods');
		dump($goods);
		$this -> display();
	}
	//添加商品
	function tianjia(){
		$this -> display();
	}
	//修改商品
	function upd(){
		$this -> display();
	}
}