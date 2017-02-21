<?php if (!defined('THINK_PATH')) exit();?>成功跳转到了write页面

<table width="580" border="1" cellpadding="1" sellspacing="1" bordercolor="#FFFFFF" bgcolor="#c17e50">  
		        <tr>
		            <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">书名称</td>		  
				</tr>;
<?php if(is_array($all)): foreach($all as $key=>$vo): ?><tr>
<td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo ($vo["book_name"]); ?></td>

</tr><?php endforeach; endif; ?>

</table>