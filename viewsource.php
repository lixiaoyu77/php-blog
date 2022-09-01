<?php   //判断是否登录
session_start();
if(!isset($_SESSION['loggedUsername'])){
    header("location:login.php");
    exit;
}
if($_SESSION['isAdmin']==0){//判断是否为管理员
    header("location:resources.php");
    exit;
    }
?>
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Leo" />
		<meta name="Keywords" content="Leo的博客"/>
		<meta name="Description" content="Leo的博客,关于区块链技术"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Leo的博客</title>
		
		<link rel="shortcut icon" href="img/block.png">
		<link rel="apple-touch-icon" sizes="57x57" href="img/block.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="img/block.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="img/block.png" />
		<link  rel="apple-touch-icon" sizes="144x144" href="img/block.png" />
		
		<link rel="stylesheet" href="css/common.css"/>
		<link rel="stylesheet" href="css/icon-mass.css"/>
		<link rel="stylesheet" href="css/message.css"/>
		<script type="text/javascript" src="js/selector.js"></script>
	</head>
	<body ondragstart="return false"  onselect="document.selection.empty()">
	
		<?php
		include_once "head.php";
		?>
		
		<header>
		</header>

		<?php
		include_once "head1.php";
		?>
		<div class="embellish">
			<a class="rocket"></a>
			<div class="aside"></div>
		</div>
		<section>
			<div class="comment">
			<?php
				include("mysql.php"); //引入连接数据库
				if(!empty($_GET['id'])){
					$id = $_GET['id'];
					$sql = "select * from source where id='$id'";
					$query = mysqli_query($link, $sql);
					$rs = mysqli_fetch_array($query);
					
				}
			?>
			
			<h2>题目  ：<?php echo $rs['title'];?></h2>
			<h3>作者  ：<?php echo $rs['acter'];?></h3>
			<h3>日期  ：<?php echo $rs['date'];?></h3>
			<p><a href="editsource.php?id=<?php echo $rs['id'];?>">编辑资源</a>  |  <a href="delsource.php?id=<?php echo $rs['id'];?>">删除资源</a> </p>
			<hr>
			<p><?php echo $rs['contents']?></p>
		</section>
		<footer class="clearfix"><p>© Copyright 2022 All Rights Reserved Power by Leo | V1.0</p></footer>

	</body>
</html>