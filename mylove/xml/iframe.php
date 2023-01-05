<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>小明 & 小红</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
		@font-face {
			font-family: digit;
			src: url("//static.51bbw.cn/temp/9/digital-7_mono.ttf"/*tpa=./digital-7_mono.ttf*/) format("truetype");
		}
	</style>
	 <script src="https://sdk.51.la/perf/js-sdk-perf.min.js" crossorigin="anonymous"></script><script>new LingQue.Monitor().init({id:"JWhH76zbSJ9K2QhV"});</script>
	  
	<link href="//static.51bbw.cn/temp/9/css/default.css" tppabs="//static.51bbw.cn/temp/9/css/default.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="//static.51bbw.cn/temp/9/js/jquery.js" tppabs="//static.51bbw.cn/temp/9/js/jquery.js"></script>
	<script type="text/javascript" src="//static.51bbw.cn/temp/9/js/garden.js" tppabs="//static.51bbw.cn/temp/9/js/garden.js"></script>
    <script type="text/javascript" src="//static.51bbw.cn/temp/9/js/functions.js" tppabs="//static.51bbw.cn/temp/9/js/functions.js"></script>
<body>
	<div id="mainDiv">
		<div id="content">
    <div id="code"> 
     <span class="comments"> 
	 <p>你的出现，占满了我的视线，我愿跟随你永远</p>
	 <p>自从遇见你那天开始，我的心就像跌进深深的湖水，推不开躲不掉，心一直想往你身上靠</p>
	 <p>只要你愿意，当你失落失意的时候，需要一个肩膊的时候，告诉我，我会立即出现</p>
	 <p>之前我不相信一见钟情，但是见到你的那一刻，我否定了我的看法。我的心为你沦陷，从此只为你跳动</p>
	 <p>有一种爱的感觉，叫感同身受。有一种爱的默契，叫心有灵犀。有一种爱的承诺，叫天长地久</p>
	 <p>有一种爱的方式，是执子之手,与子携老</p>
	 <p>莎士比亚说过：爱情是一种甜蜜的痛苦，但是我愿意忍受这种痛苦</p>
	 <p>莎士比亚还说过，世界上没有比服侍爱情更快乐的了，你愿不愿意享受这种快乐？</p>
	 <p>I LOVE YOU</p>
	 </span> 
    </div> 
			<div id="loveHeart">
				<canvas id="garden"></canvas>
				<div id="words">
					<div id="messages">
						小红, 这是我们的第
						<div id="elapseClock"></div>
					</div>
					<div id="loveu">
						永远爱你，一辈子，不分离！<br/>
						<div class="signature">- 小明</div>

				</div>
			</div>
</div>
	<div class="bg1">	
		<div class="main">
			

		</div>
	</div>
</div>

	<script type="text/javascript">
		var offsetX = $("#loveHeart").width() / 2;
		var offsetY = $("#loveHeart").height() / 2 - 55;
		
			var together = new Date();
		    var strs = "2016-10-21 00:00:00";
            var nowTime=new Date();
            var together = new Date(strs.replace(/-/g,"/"));	
			timeElapse(together);
			setInterval(function () {timeElapse(together);}, 500);
			function timeElapse(c){
			var e=Date();
			var f=(Date.parse(e)-Date.parse(c))/1000;
			var g=Math.floor(f/(3600*24));f=f%(3600*24);
			var b=Math.floor(f/3600);
			if(b<10){b="0"+b}f=f%3600;var d=Math.floor(f/60);
			if(d<10){d="0"+d}f=f%60;
			if(f<10){f="0"+f}
			var a='<span class="digit">'+g+'</span> 天 <span class="digit">'+b+'</span> 小时 <span class="digit">'+d+'</span> 分钟 <span class="digit">'+f+"</span> 秒";$("#elapseClock").html(a)};
		
		if (!document.createElement('canvas').getContext) {
			var msg = document.createElement("div");
			msg.id = "errorMsg";
			msg.innerHTML = "提醒您：您的浏览器版本过旧^_^<br/>"+
				"推荐使用谷歌浏览器 360极速浏览器等 请先升级您的浏览器，效果很炫哦~~"; 
			document.body.appendChild(msg);
			$("#code").css("display", "none")
			$("#copyright").css("position", "absolute");
			$("#copyright").css("bottom", "10px");
		    document.execCommand("stop");
		} else {
			setTimeout(function () {
				adjustWordsPosition();
				startHeartAnimation();
			}, 5000);

			timeElapse(together);
			setInterval(function () {
				timeElapse(together);
			}, 500);

			adjustCodePosition();
			$("#code").typewriter();
		}
	</script>
	
	
	    <script charset="UTF-8" id="LA_COLLECT" src="//sdk.51.la/js-sdk-pro.min.js"></script><script>LA.init({id: "JWhHl05vnbv6HXOZ",ck: "JWhHl05vnbv6HXOZ"})</script>	      <script>var _bgm_url = "//www.51bbw.cn/audio/adminbgm/202112/5b6af41c7052c1e0d6aa5a0b431ba787.mp3";</script><script src="//static.51bbw.cn/js/music_play.js"></script>

</body>
</html>