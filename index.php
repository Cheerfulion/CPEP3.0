<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>大学生心理交流平台</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/carousel.css">
    <link rel="shortcut icon" href="./images/favicon.ico">
    <script>
    	function logout(){
        	<?php 
        	   if(isset($_SESSION['username']))
        	     unset($_SESSION['username']);
        	?>
      	  	//window.location.reload();
        	document.getElementById("sub1").innerHTML = "<li class='signup'><a href='login.php'>登录</a>   | <a href='register.php'>注册</a></li>"; 
		}
    </script>
</head>

<body>
<!--container开始-->
<div class="container">
<!--头部导航开始-->
    <!--header-cont开始-->
<div class="header-cont" >
    <div class="logo">
        <a href="#">
            <img src="./images/logo60x60.jpg" class="lg-pic" width="60px" height="60px">
        </a>
        <a href="#" class="lg-text">大学生心理交流平台</a>
    </div>
       <div class="userbox ">
            <ul id="sub1">
                 <?php 
                 session_start();
                 if(isset($_SESSION["username"])){
                    echo "欢迎您,".$_SESSION['username']."<br/>";
                    echo "<button onclick='logout()'>退出</button>";
                }   
                else
                     echo " <li class='signup'><a href='login.php'>登录</a> <a href='register.php'>注册</a></li>";
              ?>
            </ul>
    </div>
    <div class="header_navbar" style="margin-bottom:20px; ">
        <ul>
            <a href="index.php">
                <li class="navbar-item">首页</li>
            </a>
            <a href="html/know.html">
                <li class="navbar-item">小知识</li>
            </a>
            <a href="html/test.html">
                <li class="navbar-item">测试</li>
            </a>
            <a href="html/appoint.html">
                <li class="navbar-item">预约</li>
            </a>
            <a href="html/homelike.html">
                <li class="navbar-item">心灵小憩</li>
            </a>
            <a href="forum/index.php">
                <li class="navbar-item">交流圈</li>
            </a>
        </ul>
    </div>
</div>
    <!--header-cont结束-->
    <!--头部导航结束-->

    <!--主体部分开始-->
    <div class="page" >
        <!--left开始-->
        <div class="left">
            <div class="panel" id="new">
                <div class="dt">最新信息</div>
                <div class="dd">
                    <ul class="ulbg">
                        <li><a href="#">培养孩子六种能力远离心理疾病</a></li>
                        <li><a href="#">给孩子立规矩的十九原则</a></li>
                        <li><a href="#">让孩子开朗乐观8点建议</a></li>
                        <li><a href="#">理性对待孩子</a></li>
                        <li><a href="#">影响孩子成长的“十条慢性毒药”</a></li>
                        <li><a href="#">引领后进生走向“柳暗花明”</a></li>
                        <li><a href="#">体育教学中渗透心理健康教育</a></li>
                        <li><a href="#">善于说谎者大脑长得怪</a></li>
                        <li><a href="#">轻松诙谐：法国父母爱幽默育儿</a></li>
                        <li><a href="#">浅谈小学生的心理问题</a></li>
                    </ul>
                </div>
            </div>

            <div class="panel" id="zytest">
                <div class="dt">自由测试</div>
                <div class="dd">
                    <ul class="ulbg">
                        <li><a href="#">人格类型测试：人生重点排列</a></li>
                        <li><a href="#">测验你的家庭是否美满？</a></li>
                        <li><a href="#">你是否感情用事</a></li>
                        <li><a href="#">你有人缘吗？</a></li>
                        <li><a href="#">你留给人的第一印象如何</a></li>
                        <li><a href="#">你的成功指数有多少？</a></li>
                        <li><a href="#">测试你的自尊量</a></li>
                        <li><a href="#">热情度诊断</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel" id="other">
                <div class="dt">其他</div>
                <div class="dd">
                    <ul class="ulbg">
                        <li><a href="#">关于我们</a></li>
                        <li><a href="#">紧急联系</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--left结束-->
        <!--Main Content开始-->
        <div class="maincontent" >

            <!--main-head开始-->
            <!--<div id="main-head">-->

            <div class="content">
                <div class="a-content">
                    <div class="carousel-content">
                        <ul class="carousel">
                            <li><img src="./images/pic1.png"></li>
                            <li><img src="./images/pic2.png"></li>
                            <li><img src="./images/pic3.png"></li>
                            <li><img src="./images/pic4.png"></li>
                            <li><img src="./images/pic5.png"></li>
                        </ul>
                        <ul class="img-index"></ul>
                        <div class="carousel-prev"><img src="./images/left1.png"></div>
                        <div class="carousel-next"><img src="./images/right1.png"></div>
                    </div>
                </div>
            </div>
            <div class="panel panelweek" id="weeklyhot">
                <div class="dt">一周热文</div>
                <div class="dd">
                    <ul class="ulbg">
                    <li><a href="#">你的眼中没有我｜冷暴力如何毁掉关系</a></li>
                    <li><a href="#">你以为的稳定，都在悄悄地背叛你</a></li>
                    <li><a href="#">小猪佩奇，藏着我们最渴望的原生家庭</a></li>
                    <li><a href="#">测试丨测测你的性格优势是什么？</a></li>
                    <li><a href="#">只要与手机共处一室，你就会变蠢 ？！</a></li>
                    </ul>
                </div>
            </div>

            <!--</div>-->
            <!--main-head结束-->
            <!--main-body开始-->
            <div id="main-body">
            <div class="article item1">
                <div class="dt">心理美文</div>
                <div class="dd">
                    <ul class="list">
                        <li><a href="#">培养孩子六种能力远离心理疾病</a></li>
                        <li><a href="#">给孩子立规矩的十九原则</a></li>
                        <li><a href="#">让孩子开朗乐观8点建议</a></li>
                        <li><a href="#">理性对待孩子</a></li>
                        <li><a href="#">影响孩子成长的“十条慢性毒药”</a></li>
                        <li><a href="#">引领后进生走向“柳暗花明”</a></li>
                        <li><a href="#">体育教学中渗透心理健康教育</a></li>
                        <li><a href="#">善于说谎者大脑长得怪</a></li>
                        <li><a href="#">轻松诙谐：法国父母爱幽默育儿</a></li>

                    </ul>
                </div>
            </div>
                <div class="article item2">
                    <div class="dt">心理美文</div>
                    <div class="dd">
                        <ul class="list">
                            <li><a href="#">培养孩子六种能力远离心理疾病</a></li>
                            <li><a href="#">给孩子立规矩的十九原则</a></li>
                            <li><a href="#">让孩子开朗乐观8点建议</a></li>
                            <li><a href="#">理性对待孩子</a></li>
                            <li><a href="#">影响孩子成长的“十条慢性毒药”</a></li>
                            <li><a href="#">引领后进生走向“柳暗花明”</a></li>
                            <li><a href="#">体育教学中渗透心理健康教育</a></li>
                            <li><a href="#">善于说谎者大脑长得怪</a></li>
                            <li><a href="#">轻松诙谐：法国父母爱幽默育儿</a></li>

                        </ul>
                    </div>
                </div>

            </div>
            <!--main-body结束-->


            <br><br><br><br><br><br>
            </div>
        <!--Main Content结束-->
        <!--right开始-->
        <div class="right">
                <div class="hmyt">
                    <div class="ashead"><div class="h-text">预约专家</div></div>
                    <div class="asbody">
                        <ul>
                            <!--<div class="zjlist"></div>-->
                            <li>
                                <div class="zj-list">
                                    <div class="hunhe">
                                        <a href="#"><img src="./images/anling.png" alt=""></a>
                                        <a href="#" class="zj-name">安岭</a>
                                        <a href="#" class="zjyy-bt">预约</a>
                                    </div>
                                    <div class="text">

                                        <p class="zj-exp">资深国家二级心理师</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="zj-list">
                                    <div class="hunhe">
                                        <a href="#"><img src="./images/boyun.png" alt=""></a>
                                        <a href="#" class="zj-name">卜芸</a>
                                        <a href="#" class="zjyy-bt">预约</a>
                                    </div>
                                    <div class="text">

                                        <p class="zj-exp">抑郁症6年临床咨询经验</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="zj-list">
                                    <div class="hunhe">
                                        <a href="#"><img src="./images/dongyating.png" alt=""></a>
                                        <a href="#" class="zj-name">董娅婷</a>
                                        <a href="#" class="zjyy-bt">预约</a>
                                    </div>
                                    <div class="text">
                                        <p class="zj-exp">二级心理咨询师</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="zj-list">
                                    <div class="hunhe">
                                        <a href="#"><img src="./images/haoweihong.png" alt=""></a>
                                        <a href="#" class="zj-name">郝卫红</a>
                                        <a href="#" class="zjyy-bt">预约</a>
                                    </div>
                                    <div class="text">

                                        <p class="zj-exp">中国心理学会注册系统注册助理心理师</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="zj-list">
                                    <div class="hunhe">
                                        <a href="#"><img src="./images/jiangli.png" alt=""></a>
                                        <a href="#" class="zj-name">蒋莉</a>
                                        <a href="#" class="zjyy-bt">预约</a>
                                    </div>
                                    <div class="text">

                                        <p class="zj-exp">二级心理咨询师</p>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>


            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
        <!--right结束-->
    </div>
    <!--主体部分结束-->
    <div class="push">
        <!-- not put anything here -->
    </div>

<!--页面底部开始-->
<div class="footer">
    <div class="ft-link">
        <a href="#">首页</a>|
        <a href="#">关于我们</a>|
        <a href="#">心理美文</a>|
        <a href="#">交流圈</a>|
        <a href="#">心理小故事</a>|
        <a href="#">生活中的心理学</a>
    </div>
    <div class="ft-copyright">

        <p>Copyright © 2016-2017&nbsp;&nbsp;All Rights Reserved.</p>
    </div>
</div>
<!--页面底部结束-->
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="./js/carousel.js"></script>
<script type="text/javascript">
    $(function(){
        $(".carousel-content").carousel({
            carousel : ".carousel",//轮播图容器
            indexContainer : ".img-index",//下标容器
            prev : ".carousel-prev",//左按钮
            next : ".carousel-next",//右按钮
            timing : 3000,//自动播放间隔
            animateTime : 700,//动画时间
            autoPlay : true,//是否自动播放 true/false
            direction : "left",//滚动方向 right/left
        });

        $(".carousel-content").hover(function(){
            $(".carousel-prev,.carousel-next").fadeIn(300);
        },function(){
            $(".carousel-prev,.carousel-next").fadeOut(300);
        });

        $(".carousel-prev").hover(function(){
            $(this).find("img").attr("src","./images/left2.png");
        },function(){
            $(this).find("img").attr("src","./images/left1.png");
        });
        $(".carousel-next").hover(function(){
            $(this).find("img").attr("src","./images/right2.png");
        },function(){
            $(this).find("img").attr("src","./images/right1.png");
        });
    });
</script>

</div>
<!--container结束-->

</body>

</html>