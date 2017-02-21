<?php
namespace Home\Model;
use Think\Model;

class UserModel extends CommonModel{
/*    public function getinfo() {
    	return 'hello world';
    }*/
    
 protected $_scope=array(
 /**
  * '命名范围的标识名'=>array(
  * '属性'=>'值'，
  * 支持的方法有：where limit field order table page having group distinct
  * )
  */
  
  'jige'=>array(
 	 'where'=>array(
  		'score'=>array('elt',60),
 	 ),
  	'order'=>'id asc',
  ),
  'ziduan'=>array(
  		'field'=>'name,score'
  	)
 );
 
/* public function _before_insert(&$data, $option){
 	if($_FILES['u_file']['error']==0){
 		$ret=upload();
 		dump($ret);
 		$data['img']=$ret['imgs'];
 	}
 }*/
    
}
?>