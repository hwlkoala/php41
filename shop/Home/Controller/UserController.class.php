<?php
namespace Home\Controller; //创建会员控制器 及相关方法
use Think\Controller;
class UserController extends Controller{
	public function login(){
		$this -> display();
	}
	public function regist(){
		$this -> display();
	}
}