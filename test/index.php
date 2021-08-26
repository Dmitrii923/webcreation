<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>サンプル</title>
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="js/scrollsmoothly.js" charset="utf-8"></script>
<script src="js/script.js"></script>

<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery.masonry.min.js"></script>
<script src="js/modernizr-transitions.js"></script><!--アニメーション用-->
<script>
 $(function(){
   
  $('#container').masonry({ //親要素のクラスを指定
    itemSelector: '.box', //整理される要素のclassを指定
    columnWidth: 0, //一列の幅サイズを指定
    isAnimated: true, //スムースアニメーション設定
    isFitWidth: true, //親要素の幅サイズがピッタリ
    isRTL: false,     //整理される要素が左右逆になる（読み言語などに）
    gutterWidth: 0,   //整理される要素間の溝の幅を指定
    containerStyle: { position: 'relative' }, //親要素にスタイルを追加できる
    isResizable: true //ウィンドウサイズが変更された時に並び替え
  });
   
});
</script>

</head>

<body>
<div id="header">
<h1>群馬県｜キャバクラ｜Sample</h1>
<div class="inner">
		<!-- ロゴ -->
		<div class="logo">
			<a href="index.php">
			<h2><img src="img/logo.jpg" width="240"></h2></a>
            
</div>
		<!-- / ロゴ -->
    
	  <!-- メインナビゲーション -->
    <nav id="mainNav">
  		<a class="menu" id="menu"><span>MENU</span></a>
			<div class="panel">
				<ul><li><a href="index.php">TOP PAGE</a></li><li><a href="index.php">TOP PAGE</a></li><li><a href="index.php">TOP PAGE</a></li><li><a href="index.php">TOP PAGE</a></li><li><a href="index.php">TOP PAGE</a></li><li><a href="index.php">TOP PAGE</a></li><li><a href="index.php">TOP PAGE</a></li></ul>
      </div>
    </nav>
		<!-- メインナビゲーション -->
    
  </div>
</div>


<div id="container" class="transitions-enabled centered clearfix">

  <div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
 <div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
  <div class="box col4">
    <p><img src="img/sam1.jpg" width="580" height="387"></p>
  </div>

 <div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
 <div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
  <div class="box col4">
    <p><img src="img/sam1.jpg" width="580" height="387"></p>
  </div><div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
 <div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
  <div class="box col4">
    <p><img src="img/sam1.jpg" width="580" height="387"></p>
  </div><div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
 <div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
  <div class="box col4">
    <p><img src="img/sam1.jpg" width="580" height="387"></p>
  </div><div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
 <div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
  <div class="box col4">
    <p><img src="img/sam1.jpg" width="580" height="387"></p>
  </div><div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
 <div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
  <div class="box col4">
    <p><img src="img/sam1.jpg" width="580" height="387"></p>
  </div><div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
 <div class="box col2">
    <p><img src="img/sam2.jpg" width="280" height="177"></p>
  </div>
  <div class="box col4">
    <p><img src="img/sam1.jpg" width="580" height="387"></p>
  </div>


</div> <!-- #container -->
<div id="footer">

	<div class="inner">
    
		<!-- 3カラム -->
    <section class="gridWrapper"><article class="grid">
      	<!-- ロゴ -->
				<p class="logo"><a href="index.php">SAMPLE<br>
キャバクラ　サンプル<br><span>群馬県、キャバクラ</span></a></p>
				<!-- / ロゴ -->
			</article>
			
      <article class="grid">
      	電話番号+受付時間
				<p class="tel">電話/FAX: <strong>0120-112-112</strong></p>
				<p class="tel">E-mail : <a href="mailto:info@icdesign.net">info@icdesign.net</a></p>
	   <p>受付時間: 平日 AM 10:00 ～ PM 6:00</p>
				 (メールでの受付24時間OK)</article>
			
      <article class="grid copyright">
   	Copyright(c) 2015 Sample. All Rights Reserved. Design by <a href="http://webcreation-lab.com" target="_blank" rel="nofollow">Sample</a>
			</article></section>
		<!-- / 3カラム -->
      
	</div>
</div>
</body>
</html>