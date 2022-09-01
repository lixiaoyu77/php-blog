<?php   //判断是否登录
session_start();
if(!isset($_SESSION['loggedUsername'])){
    header("location:login.php");
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

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/common.css"/>
		<link rel="stylesheet" href="css/icon-mass.css"/>
		<script type="text/javascript" src="js/selector.js"></script>
		<style type="text/css">
			.B_article { min-height: 1200px; padding: 10px; }
			.B_article a { color: blue; }
			.B_article h2 { text-align: left; font-size: 20px; letter-spacing: 1px;line-height: 24px; }
			.B_article h5 { text-align: right;  letter-spacing: 1px; font-size: 10px;}
			.B_article p {text-align: center; margin-bottom: 10px; line-height: 24px; letter-spacing: 1px; text-indent: 50px; }
		</style>
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
			<article>
			<aside class="left-box l">
                <h1 >用户中心</h1>
				<div class="art Label clearfix">
					<h2 class="art-txt"> <a href="#">用户信息</a> </h2>
				</div>

				<div class="art Follow clearfix">
                    <h2 class="art-txt"> <a href="#">修改密码</a> </h2>
				</div>

				<div class="art Link mt20 clearfix">
                    <h2 class="art-txt"> <a href="#">用户信息</a> </h2>
				</div>
			</aside>
				<div class="art-right r">

					<div class="B_article">						


					</div>
				</div>
			</article>
		</section>
		
		<footer class="clearfix"><p>© Copyright 2022 All Rights Reserved Power by Leo | V1.0</p></footer>

	</body>
</html>
