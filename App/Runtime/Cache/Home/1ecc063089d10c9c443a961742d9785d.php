<?php if (!defined('THINK_PATH')) exit();?><html>
<ul>
<?php if(is_array($data)): foreach($data as $key=>$v): ?><li><?php showImage($v['img'])?></li><?php endforeach; endif; ?>
</ul>

</html>