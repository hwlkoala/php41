<?php
namespace Back\Controller;
use Think\Controller;

//控制器及具体操作方法

class IndexController extends Controller{
	public function head(){
		$this -> display();
	}
	public function left(){
		$this -> display();
	}
	public function right(){
		$this -> display();
	}
	public function index(){
		$this -> display();
	}
}