<?php

include_once("mysql.php"); 

header('content-type:text/html;charset=utf-8');
session_start();
//显示所有数据print_r($_POST);
$username =$_POST['name'];
$password =$_POST['password'];
$repassword =$_POST['repassword'];
$email =$_POST['email'];


//检查用户名是否存在
$sql ="select * from user where name='$username'";
$result = $link->query($sql);
$data =mysqli_fetch_array($result);
mysqli_query($link,"set names 'utf8'");
if(!is_null($data)){
    echo"<script>alert('用户名已存在!请重新注册');window.location.href='signup.php'</script>";
    exit();
}



function secret($num){
    $num = md5($num);
    return $num;
}

$password= secret($_POST['password']);
$repassword= secret($_POST['repassword']);

$sql = "insert into user(name, password,repassword, email) values('$username','$password','$repassword','$email')" ;
mysqli_query($link,$sql);

mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="img/loginbg.jpg">
    <script language='javascript' type = 'text/javascript'>;
    alert('注册成功!，即将返回登陆界面');;
    window.location.href='login.php';
    </script>    
</body>
</html>
