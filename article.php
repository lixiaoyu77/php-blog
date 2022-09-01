<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Leo" />
		<meta name="Keywords" content="Leo的博客"/>
		<meta name="Description" content="Leo的博客,关于区块链技术"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>Leo的博客</title>
		
		<link rel="shortcut icon" href="img/block.png">
		<link rel="apple-touch-icon" sizes="57x57" href="img/block.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="img/block.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="img/block.png" />
		<link  rel="apple-touch-icon" sizes="144x144" href="img/block.png" />
		
		<link rel="stylesheet" href="css/iconfont.css">
		<link rel="stylesheet" href="css/common.css"/>
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="js/selector.js"></script>
		<style type="text/css">
			.B_article { min-height: 1200px; padding: 10px; }
			.B_article h2 { text-align: center; font-size: 20px; letter-spacing: 1px; }
			.B_article img { margin: 0 auto; display: block; }
			.B_article h3 { margin: 14px 0; letter-spacing: 1px; color: rgba(0,0,0,.8); }
			.B_article p { margin-bottom: 10px; line-height: 24px; letter-spacing: 1px; text-indent: 50px; }
		</style>
	</head>
	<body ondragstart="return false"  onselect="document.selection.empty()">
		<!--[if lt IE 8]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<div class="head1">
			<div class="head1l">欢迎来到Leo的博客，关于区块链技术学习! 
				<script type="text/javascript">
					var today =new Date();
					document.write("北京时间："+today);
				</script>
			</div>
			<div class="head1r">
				<a href="login.php" >登录</a> 
				<span class="menuline">|</span> 
				<a href='signup.php' >注册</a> 
			</div>
		</div>
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
				<div class="art Label clearfix">
					<h2 class="art-txt"> <em class="iconfont icon-biaoqian "></em> <span>热门标签</span> </h2>
					<div> 
						<a class="btn label" href="#">区块链</a><a class="btn label" href="#">智能合约</a>
						<a class="btn label" href="#">以太坊</a><a class="btn label" href="#">solidity</a>
						<a class="btn label" href="#">Web3</a><a class="btn label" href="#">NFT</a>
						<a class="btn label" href="#">DeFi</a><a class="btn label" href="#" >ether.js</a>
						<a class="btn label" href="#" >合约安全</a><a class="btn label" href="#" >零知识证明</a>
					</div>
				</div>
				<div class="art Follow clearfix">
					<h2 class="art-txt"> <em class="iconfont icon-xing "></em> <span>博主私信</span> </h2>
					<div class="two-code">
						<img src="img/vx.jpg" alt="扫一扫，关注我哦">
						<p class="sao-txt">扫二维码,私信博主</p>
					</div>
				</div>
				</div>
				<div class="art Link mt20 clearfix">
					<h2 class="art-txt"> <em class="iconfont icon-lianjie"></em> <span>资源分享</span> </h2>
					<ul class="fri-link">
						<li><a href="https://learnblockchain.cn/docs/solidity/index.html" target="_blank" rel="nofollow">solidity中文文档</a></li>
						<li><a href="https://learnblockchain.cn/docs/ethers.js/index.html" target="_blank" rel="nofollow">ether.js中文文档</a></li>
						<li><a href="https://cryptozombies.io/zh/course" target="_blank" rel="nofollow">加密僵尸课程</a></li>
						<li><a href="https://faucets.chain.link/rinkeby" target="_blank" rel="nofollow">测试网水龙头</a></li>
						<li><a href="https://www.alchemy.com/" target="_blank" rel="nofollow">区块链免费节点</a></li>
						<li><a href="https://ethereum.org/en/" target="_blank" rel="nofollow">以太坊官网</a></li>
					</ul>
				</div>
			</aside>
			<div class="art-right r">
				<div class="B_article">
					<h2>标题</h2>
					<h3>副</h3>
					<img src="img/at1.png"  width="420px" height="240px">
					<h3>副</h3>
					<p>正文</p>
					<p>正文</p>
					<p>正文</p>
					<p>正文</p>
					<h3>副</h3>
					<p>正文</p>
					<p>正文</p>
					<p>正文</p>
					<h3>副</h3>
					<p>正文</p>
					<p>正文</p>
					<p>正文</p>
					
					
				</div>
			</div>
		</article>
		</section>
		<footer class="clearfix">
			<p>© Copyright 2022 All Rights Reserved Power by Leo | V1.0</p>
		</footer>
	</body>
</html>
