<div class="head1">
			<div class="head1l">欢迎来到Leo的博客，关于区块链技术学习! 
				<script type="text/javascript">
					var today =new Date();
					document.write("北京时间："+today);
				</script>
			</div>


			<?php	
				if(isset($_SESSION['isAdmin'] ) &&$_SESSION['isAdmin']==1)
				{
			?>
			<div class="head1r">
				欢迎您,亲爱的管理员&nbsp;<a href="Home.php"><?php echo $_SESSION['loggedUsername'];  ?>  </a> 
				<span class="menuline">|</span> 
				<a href="loginout.php" >注销</a> 
			</div>
			<?php	
				}else if(isset($_SESSION['loggedUsername'] ) &&$_SESSION['loggedUsername'] <>'')
				{
			?>
			<div class="head1r">
				欢迎您,亲爱的用户&nbsp;<a href="Home.php"><?php echo $_SESSION['loggedUsername'];  ?>  </a> 
				<span class="menuline">|</span> 
				<a href="loginout.php" >注销</a> 
			</div>
			<?php	
				}else {
					
			?>
			<div class="head1r">
				<a href="login.php" >登录</a> 
				<span class="menuline">|</span> 
				<a href='signup.php' >注册</a> 
			</div>
			<?php	
				}
			?>
		</div>