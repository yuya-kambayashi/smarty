<html>
<head>
<title>Smartyのテスト</title>
</head>
<body>
Hello, {$name}!
<br>
現在の日時は {$smarty.now|date_format:'%Y/%m/%d %H:%M:%S'} です。
<p>このサイトはSmarty version{$smarty.version} で作成されています。</p>
名前は {$name|upper} です。
<br>
名前は {$name|lower} です。
<br>
住所は {$address|capitalize:true} です。
<br>

住所は {$address|capitalize} です。
<br>
{if $engine == 'yahoo'}
  <p>検索サイトは<a href="https://www.yahoo.co.jp/">Yahoo</a>です</p>
{elseif $engine == 'Google'}
  <p>検索サイトは<a href="https://www.google.co.jp/">Google</a>です</p>
{else}
  <p>検索サイトは指定されていません</p>
{/if}

</body>
</html>
