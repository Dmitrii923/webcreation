<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php

//-----------------以下基本設定　必ず設定してください。--------------------------

//サイトのトップページのURL　※送信完了後に「トップページへ戻る」ボタンが表示されますので
$site_top = "http://www.webcreation-lab.com/";

// このPHPファイルの名前 ※ファイル名を変更した場合は必ずここも変更してください。
$file_name ="mail2.php";

// メールを受け取るメールアドレス(複数指定する場合は「,」で区切ってください)
$to = "info@webcreation-lab.com";

// 送信完了後に自動的に指定のページに移動する(する=1, しない=0)
// 0にすると、送信終了画面が表示されます。
$jpage = 0;

// 送信完了後に表示するページ（上記で1を設定した場合のみ）
$next = "http://www.webcreation-lab.com/";

//--------- 以下は必要に応じて設定してください --------------

// 送信されるメールのタイトル（件名）
$sbj = "新規お問い合せ";

// 送信確認画面の表示(する=1, しない=0)
$chmail = 1;

// 差出人は、送信者のメールアドレスにする(する=1, しない=0)
// する場合は、メール入力欄のname属性の値を「Email」にしてください。
$from_add = 1;

// 差出人に送信内容確認メールを送る(送る=1, 送らない=0)
// 送る場合は、メール入力欄のname属性の値を「Email」にしてください。
//また差出人に送るメール本文の文頭に「○○様」と表示させるには名前入力欄のname属性を name="名前" としてください
$remail = 0;

// 差出人に送信確認メールを送る場合のメールのタイトル（上記で1を設定した場合のみ）
$resbj = "送信ありがとうございました";


// 必須入力項目を設定する(する=1, しない=0)
$esse = 1;

/* 必須入力項目(入力フォームで指定したname属性の値を指定してください。（上記で1を設定した場合のみ）
日本語はシングルクォーテーションで囲んで下さい。複数指定する場合は「,」で区切ってください)*/
$eles = array('店舗名','ご担当者名','ご担当者名フリガナ','電話番号','Email');


//--------------------- 基本設定ここまで -----------------------------------

// 以下の変更は知識のある方のみ自己責任でお願いします。

$sendmail = 0;
foreach($_POST as $key=>$val) {
  if($val == "submit") $sendmail = 1;
}

// 文字の置き換え
$string_from = "＼";
$string_to = "ー";

// 未入力項目のチェック
if($esse == 1) {
  $flag = 0;
  $length = count($eles) - 1;
  foreach($_POST as $key=>$val) {
    $key = strtr($key, $string_from, $string_to);
    if($val == "submit") ;
    else {
      for($i=0; $i<=$length; $i++) {
        if($key == $eles[$i] && empty($val)) {
          $errm .= "<FONT color=#ff0000>「".$key."」は必須入力項目です。</FONT><br>\n";
          $flag = 1;
        }
      }
    }
  }
  foreach($_POST as $key=>$val) {
    $key = strtr($key, $string_from, $string_to);
    for($i=0; $i<=$length; $i++) {
      if($key == $eles[$i]) {
        $eles[$i] = "check_ok";
      }
    }
  }
  for($i=0; $i<=$length; $i++) {
    if($eles[$i] != "check_ok") {
      $errm .= "<FONT color=#ff0000>「".$eles[$i]."」が未選択です。</FONT><br>\n";
      $eles[$i] = "check_ok";
      $flag = 1;
    }
  }
  if($flag == 1){
    htmlHeader();
?>
<!--- 未入力があった時の画面 --- 開始 --------------------->
<div id="header">
  <img src="img/logo.jpg" alt="WEB制作研究所" width="359" height="31"><h1>キャバクラ・クラブ・ガールズバー専門のホームページ制作集団</h1>
</div>
<?php include ('php/menu.php'); ?>
<div id="main">
  <div id="contactpage"> 
    <h2>ホームページの修正依頼</h2>
    
    <div id="contact1">
入力エラー<br><br>
<?php echo $errm; ?>
<br><br>
<input type="button" value="前画面に戻る" onClick="history.back()">
</div></div>
  <?php include ('php/footer.php'); ?>
</div>
<!--- 終了 --->

<?php 
    htmlFooter();
    exit(0);
  }
}
// 届くメールのレイアウトの編集

$body="「".$sbj."」からメールが届きました\n\n";
$body.="■□■□■□■□■□■□■□■□■□■□■□■□■□\n\n";
foreach($_POST as $key=>$val) {
  $key = strtr($key, $string_from, $string_to);
  
  //※numata追記　チェックボックス（配列）の場合は以下の処理で複数の値を取得するように変更した。　HTML側のname属性の値に[と]を追加する。
  $out = '';
  if(is_array($val)){
  foreach($val as $item){ 
  $out .= $item . ','; 
  }
  if(substr($out,strlen($out) - 1,1) == ',') { 
  $out = substr($out, 0 ,strlen($out) - 1); 
  }
 }
    else {
        $out = $val;
}
  //チェックボックス（配列）追記ここまで
  if(get_magic_quotes_gpc()) { $out = stripslashes($out); }
  if($out == "submit") ;
  else $body.="【 ".$key." 】 ".$out."\n";
}
$body.="\n■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
$body.="送信された日時：".date( "Y/m/d (D) H:i:s", time() )."\n";
$body.="送信者のIPアドレス：".$_SERVER["REMOTE_ADDR"]."\n";
$body.="送信者のホスト名：".getHostByAddr(getenv('REMOTE_ADDR'))."\n";
//--- 終了 --->


if($remail == 1) {
//--- 差出人への送信確認メールのレイアウト

if(isset($_POST['お名前'])){ $rebody = "{$_POST['お名前']} 様\n\n";}
$rebody.="お問い合わせありがとうございました。\n";
$rebody.="早急にご返信致しますので今しばらくお待ちください。\n\n";
$rebody.="送信内容は以下になります。\n\n";
$rebody.="■□■□■□■□■□■□■□■□■□■□■□■□■□\n\n";
foreach($_POST as $key=>$val) {
  $key = strtr($key, $string_from, $string_to);
  
  
  //※numata追記　チェックボックス（配列）の場合は以下の処理で複数の値を取得するように変更　HTML側のname属性の値に[と]を追加する。
  $out = '';
  if(is_array($val)){
  foreach($val as $item){ 
  $out .= $item . ','; 
  }
  if(substr($out,strlen($out) - 1,1) == ',') { 
  $out = substr($out, 0 ,strlen($out) - 1); 
  }
 }
    else {
        $out = $val;
}
  //チェックボックス（配列）追記ここまで
  if(get_magic_quotes_gpc()) { $out = stripslashes($out); }
  if($out == "submit") ;
  
  else $rebody.="【 ".$key." 】 ".$out."\n";
}
$rebody.="\n■□■□■□■□■□■□■□■□■□■□■□■□■□\n\n";
$rebody.="送信日時：".date( "Y/m/d (D) H:i:s", time() )."\n";
$reto = $_POST['Email'];
$rebody=mb_convert_encoding($rebody,"JIS","utf-8");
$resbj="=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($resbj,"JIS","utf-8"))."?=";
$reheader="From: $to\nReply-To: ".$to."\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();

}

$body=mb_convert_encoding($body,"JIS","utf-8");
$sbj="=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($sbj,"JIS","utf-8"))."?=";
if($from_add == 1) {
  $from = $_POST['Email'];
  $header="From: $from\nReply-To: ".$_POST['Email']."\nContent-Type:text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
} else {
  $header="Reply-To: ".$to."\nContent-Type:text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
}
if($chmail == 0 || $sendmail == 1) {
  mail($to,$sbj,$body,$header);
  if($remail == 1) { mail($reto,$resbj,$rebody,$reheader); }

}
else { htmlHeader();
?>

<!-- 送信確認画面のレイアウト　-->
<div id="header">
  <img src="img/logo.jpg" alt="WEB制作研究所" width="359" height="31"><h1>キャバクラ・クラブ・ガールズバー専門のホームページ制作集団</h1>
</div>
<?php include ('php/menu.php'); ?>
<div id="main">
  <div id="contactpage"> 
    <h2>ホームページの修正依頼</h2>
    
    <div id="contact1">

以下の内容で間違いがなければ、「送信する」ボタンを押してください。<br><br>
<form action="<?php echo $file_name; ?>" method="POST">
<?php echo $err_message; ?>
<table>
<?php
foreach($_POST as $key=>$val) {
  $key = strtr($key, $string_from, $string_to);
  
  //※numata追記　チェックボックス（配列）の場合は以下の処理で複数の値を取得するように変更　HTML側のname属性の値にも[と]を追加する。
  $out = '';
  if(is_array($val)){
  foreach($val as $item){ 
  $out .= $item . ','; 
  }
  if(substr($out,strlen($out) - 1,1) == ',') { 
  $out = substr($out, 0 ,strlen($out) - 1); 
  }
 }
    else {
        $out = $val;
}
  //チェックボックス（配列）追記ここまで
  
  if(get_magic_quotes_gpc()) { $out = stripslashes($out); }
  $out = htmlspecialchars($out);
  $key = htmlspecialchars($key);
  print("<tr><td class=\"l_Cel\">".$key."</td><td>".$out);
?>
<input type="hidden" name="<?php echo $key; ?>" value="<?php echo $out; ?>">
<?php
  print("</td></tr>\n");
}
?>
</table>
<br>
<input type="hidden" name="mail_set" value="submit">
<input type="submit" value="送信する">
<input type="button" value="前画面に戻る" onClick="history.back()">
</form>
</div></div>
  <?php include ('php/footer.php'); ?>
</div>

<?php htmlFooter(); } if(($jpage == 0 && $sendmail == 1) || ($jpage == 0 && ($chmail == 0 && $sendmail == 0))) { htmlHeader(); ?>


<!-- 送信終了画面のレイアウト-->
<div id="header">
  <img src="img/logo.jpg" alt="WEB制作研究所" width="359" height="31"><h1>キャバクラ・クラブ・ガールズバー専門のホームページ制作集団</h1>
</div>
<?php include ('php/menu.php'); ?>
<div id="main">
  <div id="contactpage"> 
    <h2>ホームページの修正依頼</h2>
    
    <div id="contact1">
    <center>
送信ありがとうございました。<br>
送信は正常に完了しました。<br><br>

<a href="<?php echo $site_top ;?>">トップページへ戻る⇒</a>

</center>
</div></div>
  <?php include ('php/footer.php'); ?>
</div>
<?php htmlFooter(); } else if(($jpage == 1 && $sendmail == 1) || $chmail == 0) { header("Location: ".$next); } function htmlHeader() { ?>
<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Strict//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>お問い合わせ</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<div id="wrapper">
<?php } function htmlFooter() { ?>
</div>
</body>
</html>

<?php } ?>