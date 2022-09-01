<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link href="login.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        function validForm(){
            var userName=document.getElementById("userName");
            var pwd=document.getElementById("pwd");
            if(!validate_required(userName)){
                alert("请输入登录使用的用户名！");
                document.getElementById("userName").focus();/*使光标聚集在输入框中*/
                return false;	
            }
            if(!validate_required(pwd)){
                alert("请输入登录使用的密码！");
                document.getElementById("pwd").focus();
                return false;	
            }
            return true;
                            }
    </script>
</head>
<body>
<div class="login_div">
    <form  method="post" onsubmit="return validForm();" action='Verify.php'>
        <h1>登陆界面</h1>
        <input class="login_text" type="text" name="name"  id="userName"placeholder="用户名">
        <input class="login_text" type="password" name="password" id="pwd" placeholder="密码">
        <input class="login_btn" type="submit" value="登录">
        <a href="signup.php">没有帐号？马上注册</a>
        <a href="index.php">返回首页</a>
    </form>
</div>
</body>
</html>
