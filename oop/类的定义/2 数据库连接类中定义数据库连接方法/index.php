<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>数据库连接类的应用</h1>
<form method="post" action="">
	服务器地址：<input type="text" name="host"><br>
	用  户  名：<input type="text" name="username"><br>
	密      码：<input type="text" name="password"><br>
	数据库名称：<input type="text" name="dbname"><br>
	<input type="submit" name="sub" value="连接">
	<input type="reset" value="重置">
</form>

<?php 
if (isset($_POST['sub'])) {
	require_once 'db.class.php';  //引入类文件
	$username = $_POST['username'];
	$host = $_POST['host'];
	$password = $_POST['password'];
	$dbname = $_POST['dbname'];

	$connDb = new db($host,$username,$password,$dbname); //实例化数据库连接类
	$conn = $connDb->getConn();
	if (!$conn) {
		echo "数据库连接失败";
	}else{
		echo "数据库连接成功";
	}

	echo "<br>连接句柄为:".$conn; //打印连接句柄
}

?>
</body>
</html>