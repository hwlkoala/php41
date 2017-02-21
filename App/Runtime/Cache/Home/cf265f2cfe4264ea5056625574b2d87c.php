<?php if (!defined('THINK_PATH')) exit(); if(is_array($select)): $i = 0; $__LIST__ = array_slice($select,1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>ID:<?php echo ($user["id"]); ?></br>
姓名：<?php echo ($user["name"]); ?></br>
分数：<?php echo ($user["score"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?>