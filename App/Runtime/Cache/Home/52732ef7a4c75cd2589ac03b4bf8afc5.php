<?php if (!defined('THINK_PATH')) exit();?><form method="post" action="<?php echo U('User/test');?>" enctype="multipart/form-data">
<input type="hidden" name="action" value="upload" />
<input type="file" name="u_file"/>
<input type="submit" value="上传">
</form>