<?php
require_once "../blog/mysql.php";
header('content-type:text/html;charset=utf-8');

session_start();

function secret($num){
    $num = md5($num);
    return $num;
}
$username =$_POST['name'];
$password= secret($_POST['password']);

$sql = "select * from user where name='$username' and password ='$password'";
$result = $link->query($sql);
$data = mysqli_fetch_array($result);
mysqli_query($link,"set names 'utf8'");
	

if(is_null($data)){
    echo"<script>alert('用户名或密码输入错误');window.location.href='login.php'</script>";
    exit();
}

//数据库中的名字
$sqlname =$data['name'];
$_SESSION['loggedUsername'] = $sqlname;

//设置session的管理员
$sql = "select * from user where name='$username' and password ='$password'";
$result = $link->query($sql);
$info = mysqli_fetch_array($result);
if($info['admin']==1){
    $_SESSION['isAdmin'] = 1;
}
else{
    $_SESSION['isAdmin'] = 0;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <script language='javascript' type = 'text/javascript'>;
    alert('登录成功!，即将返回主页');;
    window.location.href='index.php';
    </script>
  
</body>
</html>

