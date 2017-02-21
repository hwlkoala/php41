<?php if (!defined('THINK_PATH')) exit();?><html>
<form method="post" action="<?php echo U('user/login');?>">
<table width="265" border="0" cellspacing="0" cellspadding="0">
<tr>
	<td class="title" id="td">用户名：</td>
	<td> <input name="user" type="text" size="15"/> </td>
</tr>
<tr>
	<td class="title" id="td">密码：</td>
	<td> <input name="pass" type="password" size="15" /> </td>
</tr>

</table>
 <input name="submit" type="submit" id="submit" value="登录">
</form>
</html>