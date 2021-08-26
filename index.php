<?php
$info = getenv("HTTP_USER_AGENT");

$ua=$_SERVER['HTTP_USER_AGENT'];

//===設定箇所=====================================

//android用でのアクセス用URL

$Android="http://webcreation-lab.com/s/";

//iPhone用でのアクセス用URL

$iphone="http://webcreation-lab.com/s/";

//docomo用でのアクセス用URL

$docomo ="http://webcreation-lab.com/s/";

//lmode用でのアクセス用URL

$Lmode ="http://webcreation-lab.com/s/";

//AU用でのアクセス用URL

$kddi="http://webcreation-lab.com/s/";

//WILLCOM用でのアクセス用URL

$willcom="http://webcreation-lab.com/s/";

//SOFTBANK用でのアクセス用URL

$softbank="http://webcreation-lab.com/s/";


//===ここまで=====================================


if((strpos($ua,'Android')!==false)&&(strpos($ua,'Mobile')!==false)) {
 
    header("Location: $Android");
    exit;
}
elseif(ereg("iPhone" , $info)){
    header("Location: $iphone");
    exit;
}
elseif(ereg("DoCoMo" , $info)){
    header("Location: $docomo");
    exit;
}
elseif(ereg("L-mode" , $info)){
    header("Location: $lmode");
    exit;
}
elseif(ereg("KDDI" , $info)){
    header("Location: $kddi");
    exit;
}
elseif(ereg("UP.Browser" , $info)){
    header("Location: $kddi");
    exit;
}
elseif(ereg("WILLCOM" , $info)){
    header("Location: $willcom");
    exit;
}
elseif(ereg("J-PHONE" , $info)){
    header("Location: $softbank");
    exit;
}
elseif(ereg("SoftBank" , $info)){
    header("Location: $softbank");
    exit;
}
elseif(ereg("Vodafone" , $info)){
    header("Location: $softbank");
    exit;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>キャバクラ・ガールズバーのホームページ制作なら「Web制作研究所」</title>
<meta name="description" content="キャバクラ・ガールズバーのホームページ制作・Web制作の「Web制作研究所」PC版公式ホームページです。「Web制作研究所」はキャバクラ・ガールズバー専門ホームページ制作集団です。デザインと機能性にこだわったホームページを制作します。">
<meta name="keywords" content="ホームページ制作,Web制作,格安,キャバクラ,ガールズバー">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/styles.css" />

</head>

<body>

<div id="header">
  <a href="index.php" title="キャバクラ ホームページ制作「Web制作研究所」"><img src="img/logo.jpg" alt="キャバクラ ホームページ制作「Web制作研究所」" width="359" height="31"></a>
  <h1>キャバクラ・クラブ・ガールズバー専門のホームページ制作集団</h1>
</div>
<div id="button">
<a href="index.php" title="キャバクラ ホームページ制作「Web制作研究所」ホーム"><img src="img/b1.jpg" border="0" onmouseover="this .src='img/b1_mo.jpg'"onmouseout="this .src='img/b1.jpg'" width="141" height="49" alt="キャバクラ ホームページ制作「Web制作研究所」ホーム" /></a><a href="about.php" title="キャバクラ ホームページ制作「Web制作研究所」ホームページについて"><img src="img/b2.jpg" border="0" onmouseover="this .src='img/b2_mo.jpg'"onmouseout="this .src='img/b2.jpg'" width="142" height="49" alt="キャバクラ ホームページ制作「Web制作研究所」ホームページについて" /></a><a href="function.php" title="キャバクラ ホームページ制作「Web制作研究所」機能紹介"><img src="img/b3.jpg" border="0" onmouseover="this .src='img/b3_mo.jpg'"onmouseout="this .src='img/b3.jpg'" width="141" height="49" alt="キャバクラ ホームページ制作「Web制作研究所」機能紹介" /></a><a href="price.php" title="キャバクラ ホームページ制作「Web制作研究所」価格・概要"><img src="img/b4.jpg" border="0" onmouseover="this .src='img/b4_mo.jpg'"onmouseout="this .src='img/b4.jpg'" width="142" height="49" alt="キャバクラ ホームページ制作「Web制作研究所」価格・概要" /></a><a href="order.php" title="キャバクラ ホームページ制作「Web制作研究所」ご注文の流れ"><img src="img/b5.jpg" border="0" onmouseover="this .src='img/b5_mo.jpg'"onmouseout="this .src='img/b5.jpg'" width="141" height="49" alt="キャバクラ ホームページ制作「Web制作研究所」ご注文の流れ" /></a><a href="showcase.php" title="キャバクラ ホームページ制作「Web制作研究所」導入実績"><img src="img/b6.jpg" border="0" onmouseover="this .src='img/b6_mo.jpg'"onmouseout="this .src='img/b6.jpg'" width="142" height="49" alt="キャバクラ ホームページ制作「Web制作研究所」導入実績" /></a><a href="contact.php" title="キャバクラ ホームページ制作「Web制作研究所」ご注文"><img src="img/b7.jpg" border="0" onmouseover="this .src='img/b7_mo.jpg'"onmouseout="this .src='img/b7.jpg'" width="143" height="49" alt="キャバクラ ホームページ制作「Web制作研究所」ご注文" /></a></div>
<div id="slider"><img src="img/top1.jpg" width="988" height="400" alt="キャバクラ ホームページ制作「Web制作研究所」PR"></div>
<div id="main">
  <div id="left"><a href="price.php" title="キャバクラ ホームページ制作「Web制作研究所」価格・概要"><img src="img/top_banner1.jpg" border="0" onmouseover="this .src='img/top_banner1_mo.jpg'"onmouseout="this .src='img/top_banner1.jpg'" width="211" height="201" alt="キャバクラ ホームページ制作「Web制作研究所」価格・概要" /></a><a href="about.php" title="キャバクラ ホームページ制作「Web制作研究所」ホームページについて"><img src="img/top_banner2.jpg" border="0" onmouseover="this .src='img/top_banner2_mo.jpg'"onmouseout="this .src='img/top_banner2.jpg'" width="211" height="66" alt="キャバクラ ホームページ制作「Web制作研究所」ホームページについて" /></a><a href="function.php" title="キャバクラ ホームページ制作「Web制作研究所」機能紹介"><img src="img/top_banner3.jpg" border="0" onmouseover="this .src='img/top_banner3_mo.jpg'"onmouseout="this .src='img/top_banner3.jpg'" width="211" height="66" alt="キャバクラ ホームページ制作「Web制作研究所」機能紹介" /></a><a href="order.php" title="キャバクラ ホームページ制作「Web制作研究所」ご注文の流れ"><img src="img/top_banner4.jpg" border="0" onmouseover="this .src='img/top_banner4_mo.jpg'"onmouseout="this .src='img/top_banner4.jpg'" width="211" height="66" alt="キャバクラ ホームページ制作「Web制作研究所」ご注文の流れ" /></a><img src="img/top_banner5.jpg" border="0" onmouseover="this .src='img/top_banner5_mo.jpg'"onmouseout="this .src='img/top_banner5.jpg'" width="211" height="66" alt="キャバクラ ホームページ制作「Web制作研究所」お客様の声" /><a href="contact.php" title="キャバクラ ホームページ制作「Web制作研究所」お問い合せ"><img src="img/top_banner6.jpg" border="0" onmouseover="this .src='img/top_banner6_mo.jpg'"onmouseout="this .src='img/top_banner6.jpg'" width="211" height="66" alt="キャバクラ ホームページ制作「Web制作研究所」お問い合せ" /></a></div>
  <div id="right"><img src="img/top_banner7.jpg" width="761" height="284" alt="キャバクラ ホームページ制作「Web制作研究所」PR"><div id="top_box1"><img src="img/top_info.jpg" width="220" height="41"></div>
  <div id="top_box2">
  <img src="img/top_fb.jpg" width="205" height="41">
  <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2F%25E3%2582%25AD%25E3%2583%25A3%25E3%2583%2590%25E3%2582%25AF%25E3%2583%25A9%25E3%2582%25AC%25E3%2583%25BC%25E3%2583%25AB%25E3%2582%25BA%25E3%2583%2590%25E3%2583%25BC%25E3%2581%25AE%25E3%2583%259B%25E3%2583%25BC%25E3%2583%25A0%25E3%2583%259A%25E3%2583%25BC%25E3%2582%25B8%25E5%2588%25B6%25E4%25BD%259C%25E9%259B%2586%25E5%259B%25A3Web%25E5%2588%25B6%25E4%25BD%259C%25E7%25A0%2594%25E7%25A9%25B6%25E6%2589%2580%2F1468162983452078&amp;width=365&amp;height=270&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:365px; height:270px;" allowTransparency="true"></iframe>
  </div>
  </div>
  <div id="clear"></div>
<div id="footer"> <a href="index.php" title="キャバクラ ホームページ制作「Web制作研究所」ホーム">ホーム</a>　｜　<a href="about.php" title="キャバクラ ホームページ制作「Web制作研究所」ホームページについて">ホームページについて</a>　｜　<a href="function.php" title="キャバクラ ホームページ制作「Web制作研究所」機能紹介">機能紹介</a>　｜　<a href="price.php" title="キャバクラ ホームページ制作「Web制作研究所」価格・概要">価格・概要</a>　｜　<a href="order.php" title="キャバクラ ホームページ制作「Web制作研究所」ご注文の流れ">ご注文の流れ</a>　｜　<a href="showcase.php" title="キャバクラ ホームページ制作「Web制作研究所」導入実績">導入実績</a>　｜<a href="contact.php" title="キャバクラ ホームページ制作「Web制作研究所」ご注文・お問合せ">ご注文・お問合せ</a></div>
</div>
</body>
</html>