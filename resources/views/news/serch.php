<?php
// ライブラリをインポート
require_once('lib.php');


// 【PHP】検索文字列をハイライトさせる簡単な方法

// ライブラリをインポート
require_once('lib.php');

// 検索される文字列
$target_string = <<< EOM
この本に向いているのはこんな人！<br>
さて、この本はどんな人に向いてそうか、考えてみました。<br><br>

入門書って、読みやすいけど面白いものが作れないからつまらない。<br>
面白いもの作ってみたいけど、たいてい難しい本ばかりで挫折してきた。<br>
楽してプログラミング中級者を名乗りたい<br><br>

といった、勉強したくないけど上達したい！というワガママなあなたにはピッタリです笑<br>
大丈夫、この本を実践し読み終わったころには、自動的に知識がついています。<br>
その後は、中級者向けの本にもすんなり入っていけるようになっているはずです。<br>
是非この本で、プログラミング中級者の仲間入りをしてください！
EOM;

// 検索する文字列をPOSTで受信する。
$search_string = '';
if(isset($_POST['search_string'])){
	$search_string = htmlspecialchars($_POST['search_string'], ENT_QUOTES, 'UTF-8');
}

// 検索される文字列から検索する文字列を検索し、見つかったらハイライトする。
$result_string = search_highlight($search_string, $target_string);

<form name="search_form" style="margin:10px" method="POST" action=".">
<input type="text" name="search_string" style="width:400px"><input type="submit" value="検索">
</form>

?>