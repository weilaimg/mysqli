<?php
require_once('function.php');
//1.建立到mysql的连接 
$mysqli =@ new mysqli('127.0.0.1','root','123321123');
if($mysqli->connect_errno){
	die('Connect Error:'.$mysqli->connect_error);
}


//2.设置默认的客户端编码方式：utf8
$mysqli -> set_charset('utf8');

//3.执行SQL查询
$sql=<<<Eof
CREATE TABLE IF NOT EXISTS mysqli(
id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(20) NOT NULL
)CHARSET UTF8;
Eof;
$res = $mysqli -> query($sql);
debug($res,false,true);

/** 
 * SELECT/DESC/DESCRIBE/SHOW/EXPLAIN返回的是result对象，执行失败返回FALSE
 对于其它SQL语句成功返回TRUE 失败返回FALSE
 */




 //关闭连接 
 $mysqli -> close();