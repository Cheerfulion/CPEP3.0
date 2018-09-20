<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>注册</title>
    <script>
        function init(){
            if(myform.username.value=="")
            {
                alert("请输入用户名");
                //将光标移动到文本框中
                myform.username.focus();
                return false;
            }
            if (myform.userpwd1.value=="")
            {
                alert("请输入密码");
                myform.userpwd1.focus();
                return false;
            }
            if (myform.userpwd1.value!=myform.userpwd2.value)
            {
                alert("两次输入密码不一致");
                myform.userpwd2.focus();
                return false;
            }
            if (myform.telnumber.value=="")
            {
                alert("请输入电话号码");
                myform.telnumber.focus();
                return false;
            }
            if (myform.rank.value=="0")
            {
                alert("请选择身份");
                myform.rank.focus();
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
            width: 286px;
            color: #fff;
            top: 50%;
            left: 50%;
            margin-top: -200px;
            margin-left: -136px;
        }
        div{
            padding: 10px;
        }
        body{
            background: url(images/15.jpg);
        }
    </style>
</head>
<body>
    <form action="regcheck.php" method="post" onsubmit="return init();" name="myform" >
        <div class="bd">
            <div class="titl">用户注册</div>
            <div>
                <span >&#12288用户名:</span>
                <span><input type="text" name="username" id="username" placeholder="请输入用户名" /></span> <!--placeholder属性:提供可描述输入字段预期值的提示信息-->
            </div>
            <div>
                <span >密&#12288&#12288码:</span>
                <span><input type="password" name="userpwd1" id="userpwd1" placeholder="请输入密码" ></span>
            </div>
            <div>
                <span >确认密码:</span>
                <span><input type="password" name="userpwd2" id="userpwd2" placeholder="再次输入密码" ></span>
            </div>

            <div>
                <span >电话号码:</span>
                <span><input type="text" name="telnum" id="telnum" placeholder="请输入电话号码" /></span>
            </div>
            <div>
                <span >身&#12288&#12288份:</span>
                <span>
                    <select name="rank">
                        <option value="0">-请选择-</option>
                        <option value="1">学生</option>
                        <option value="2">咨询师</option>
                    </select>
                </span>
            </div>

            <div>
                <span >&#12288验证码:</span>
                <span><input type="text" name="code" class="code" id="code" placeholder="请输入验证码"></span>
                <span><img src="img.php" onClick="this.src='img.php?nocache='+Math.random()" style="cursor:pointer"></span> <!--绑定了一个onclick事件，点击图片的时候刷新图片，style="cursor:pointer"是设定了鼠标移动到验证码图片时，鼠标箭头变小手形状-->
            </div>
            <div>
                <span style="margin-left:60px">&#12288<button class="button">立即注册</button></span>
            </div>
            <span><input type = "hidden" name = "hidden" value = "hidden" /></span>
            <!--增加了一个隐藏域，用于处理页面的第一层判断，如果不存在的话，则提交不成功，不用进行后续判断了-->
</form>
</body>
</html>
