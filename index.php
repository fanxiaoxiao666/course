<?php
include"head.php";
$pageSize=8;
if(empty($_GET["pageNo"]))
{
	$currentPage=1;
}
else
{
	$currentPage=$_GET["pageNo"];
}
$pageIndex=($currentPage-1)*$pageSize;
?>
<div class="container">
    <h3><strong>Web</strong>前端课程推荐</h3>
    <p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
    <hr>
</div>
<div class="container">
    <div class="row">
     <?php  
     
			$sql="SELECT * FROM list ORDER BY id DESC LIMIT $pageIndex,$pageSize";
			$sqlTotal="SELECT * FROM list";
			$result=$conn->query($sql);
			$resultTotal=$conn->query($sqlTotal);
			$pageTotal=ceil($resultTotal->num_rows/$pageSize);
			if($result->num_rows)
			{
				while($row=$result->fetch_assoc())
				{
	   ?>
        	<div class="col-md-3 col-xs-6">
            <div class="thumbnail">
                <a href="content.php?id=<?php echo $row["id"];?>"><img src="<?php echo $row["thumb"];?>" title="<?php echo $row["title"];?>"></a>
            <div class="caption">
                <h4 class="text-info"><a href="content.php?id=<?php echo $row["id"];?>" title="<?php echo $row["description"];?>"><?php echo mb_substr($row["description"],0,12,"utf8")."...";?></a></h4>
                <p><a href="liebiao.php?column=<?php echo $row["column"];?>" ><?php echo $row["column"];?></a></p>
                <p>
                    <?php  echo mb_substr($row["description"],0,20,"utf8")."...";?>
                </p>
            </div>
            </div>
        </div>
        <?php
				}
		}
		else
		{
			echo "没有数据";
		}
			?>
	</div>
	</div>
   <div class="container text-center">
   		<ul class="pagination">
   			<li><a href="index.php?pageNo=<?php echo $currentPage-1;?>"
   			class="btn <?php if($currentPage==1){echo  disabled;};?>"
   			><span class="icon-double-angle-left"></span></a></li>
   		<?php
   		for($i=0;$i<$pageTotal;$i++)
   		{
   		?>
   			<li><a href="index.php?pageNo=<?php echo $i+1;?>"><?php echo $i+1;?></a></li>
   		
   		<?php
   		
   		}
		?>
   			
   			
   		<li><a href="index.php?pageNo=<?php echo $currentPage+1;?>"
   			class="btn <?php if($currentPage==$pageTotal){echo  disabled;};?>"
   		><span class=" icon-double-angle-right"></span></a></li>
   		</ul>
   </div>   
    <div class="container">
        <h3><strong>Web</strong>前端课程选择</h3>
        <p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
        <hr>


        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th>班级名称</th>
                    <th>课时</th>
                    <th>价格</th>
                    <th>免费试听</th>
                    <th>购买课程</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>就业精品班(面授/封闭班/包食宿)</td>
                    <td>4个月</td>
                    <td>优惠价17800.00<del>原价19800.00</del></td>
                    <td><span class="glyphicon glyphicon-headphones"> 预约</span></td>
                    <td><button type="button" class="btn btn-danger btn-sm">立即报名</button></td>
                </tr>
                <tr>
                    <td>就业精品班(面授/封闭班/包食宿)</td>
                    <td>4个月</td>
                    <td>优惠价17800.00<del>原价19800.00</del></td>
                    <td><span class="glyphicon glyphicon-headphones "> 预约</span></td>
                    <td><button type="button" class="btn btn-danger btn-sm">立即报名</button></td>
                </tr>
                <tr>
                    <td>就业精品班(面授/封闭班/包食宿)</td>
                    <td>4个月</td>
                    <td>优惠价17800.00<del>原价19800.00</del></td>
                    <td><span class="glyphicon glyphicon-headphones "> 预约</span></td>
                    <td><button type="button" class="btn btn-danger btn-sm">立即报名</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="foot">
            <p>Copyright1999-2016北京中公教育科技股份有限公司.All Rights Reserved 京ICP证161188号</p>
        </div>
    </div>
</body>
</html>