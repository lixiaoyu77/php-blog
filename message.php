<?php   
session_start();
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

		<link rel="stylesheet" href="css/iconfont.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/common.css"/>
		<link rel="stylesheet" href="css/icon-mass.css"/>
		<style type="text/css">
			.B_article { min-height: 950px; padding: 10px; }


			.B2 h1 { text-align: left; font-size: 20px; letter-spacing: 1px;line-height: 30px; }
			.B2 h3 { text-align: right; font-size:  10px; letter-spacing: 1px;line-height: 30px; }
			.B2 p  { text-align: center; font-size:  15px;margin-bottom: 10px; letter-spacing: 1px;line-height: 24px;   }
			.page{text-align: center;border: 2px solid grey; border-radius: 15px;}
			
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
					<div class="art Label clearfix">
						<h2 class="art-txt"> <em class="iconfont icon-biaoqian "></em> <span>热门标签</span> </h2>
						<div> 
							<a class="btn label" href="#">区块链</a><a class="btn label" href="#">智能合约</a>
							<a class="btn label" href="#">以太坊</a><a class="btn label" href="#">solidity</a>
							<a class="btn label" href="#">Web3</a><a class="btn label" href="#">NFT</a>
							<a class="btn label" href="#">DeFi</a><a class="btn label" href="#" >ether.js</a>
							<a class="btn label" href="#" >合约安全</a><a class="btn label" href="#" >零知识</a>
						</div>
					</div>
					<div class="art Follow clearfix">
						<h2 class="art-txt"> <em class="iconfont icon-xing "></em> <span>博主私信</span> </h2>
						<div class="two-code">
							<img src="img/vx.jpg" alt="扫一扫，关注我哦">
							<p class="sao-txt">扫二维码,私信博主</p>
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
							
							<div class="B2">
							<h2 class="art-txt"><a href="addarticle.php"><em class="iconfont icon-liuyan "></em><span>&nbsp;博主的日常:</span></a></h2>
							<?php
							include_once ("mysql.php");
							include_once ("page.php");
							$sql ="select count(id)  as total from artical";//limit 5
							$query = mysqli_query($link, $sql);  
							$info = mysqli_fetch_array($query);
							$total =$info['total'];

							$perPage = 7;  //每一页七条
							$page =$_GET['page'] ??1;
							paging($total,$perPage);
							if(!empty($_GET['sub'])){
								$key=$_GET['keys'];
								$t = " title like '%$key%'";

							}else{
								$t = 1;
							}
							$sql ="select * from artical where $t order by id desc limit $firstCount,$displayPG";
							$query = mysqli_query($link, $sql);  
							
							while($rs = mysqli_fetch_array($query)){ //循环打印每一条博客
							?>

							<div class="art-model">
							<h2 ><a href="viewarticle.php?id=<?php echo $rs['id'];?>"><?php echo $rs['title'];?></a> </h2>
							<dl class="img-txt">
								<dt>

									<img src="img/Head2.png" >
								</dt>
								<dd>	<!--截取部分长度内容进行展示--> 
									<p><?php echo iconv_substr($rs['contents'],0,100,"utf-8"); ?></p>
									<h3 class="dateview"> <span><?php echo "发帖时间：".$rs['date']?></span></h3>
								</dd>
							</dl>
							
							</div>
							
							<?php
							}
							?>
							&nbsp;
							<div  class='page'><?php   echo $pageNav; ?> </div>
							
							</div>

							
						</div>
				</div>
			</article>
		</section>
		
		<footer class="clearfix"><p>© Copyright 2022 All Rights Reserved Power by Leo | V1.0</p></footer>

	</body>
</html>
