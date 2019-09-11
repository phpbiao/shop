<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		input{
			outline: none;
			border: none;
		}
		p:nth-child(1) input{
			border: 1px dashed #b0b2b6;
			background: #e7eefe;
		}
		p:nth-child(1) input:focus{
			border: 1px dashed #ffd8e0;
			background: #fff7fb;
		}
		p:nth-child(2) input{
			border-bottom: 1px dashed red;
		}
		p:nth-child(3) input{
			border: 1px solid #dfdfdf; 
		}
	</style>
</head>
<body>
	<form action="index.php" method="post">
		<p>用户名：<input type="text"><br/></p>
		<p>邮　箱：<input type="text"><br/></p>
		<p>搜索一下：<input type="text" placeholder="请输入..."></p>
	</form>
</body>
</html>
