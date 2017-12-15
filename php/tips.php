<?php
$id=$_GET["id"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>跳转页面</title>
<style>
*{margin:0; padding:0;}
.box{width:400px; height:200px; border:1px solid #ccc; position:absolute; left:50%; top:50%; margin:-100px 0 0 -200px;}
.box h2{line-height:40px; color:#fff; background:#333; text-align:center; font-size:22px;}
.box p{text-align:center; padding:40px 0 20px; font-weight:bold; font-size:18px; color:#f00;}
.box h4{padding:10px 50px; font-size:14px; font-weight:normal; text-align:center;}
.btn{text-align: center;}
</style>
</head>
<body>
<div class="box">
	<h2>提示内容</h2>
    <p>确定要删除吗?</p>
    <div class="btn">
    	<button type="button" >确定</button>
    	<button type="button" >取消</button>
    </div>
    
</div>
</body>
</html>
<script>

/*var oTime = document.getElementById('times');
var oA = document.getElementById('oA');*/
var oBtn=document.getElementsByTagName("button");
/*var timer = null;*/
/*timer = setInterval(function(){
	
	oTime.innerHTML--;
	if(oTime.innerHTML<=0)
	{
		window.location = oA.href;
	};
	
},1000);*/
oBtn[0].onclick=function()
{
	window.location="delete.php?id=<?php echo $id;?>"
}
oBtn[1].onclick=function()
{
	/*window.location="column.php";*/
	open("column.php","_self");
}
</script>