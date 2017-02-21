<?php

namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class UserController extends Controller  {

    function login() {
        
    	if (!empty($_POST)){
    	    
    	    if (strlen($_POST['pass'])<2){
    	        echo "<script> alert('密码长度不能小于2！！');history.back();</script>";
    	    }
         $user=M(user);
        // $name=$_POST['user'];
         $pass=$_POST['pass'];
         
        // $rst=$user->where(array('name'=>$name))->select();
         $rst=$user->where(array('name'=>$_POST['user']))->select();
         $mima=$user->where(array('password'=>$pass))->select();
       //  dump($mima);die;
         if(!$rst){
         	$this->error('用户名错误');
         }elseif(!$mima){
         	$this->error('密码错误');
         }else{
         	$this->success('登录成功');
         	
         	//echo 11;die;
         }
    	}
    	$this->display();
    }
    
	 function test(){

		$name=array("1"=>"智能机器人","2"=>"数码相机","3"=>"天翼3G手机","4"=>"瑞士手表");
		$price=array("1"=>"10000元","2"=>"3000元","3"=>"2000元","4"=>"77777元");
		$counts=array("1"=>1,"2"=>22,"3"=>11,"4"=>12);
		
		echo '<table width="580" border="1" cellpadding="1" sellspacing="1" bordercolor="#FFFFFF" bgcolor="#c17e50">  
		        <tr>
		            <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">商品名称</td>
		            <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">价格</td>
		            <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">数量</td>
		            <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">金额</td>
				</tr>'; 	
		foreach($name as $key=>$value){
			echo'<tr>
					<td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2">'.$value.'</td>
					<td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2">'.$price[$key].'</td>
					<td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key].'</td>
					<td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key]*$price[$key].'</td>		
					</tr>';
		}
			echo'</table>';
			
		if($_POST[action]=="upload"){
		    $upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     './Uploads/';
		     
		    $upload->savePath  =     ''; 
    // 上传文件 
    $info   =   $upload->upload();
    //dump($info);die;
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{// 上传成功
    	$data['img']=$info['u_file']['savepath'].$info['u_file']['savename'];
		M('User')->add($data);
        $this->success('上传成功！',U('show'));
    }
		}	
						
		    	$this->display();
		    }
		    
		  public function show(){
		  	$model=M('User');
		  	$data=$model->select();
		  	//dump($data);die;
		  	$this->assign("data",$data);
		  	$this->display();
		  }
		
		}
     /* $num=1;
    	$str='10以内的偶数：';
    	while($num<=10){
    		if($num%2==0){
    			$str.=$num." ";
    		}
    		$num++;
    	}
      	echo $str;	*/
/*      	$sum=1;
      	for($i=1;$i<=100;$i++){
      		$sum *= $i;
      	}
      	echo "100!=".$sum;*/
      	

?>













