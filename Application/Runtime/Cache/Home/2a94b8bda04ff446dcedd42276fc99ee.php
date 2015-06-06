<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(is_array($merchants)): $i = 0; $__LIST__ = $merchants;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$merchant): $mod = ($i % 2 );++$i; echo ($merchant["id"]); ?>---<?php echo ($merchant["name"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>