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
	</head>
	<body ondragstart="return false"  onselect="document.selection.empty()">
		
		<?php
		include_once "head.php";
		?>

		<header></header>

		<?php
		include_once "head1.php";
		?>

		<div class="embellish">
			<a class="rocket"></a>
			<div class="aside"></div>
		</div>

		<section>
		<div class="banner-box clearfix">
			<div class="banner r">
				<div>
					<a class="a-img-ban img-ban-curr"><img class="img-ban" src="img/index3.png"></a> 
					<a class="a-img-ban"><img class="img-ban" src="img/index2.png"></a>
					<a class="a-img-ban"><img class="img-ban" src="img/index1.png"></a>
					<a class="a-img-ban"><img class="img-ban" src="img/index4.png"></a>
				</div>
				<ul class="r">
					<li class="li-img curr"><img src="img/index3.png"><div class="mask"></div></li>
					<li class="li-img"><img src="img/index2.png"><div class="mask"></div></li>
					<li class="li-img"><img src="img/index1.png"><div class="mask"></div></li>
					<li class="li-img"><img src="img/index4.png"><div class="mask"></div></li>
				</ul>
			</div>
			<div class="art l">
				<h2 class="art-txt"><em class="iconfont icon-zan "></em> <span>推荐文章</span> </h2>
				<ul class="art-list">
					<li><a href="#" ><em class="iconfont icon-dian "></em><span>区块链技术入门学习指引</span></a></li>
					<li><a href="#" ><em class="iconfont icon-dian "></em><span>区块链技术入门学习指引</span></a></li>
					<li><a href="#" ><em class="iconfont icon-dian "></em><span>区块链技术入门学习指引</span></a></li>
					<li><a href="#" ><em class="iconfont icon-dian "></em><span>区块链技术入门学习指引</span></a></li>
					<li><a href="#" ><em class="iconfont icon-dian "></em><span>区块链技术入门学习指引</span></a></li>
					<li><a href="#" ><em class="iconfont icon-dian "></em><span>区块链技术入门学习指引</span></a></li>
					<li><a href="#" ><em class="iconfont icon-dian "></em><span>区块链技术入门学习指引</span></a></li>
				</ul>
			</div>
		</div>
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
				<h2 class="art-txt">&nbsp;&nbsp;<em class="iconfont icon-wifi "></em> <span>最新文章</span></h2>
				<div class="art-model">
					<h3><a href="article.php" >区块链有什么用途？</a></h3>
					<p class="dateview"><span>发布时间：2022/04/22</span> <span>作者：Leo</span></p>
					<dl class="img-txt">
						<dt>
							<img src="img/at5.png" >
						</dt>
						<dd>
							<p class="deatil">既然我们已经讨论了这项技术是如何工作的，那么它可以应用在哪里呢？尽管许多人认为加密货币是区块链的唯一用途，但它是一种可以应用于大量空间的多样化技术。让我们列出一些开始的用途。银行支付、全球即时汇款、网络安全、供应链管理、云储存、慈善机构、选民验证、卫生保健</p>
							<a href="article.php" class="btn  c-fff" >查看全文</a>
						</dd>
					</dl>
				</div>
				<div class="art-model">
					<h3><a href="#" >关于区块链你应该知道的!（第1部分）</a></h3>
					<p class="dateview"> <span>发布时间：2022/04/09</span> <span>作者：Leo</span></p>
					<dl class="img-txt">
						<dt>
							<img src="img/at4.png" >
						</dt>
						<dd>
							<p class="deatil">　　什么是区块链？区块链是一个数字数据库，它按时间顺序存储数据块（交易）。这些块是哈希链接在一起的——因此，命名为区块链。区块链是完全去中心化的，不需要第三方来确认任何交易。去中心化，更准确地说，意味着整个网络不存储在中央服务器上，相反，网络存储在去中心化网络上，所有节点都有整个区块链的副本。由于区块链中的哈希链接块，它非常安全，因为它需要巨大的计算能力才能沿着区块链进行任何更改。我们将在以后讨论这个问题。</p>
							<a href="#" class="btn  c-fff" >查看全文</a>
						</dd>
					</dl>
				</div>
				<div class="art-model">
					<h3><a href="#">关于NFT</a></h3>
					<p class="dateview"> <span>发布时间：2022/04/06</span> <span>作者：Leo</span></p>
					<dl class="img-txt">
						<dt> 
							<img src="img/at3.png" >
						</dt>
						<dd>　　我的朋友一开始不了解NFT，但后来我告诉他们这个......我将尽可能用最基本的术语来描述NFT是......</p>
							<a href="#" class="btn  c-fff">查看全文</a>
						</dd>
					</dl>
				</div>
				<div class="art-model">
					<h3><a href="#" >如何在 Web 3.0、区块链和加密货币领域从事职业，学生必读</a></h3>
					<p class="dateview"> <span>发布时间：2022/04/05</span> <span>作者：Leo</span></p>
					<dl class="img-txt">
						<dt>
							<img src="img/at2.png" >
						</dt>
						<dd>
							<p class="deatil">　　作为一名在 web 3.0 中寻求入门级实习/职业机会的成长型思维学生，在没有大学学位的情况下踏上大门可能会很有挑战性。我相信许多公司都错过了杰出的人才，他们日以继夜地花费数小时吸收该领域的知识，只是为了获得大学证书。我最近离开大学去追求我在 web 3.0 中的目标，只有我在金融和交易方面的卓越技能以及对 web 3、加密和区块链的理解。</p>
							<a href="#" class="btn  c-fff" >查看全文</a>
						</dd>
					</dl>
				</div>
				<div class="art-model">
					<h3><a href="#" >新区块链开发人员的基本技能</a></h3>
					<p class="dateview"> <span>发布时间：2022/04/02</span> <span>作者：Leo</span></p>
					<dl class="img-txt">
						<dt> <img src="img/at1.png" >
						</dt>
						<dd>
							<p class="deatil">　　区块链开发人员应该注意一些角色和职责。他们可以更多地负责开发或构建区块链协议，在他们使用的协议上运行的去中心化应用程序或两者兼而有之。即使是区块链开发人员也可以跳槽设计架构、协议、分析现有系统，甚至评估有助于开发过程的新技术。因此，我将尝试更简单地解释它的每个部分。</p>
							<a href="#" class="btn  c-fff" >查看全文</a>
						</dd>
					</dl>
				</div>
			</div>
		</article>
		</section>
		<footer class="clearfix"><p>© Copyright 2022 All Rights Reserved Power by Leo | V1.0</p></footer>
		<script type="text/javascript" src="js/common.js"></script>
	</body>
</html>





