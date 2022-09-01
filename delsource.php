<?php    
    include("mysql.php"); 	
    session_start();
    if(!isset($_SESSION['loggedUsername'])){//判断是否登录
    header("location:login.php");
    exit;
}
    if($_SESSION['isAdmin']==0){//判断是否为管理员
    header("location:message.php");
    exit;
    }
    if (!empty($_GET['id'])) {        
        $del = $_GET['id'];  //删除blog 	
		$sql="delete from source where id='$del' ";
        mysqli_query($link, $sql); 	
		//echo "删除成功！";	
		header("Location:resources.php");	//删除后跳转
	}
?>