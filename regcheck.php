<?php
session_start();
//注册处理界面 regcheck.php
if(isset($_POST["hidden"]) && $_POST["hidden"] == "hidden")
{
    $user = trim($_POST["username"]);//trim()函数移除字符串两侧的空白字符
    $psw = md5(trim($_POST["userpwd1"]));
    $psw_confirm = md5(trim($_POST["userpwd2"]));
    $mobile = trim($_POST["telnum"]);
    $rank = trim($_POST["rank"]);
    $code = $_POST["code"];
    if($user == "" || $psw == "" || $psw_confirm == "")
    {
        echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
    }
    else if($code != $_SESSION['ver_code']){
        echo "<script>alert('验证码不正确，请重新输入！'); history.go(-1);</script>";
    }
    else if($rank=="0"){
        echo "<script>alert('请选择注册身份！'); history.go(-1);</script>";
    }
    else
    {
        if($psw == $psw_confirm)
        {
            $conn = mysqli_connect("localhost","root","Llc123?123"); //连接数据库,帐号密码为自己数据库的帐号密码
            if(!$conn){
                echo mysqli_error($conn);
                exit;
            }
            mysqli_select_db($conn,"userdb"); //选择数据库
            mysqli_set_charset($conn,'utf8'); //设定字符集
            $sql = "select username from user where username = '$user'"; //SQL语句
            $result = mysqli_query($conn,$sql); //执行SQL语句
            $num = mysqli_num_rows($result); //统计执行结果影响的行数

            if($num) //如果已经存在该用户
            {
                echo "<script>alert('用户名已存在'); history.go(-1);</script>";
            }
            else //不存在当前注册用户名称
            {
                $ip=ip2long($_SERVER['REMOTE_ADDR']); // 把ip地址转换成整型
                $time=time();
                $sql_insert = "insert into user (username,userpwd,mobile,rank,createtime,createip) values(' $user ' , ' $psw ','$mobile ','$rank','$time','$ip')";
                $res_insert = mysqli_query($conn,$sql_insert);
                if($res_insert)
                {
                    echo "<script>alert('注册成功！');window.location.href='login.php';</script>";
                }
                else
                {
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
                }
            }
        }
        else
        {
            echo "<script>alert('密码不一致！'); history.go(-1);</script>";
        }
    }
}
else
{
    echo "<script>alert('提交未成功！');</script>";
}
?> 