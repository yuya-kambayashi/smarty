<html>
<head>
<title>Smartyのテスト</title>
</head>
<body>
Hello, {$name}!
<br>
現在の日時は {$smarty.now|date_format:'%Y/%m/%d %H:%M:%S'} です。
<p>このサイトはSmarty version{$smarty.version} で作成されています。</p>
<br>
</body>
</html>
