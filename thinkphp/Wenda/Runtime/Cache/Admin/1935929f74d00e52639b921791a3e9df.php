<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="/Wenda/Public/Admin/Css/add_category.css" />
	<title></title>
</head>
<body>
	<form action="<?php echo U('admin/category/add');?>" method="post">
		<table class="table">
			<tr >
				<td class="th" colspan="2">添加&nbsp;&nbsp;[<?php echo ($cate["name"]); ?>]&nbsp;&nbsp;子分类</td>
			</tr>
			<tr>
				<td>子类名称</td>
				<td><input type="text" name="title"/></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="hidden" name="pid" value="<?php echo ($cate["cid"]); ?>"/>
					<input type="submit" value="添加" class="input_button"/>
					<input type="reset" class="input_button"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>