<?php
header('Content-type:text/html;charset=utf-8');
$mysqli =@ new mysqli('127.0.0.1','root','123321123','test');
if($mysqli->connect_errno){
	die('Connect Error'.$mysqli->error);
}
$mysqli -> set_charset('utf8');
// 执行SQL查询
// 添加记录
// 执行单条SQL语句
 $sql = "INSERT user (username,password) VALUES ('king','king'),('king','king'),('king','king');";
 // $sql .= "DROP TABLE user;";
 $res = $mysqli->query($sql);
 if($res){
 	//得到上一步插入得到的AUTO_INCREMENT的值
 	echo '注册成功，你是第'.$mysqli->insert_id.'个用户<br />';
 	//得到上一步操作产生的受影响条数
 	echo '有'.$mysqli->affected_rows.'记录被影响';
 } else {
 	//得到上一步错误的操作号与错误信息
 	echo 'ERROR'.$mysqli->errno.':'.$mysqli	-> error;
 }
echo '<hr />';
//更新记录
$sql = 'UPDATE user SET age=age+10';
$res = $mysqli -> query($sql);
if($res){
	echo $mysqli->affected_rows.'被更新';
} else {
	echo 'ERROR'.$mysqli->errno.':'.$mysqli->error; 
}
echo '<hr />';
//删除记录
$sql = 'DELETE FROM user WHERE id<=6;';
$res = $mysqli -> query($sql);
if($res){
	echo $mysqli->affected_rows.'被删除';
} else {
	echo 'ERROR'.$mysqli->errno.':'.$mysqli->error; 
}


//关闭到 MYSQL 的连接
$mysqli->close();