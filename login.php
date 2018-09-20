<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>登陆</title>
    <script>
        function init(){
            if(myform.username.value=="")
            {
                alert("请输入用户名");
                //将光标移动到文本框中
                myform.username.focus();
                return false;
            }
            if (myform.userpwd.value=="")
            {
                alert("请输入密码");
                myform.userpwd.focus();
                return false;
            }
            if (myform.code.value=="")
            {
                alert("请输入验证码");
                myform.code.focus();
                return false;
            }
        }
    </script>
    <style type="text/css">
        .code{
            width:80px;
        }
        .titl{
            font-weight:bold;
            font-size:20px;
            text-align:center;
        }
        .bd{
            position: fixed;
            background-color: rgba(0,0,0,.5);
            width: 272px;
            color: #fff;
            top: 50%;
            left: 50%;
            margin-top: -200px;
            margin-left: -136px;
        }
        div{
            padding:10px;
        }
        body{
            background: url(images/15.jpg);
        }
    </style>
</head>
<body>
<form action="logincheck.php" method="post" onsubmit="return init();" name="myform" >
    <div class="bd">
        <div class="titl">用户登录</div>
        <div>
            <span >用户名:</span>
            <span><input type="text" name="username" id="username" placeholder="请输入用户名" /></span> <!--placeholder属性:提供可描述输入字段预期值的提示信息-->
        </div>
        <div>
            <span >密&#12288码:</span>
            <span><input type="password" name="userpwd" id="userpwd" placeholder="请输入密码" ></span>
        </div>
        <div>
            <span >验证码:</span>
            <span><input type="text" name="code" class="code" id="code" placeholder="请输入验证码"></span>
            <span><img src="img.php" onClick="this.src='img.php?nocache='+Math.random()" style="cursor:pointer"></span> <!--绑定了一个onclick事件，点击图片的时候刷新图片，style="cursor:pointer"是设定了鼠标移动到验证码图片时，鼠标箭头变小手形状-->
        </div>
        <div >
            <span>&#12288<button class="button">立即登陆</button></span>
            <span>&#12288还没账号，立即<a href="register.php" style="color:#f44336">注册</a></span>
        </div>
        <span><input type = "hidden" name = "hidden" value = "hidden" /></span>
        <!--增加了一个隐藏域，用于处理页面的第一层判断，如果不存在的话，则提交不成功，不用进行后续判断了-->
</form>
</body>
</html>
