<?php
$conn = mysqli_connect('localhost', 'root', 'Llc123?123');
mysqli_select_db($conn, 'userdb');
mysqli_query($conn, 'set names utf8');
//总记录数
$rs = mysqli_query($conn, 'select count(*) from user where rank=2');
$rows = mysqli_fetch_row($rs);
$recodcount = $rows[0];
//echo $rows[0];   //检测建立连接，查找数据是否成功
//每页放置专家列表人数
$pagesize = 8;
//总页数
$pagecount = ceil($recodcount / $pagesize); //ceil()向上取整
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
if ($pageno < 1)
    $pageno = 1;
if ($pageno > $pagecount)
    $pageno = $pagecount;
//起始位置
$startno = ($pageno-1)*$pagesize;
$sql = 'select * from user where rank=2 limit '.$startno.','.$pagesize;
//limit后面跟常量 引号里面放上变量，变量就会被理解为字符串
//limit限制返回记录的条数，第一个参数是偏移量（第一个记录是0，第二个记录是1，依此类推）。第二个参数是行数，即显示多少行（个）记录。
$result=mysqli_query($conn,$sql);
?>

<meta charset="utf-8">
<table id="list">
    <tr>
        <th>姓名</th>
        <th>介绍</th>
        <th>电话</th>
        <th>&nbsp&nbsp&nbsp预约&nbsp&nbsp&nbsp</th>
    </tr>
    <?php while($rows=mysqli_fetch_assoc($result)):?>    <!--php流程控制的代替写法，可参考：http://www.jb51.net/article/23252.htm-->
    <tr>
        <td><?php echo $rows['username']?></td>
        <td><?php echo $rows['introduction']?></td>
        <td><?php echo $rows['mobile']?></td>
        <td><button onclick="javascript:void(0)">预约</button></td>
    </tr>
    <?php endwhile;?>
    <tr id="alist">
        <td colspan="4"> <!--设置单元格可横跨的列数。这里横跨姓名，照片，介绍，等级，电话5列-->
            <?php
                for($i=1;$i<=$pagecount;$i++)
                    echo "<a href='javascript:;' onclick='showList($i)' class='btn_list'>{$i}</a>&nbsp";
            ?>
        </td>
    </tr>
</table>
