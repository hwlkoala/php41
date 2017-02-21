<?php
namespace Back\Controller;
use Think\Controller;

//给后台back创建第一个控制器及具体内容
class AdminController extends Controller{
	public function login(){
		$this -> display();
	}
}