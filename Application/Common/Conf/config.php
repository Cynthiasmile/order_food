<?php
return array(
	//'配置项'=>'配置值'
	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'order_food', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集

	'URL_MODULE'=>'2',//URL配置Rewrite
	'URL_CASE_INSENSITIVE'  =>  true, //URL大小写不敏感

	'TMPL_L_DELIM'    =>    '{{',//修改定界符
	'TMPL_R_DELIM'    =>    '}}',

	// 显示页面Trace信息
	'SHOW_PAGE_TRACE' =>true, 
);