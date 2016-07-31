<?php 
header("Content-type: text/html; charset=utf-8");
require_once('function.php');

// //1.建立到MYSQL的连接
// $mysqli = new mysqli('127.0.0.1','root','123321123');
// //2.打开指定的数据库
// $mysqli -> select_db('test');

// //分开建立连接
// $mysqli = new mysqli();
// $mysqli -> connect('127.0.0.1','root','123321123');
// print_r ($mysqli);

//建立连接的同时打开指定数据库
$mysqli =@ new mysqli('127.0.0.1','root','123321123','test');


//$mysqli-> connect_errno得到连接产生的错误编号
//$mysqli-> connect_error得到连接产生的错误信息
if($mysqli->connect_errno){
	die('Connect Error:'.$mysqli->connect_error);
}

debug($mysqli,false);
echo '<hr color="red" />';
echo '客户端信息：'.$mysqli->client_info.'<br />';
echo $mysqli->get_client_info().'<br />';
echo '客户端版本：'.$mysqli->client_version.'<br />';
echo $mysqli->get_server_info();
