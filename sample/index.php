<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ログイン</title>
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />

<!-- ※デフォルトのスタイル（style.css） -->
<link rel="stylesheet" media="all" type="text/css" href="css/index.css" />

<!-- ※スマートフォン用のスタイル（smart.css） -->
<link rel="stylesheet" media="all" type="text/css" href="css/smart.css" />

</head>

<body>

<div id="header">ログイン画面</div>
<div id="text1">【ユーザー名】と【パスワード】を入力してください。</div>
<div id="container">
<div id="loginbox">
<form action="check_login.php" method="post">
<p>アカウント ：<input style="width: 220px; height: 24px;" type="text" name="user" />
</p>
<p>パスワード：<input style="width: 220px; height: 24px;" type="password" name="pass" />
</p>
<p>
<input type="submit" style="width: 200px; height: 30px;" value="ログイン" />
</p>
</form>
</div>
</div>

</body>
</html>