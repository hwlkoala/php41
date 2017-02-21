<?php
namespace Home\Model;
use Think\Model;
class CommonModel extends Model{
    public function strmake($str) {
    	return md5(sha1(md5($str)));
    }
}
?>