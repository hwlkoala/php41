<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class TestController extends Controller{

/*   public function read($id) {
    	echo 'id='.$id;   	
        $this->display();
    }*/
/*   public function archive($year='2013',$month='01'){
   	echo 'year='.$year.'&month='.$month;
   }*/
   
   public function read(){
   	//ajax返回
   	//ajaxReturn方法调用实例
   	   //	$data="ok";
   	//返回数组
   		//$data['status']=1;
   		//$data['content']='content';  
     	//$this->ajaxReturn($data);//默认采用JSON格式返回数据
     	//$this->ajaxReturn($data,'xml');//指定XML格式返回数据
     	//$Read=M('Read');     	
     	//$data=array('book_name'=>'SAP开发');
	
     //	$result=$Read->add($data);
     	//if($result){
     	//	$this->success('新增成功','./write');
     	//}else{
     	//	$this->error('新增失败');
     	//}
     	if(!empty($_POST)){     		
     		//echo "<script> alert('请输入书的名称！！'); history.back;</script>";
     	//}else{
     		$read=M('Read');
        //1.create方法     		
/*     		$read->create();
     		$result=$read->add();*/
     		
     	//2.	
     /*		$data=array('book_name'=>$_POST['bk_name']);   	
     		$result=$read->add($data);*/
     		
     	//3.
     		$data["book_name"]=$_POST["book_name"];
     		$result=$read->add($data);
     		
     		if($result){
     			$this->success('新增成功','./write');
     		}else{
     			$this->error('新增失败');
     		} 		
     	}
     	    	     	$this->display();	
   }
   
   public function write(){
   	$read=M('Read');
   	$all=$read->select();
   	//dump($all);	
   	$this->assign('all',$all);
   	$this->display();
   }
}
?>