<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style type="text/css">
	* {
		margin: 0;
		padding: 0;
	}
	#tab {
		width: 600px;
		height: 500px;
		border: 4px solid teal;
		margin: 0 auto;
		position: relative;
	}
	#tab ul li {
		list-style: none;
		width: 200px;
		height: 50px;
		float: left;
		line-height: 50px;
		font-size: 30px;
		text-align: center;
		font-weight: 700;
	}
	#tab .con {
		width: 600px;
		height: 450px;
		position: absolute;
		top: 50px;
		left: 0;
		display: none;
	}
</style>
<script type="text/javascript">
	window.onload=function() {
		//抓取元素
		var tab=document.getElementById("tab");
		var lis=tab.getElementsByTagName("li");
		var cons=tab.getElementsByClassName("con");
		//循环，给li加单击事件
		for(var i=0;i<lis.length;i++) {
			//给i号加序号
			lis[i].xuhao=i;
			//给li加单击事件
			lis[i].onclick=function() {
				for(var i=0;i<cons.length;i++) {
					cons[i].style.display="none";
				}
				cons[this.xuhao].style.display="block";
			}
		}

	}
</script>
<body>
	<div id="tab">
		<ul>
			<li style="background: red;">新闻</li>
			<li style="background: yellow;">军事</li>
			<li style="background: blue;">财经</li>
		</ul>
		<div class="con" style="background: red; display:block;"></div>
		<div class="con" style="background: yellow;"></div>
		<div class="con" style="background: blue;"></div>
	</div>
</body>
</html>