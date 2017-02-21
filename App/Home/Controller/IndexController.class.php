<?php
namespace Home\Controller;
use Think\Controller;

header("Content-type: text/html; charset=utf-8"); 
class IndexController extends Controller {
	
	public function fanwei(){
		$user=D('User');
		$data=$user->scope('jige,ziduan')
		->limit(2)->where('id<70')->select();
		dump($data);
		echo M()->getLastSql();
	}
	
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
 public function user(){
 	$db=M('User')->select();

 	$this->assign('select',$db);//模板变量赋值
 	//dump($db);
 	$this->display();	
 }  
} 
//    public function user(){
    	
//*********************************************************    	
    //1.实例化基础模型 model
      ////$user = new Model('user');//表名，表前缀，数据库连接信息
      //$user = M('User');
       //$data = $user->select();
      // dump($data);
      
    //2.实例化用户自定义模型
      //$user=new UserModel();
      //$user=D("User");//D方法是M方法的高级模式，没有找到自定义的模型会自动转成M方法
      //echo $user->getinfo();
      // $data = $user->select();
      // dump($data);
      
    //3.实例化公共模型
      //$user = new CommonModel();
      // $user=D("User");
      //echo $user->strmake('aaaaa');
    //4.实例化控模型
       // $model = M();
       //$model->query($sql);//日常读取 select
       //$data = $model->query('select * from hw_user');
    
       // $model->execute($sql);//写入update insert
       //  $data=$model->execute('update hw_user set name="huang" where id=1');
       // dump($data);
       
//*****************************************************************
//数据库的CURD操作
//add创建多条数据*******************************************
	//单条数据*******************
	/*	$data=array(
		   // 'id'=>'5',
			'name'=>'koala2',
			'password'=>md5('123456'),
			'age'=>'12',
			'creat_date'=>date('Y-m-d H:i:s'),
		);
	     echo M('User')->add($data);
	 */
	//多条数据*********************** 
	/*$data=array(
	   0=>array(
		   // 'id'=>'5',
			'name'=>'koala3',
			'password'=>md5('123456'),
			'age'=>'13',
			'creat_date'=>date('Y-m-d H:i:s'),
		),
	    1=>array(
		   // 'id'=>'5',
			'name'=>'koala4',
			'password'=>md5('123456'),
			'age'=>'14',
			'creat_date'=>date('Y-m-d H:i:s'),
		),
		 2=>array(
		   // 'id'=>'5',
			'name'=>'koala5',
			'password'=>md5('123456'),
			'age'=>'15',
			'creat_date'=>date('Y-m-d H:i:s'),
		),
	);  
	
	 echo M('User')->addAll($data);  
	 //echo M()->getLastSql();//获取最后一条SQL语句
	  *
	  */
//select查询***************************************************
	
	//$user=M('User');
	//$data = $user->select();

//1.直接使用字符串进行查找
	//$data=M('User')->where('id=6')->select();

//2.直接使用数组的方式查询
	/*$where['id']=2;
	$where['name']='xiaoming';
	$where['_logic']='or';//where 条件的逻辑
	$data=M('User')->where($where)->select();
	*/

//3.表达式方法查询 eq neq egt gt lt elt between in like notbetween notin
	//$where['id']=array('gt',1);
	//$where['id']=array('between','1,3');//between区间查询
	//$where['name']=array('like','%ala');//模糊查询
	//$where['name']=array('like',array('%ala','na%'));//多条件模糊查询
	//$data=M('User')->where($where)->select();

//4.区间查询
	//$where['id']=array(array('gt',2),array('lt',6));//区间查询and关系
	//$where['id']=array(array('gt',8),array('lt',2),'or');//区间or逻辑关系
	//$data=M('User')->where($where)->select();

//5.混合查询(能用区间查询和表达式查询的时候不用混合方式查询也不用字符串的方式)
	//$where['id']=array('lt',10);
	//$where['_string']='id>3';
	//$data=M('User')->where($where)->select();
	//$data=M('User')->sum('id');//算术运算
	//dump($data);

//update更新**************************************************
	//$where['id']=1;
	//$data=M('User')->where($where)->select();
	/*$update['name']=aaa;
	$where['id']=1;
	//$data=M('User')->where($where)->save($update);//save更改数据
	$data=M('User')->where($where)->select();
	dump($data);
	*/
	/*$score['score']=90;
	$where['id']=9;
	$data=M('User')->where($where)->save($score);
	dump($data);*/
//delete删除**********************************************
	//$where['id']=1;
	//$data=M('User')->where($where)->select();
	//echo M('User')->where($where)->delete(); //调用delete方法删除           
	//       dump($data); 
	//echo M('User')->delete(3);//直接传入主键删除、还是尽量用where条件进行删除

//连续操作******************************************************
//支持所有的curd的操作
//1.order排序     order(字符串)多个条件的话用英文逗号隔开
	/*$data=M('User')->order('id desc')->select();
	//多条件，假如表里还有一个分数的字段score，按照score降序 ID升序排列
	//$data=M('User')->order('score desc','id asc')->select();
	  dump($data); */
//2.field($string,false) $string传入多个字段名用英文逗号分开
	//参数是false的时候只查询传入的字段名，参数是TRUE的时候过滤掉传入的参数名
	//放在select操作之前完成、放在select之后不行
	//$data=M('User')->field('id,name',false)->order('id desc')->select();
	//dump($data);  
//3.limit (start,length) //从哪里开始长度是多少
	//limit可以做分页
	/*$data=M('User')
	->field('id,name',false)
	->order('id desc')
	//->limit(3) //只取前3条数据
	->limit(1,3)//从第2条开始到第4条
	->select();
	dump($data);*/
//4.page(页码，每页的条数（默认等于20）)

/*	$data=M('User')
		->field('id,name',false)
		->order('id asc')
		//->page(1,3)//从第1页开始，每页显示3条
		->limit(2)->page(2)//limit和page结合使用
		->select();
		dump($data);
*/
//5.group分组操作   //having 是配合group使用的
	/*$data=M('User')->field('age,count(*) as total')->having('age>=13')->group('age')->select();
	dump($data);*/

//多表查询***************************************************

//table方法(table(array('表名'=>'别名'))表名需要加前缀
	/*$data=M()->table(array('hw_user'=>'user','hw_userinfo'=>'info'))
	->where('user.id=info.user_id')
	->select();
	dump($data);*/
//join方法，支持字符串数组两种方式
/*	$data=M('User')
	//字符串查询
	//->join('hw_userinfo On hw_userinfo.user_id=hw_user.id')//默认左关联
	//->join('right join hw_userinfo On hw_userinfo.user_id=hw_user.id')//右关联和innerjoin这样写
	//数组查询
	->join(array('hw_userinfo On hw_userinfo.user_id=hw_user.id'))
	->select();
	dump($data);*/
//union查询  union('string array',true/false)
/*	$data=M('User')
	->field('name,id')
	//->union('select name,id from hw_user2')//字符串查询
	->union(array('field'=>'name,id','table'=>'hw_user2'),true)
	->select();
	dump($data);*/
//过滤查询distinct
	/*$data=M('user')
	->distinct(true)//参数只有TRUE和FALSE传入TRUE就过滤
	->field('score')
	->order('score asc')
	->select();
	dump($data);*/
	
       //$this->display();
  //  }
//}
























