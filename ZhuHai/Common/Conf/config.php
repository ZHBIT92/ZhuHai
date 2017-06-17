<?php
return array(
	//'配置项'=>'配置值'
	//设置默认的加载模块
	
	//mysql全局定义 

	'DB_TYPE'=>'mysql',             //数据库类型
	'DB_HOST'=>'localhost',      //服务器地址
	'DB_USER'=>'root',              //用户名
	'DB_PWD'=>'',         //密码
	'DB_NAME'=>'zhuhai',      //数据库名
	'DB_PORT'=>3306,            //端口
	'DB_PREFIX'=>'think_',        //数据库表前缀
	

             /*PDO专用定义
             'DB_TYPE'=>'mysql',             //数据库类型
	'DB_USER'=>'root',              //用户名
	'DB_PWD'=>'',         //密码
	'DB_PREFIX'=>'think_',        //数据库表前缀
	'DB_DSN'=>'mysql:host=localhost;dbname=thinkphp;charset=utf8',*/

             /*定义样式路径
	 'TMPL_PARSE_STRING' => array(
                  '__PUBLIC__' => __ROOT__ . '/Public',
                  '__JS__' => __ROOT__ . '/Public/Js',
                  '__CSS__' => __ROOT__ . '/Public/Css',
                  '__IMAGE__' => __ROOT__ . '/Public/Images',
                  '__DATA__' => __ROOT__ . '/Data/'*/
             'URL_CASE_INSENSITIVE' => true,

             //页面调试工具
	'SHOW_PAGE_TRACE' =>true,
	'TMPL_PARSE_STRING' =>  array( // 地址替换,用_UPLOAD_目录 代替 根目录下的Upload目录
            '__UPLOAD__'    =>  __ROOT__.'/Public/Uploads',
     ),
);