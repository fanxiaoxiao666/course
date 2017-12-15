<?php
include 'header.php';
if(empty($_GET["column"]))
{
	$sql="SELECT * FROM list ORDER BY id DESC";
}
else
{ 	
	$column=$_GET["column"];
	$sql="SELECT * FROM list WHERE `column` = '$column'";
};

?>
        <div class="row">
        	<div class="col-md-3">
            	<ul class="list-group">
                  <li class="list-group-item list-group-item-success">文章栏目</li>
                  <li class="list-group-item"><a href="column.php?column=Web前端开发">Web前端开发</a></li>
                  <li class="list-group-item"><a href="column.php?column=UI设计">UI设计</a></li>
                  <li class="list-group-item"><a href="column.php?column=PHP开发">PHP开发</a></li>
                  <li class="list-group-item"><a href="column.php?column=JAVA开发">JAVA开发</a></li>
                  <li class="list-group-item"><a href="column.php?column=网络营销">网络营销</a></li>
                  <li class="list-group-item list-group-item-success"><a href="publish.php">发布文章</a></li>
                </ul>
            </div>
            <div class="col-md-9" style="border-left:1px solid #eaeaea;">
            <?php
            if($result=$conn->query($sql))
								{
					?>
            	<table class="table">
                    <tr>
                        <th>id</th>
                        <th>文章标题</th>
                        <th>发布日期</th>
                        <th>操作</th>
                    </tr>
                   <?php
								
									while($row=$result->fetch_assoc())
									{
									
							?>	
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["title"];?></td>
                        <td><?php echo date("Y-m-d H:i:s",$row["reg_date"]);?></td>
                        <td><a id="a1" href="tips.php?id=<?php echo $row["id"];?>">删除</a> <a href="update.php?id=<?php echo $row["id"];?>">修改</a></td>
								</tr>
								
							<?php
								}
							?>
							
						</table>
								<?php
								}
							else
						{
						echo "暂时没有数据";
						}
					?>
					            
               

            </div>
        </div>
        <div class="panel-footer" style="margin-top:50px;">
    		Copyright1999-2016 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP证161188号
    	</div>
    </div>
</body>
</html>