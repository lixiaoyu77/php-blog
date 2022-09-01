<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>
    <link href="signup.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="signup.js"></script>
    <script type="text/javascript">
        function validForm(){
            var userName=document.getElementById("userName");
            var pwd=document.getElementById("pwd");
            var repwd=document.getElementById("repwd");
            var email=document.getElementById("email");
            if(!validate_required(userName)){
                alert("请输入登录使用的用户名！");
                document.getElementById("userName").focus();/*使光标聚集在输入框中*/
                return false;	
            }
            if(!valid_character(userName.value.charAt(0))){
                alert("登录用户名的首字符不能使数字！");
                document.getElementById("userName").focus();
                return false;			
            }
            if(!valid_length(userName.value,3,12)){
                alert("登录用户名的长度应当在3和12个字符(含)之间！");
                document.getElementById("userName").focus();
                return false;			
            }
            if(!validate_required(pwd)){
                alert("请输入登录使用的密码！");
                document.getElementById("pwd").focus();
                return false;	
            }
            if(!valid_length(pwd.value,6,12)){
                alert("登录密码的长度应当在6和12个字符(含)之间！");
                document.getElementById("pwd").focus();
                return false;			
            }	
            if(!validate_required(repwd)){
                alert("请输入重复密码！");
                document.getElementById("repwd").focus();
                return false;	
            }
            if(!valid_string_equal(pwd.value,repwd.value)){
                alert("两次输入的密码必须保持一致！");
                document.getElementById("pwd").focus();
                return false;	
            }	
            if(!validate_required(email)){
                alert("请输入邮箱地址！");
                document.getElementById("email").focus();
                return false;	
            }
            if(!validate_email(email.value)){
                alert("请输入合法的邮箱地址，如aa@yahoo.com！");
                document.getElementById("email").focus();
                return false;			
            }
            return true;
                            }
    </script>
</head>
<body>
    <div class="sign_div">
        <form  method="post" onsubmit="return validForm();" action='DoAction.php'>
            <h1>注册界面</h1>
            <input class="sign_text" type="text" name="name" id="userName" placeholder="用户名" >
            <input class="sign_text" type="password" name="password" id="pwd" placeholder="密码">
            <input class="sign_text" type="password" name="repassword" id="repwd" placeholder="确认密码">
            <input class="sign_text" type="text" name="email"  id="email"placeholder="邮箱" >
            <input class="sign_btn" type="submit" value="确认注册">
            <a href="login.php">返回登录</a>
        </form>
    </div>
</body>
</html>