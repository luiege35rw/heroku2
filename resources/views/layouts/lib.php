<?php

// 【PHP】検索文字列をハイライトさせる簡単な方法 ライブラリ

// あいまい検索用の変換処理
function search_henkan($str){

	// 日本語はひらがなに統一（「全角カタカナ」を「全角ひらがな」に変換） 
	$str = mb_convert_kana($str, 'c', 'UTF-8');

	// 英数字は半角に統一（「全角」英数字を「半角」に変換）
	$str = mb_convert_kana($str, 'a', 'UTF-8');

	// 大文字は小文字に統一
	$str = mb_strtolower($str, 'UTF-8');

	return $str;
}

// 検索される文字列から検索する文字列を検索し、ヒットしたらその部分をハイライトして返す。
function search_highlight($search_string, $target_string){

	if(empty($search_string)){ // 検索する文字列が空ならば、検索される文字列をそのまま返す。
		return $target_string;
	}

	// 両者をあいまい検索用の変換にかける。
	$target_string2 = search_henkan($target_string);
	$search_string2 = search_henkan($search_string);

	// 検索する文字列がヒットしたら、ハイライトして返す。

	if(($pos = mb_strpos($target_string2, $search_string2, 0, 'UTF-8')) !== FALSE){ // ヒットしたら
		
		// ヒットしたそれを、検索される文字列（変換前）から取り出す。
		$str = mb_substr($target_string, $pos, mb_strlen($search_string, 'UTF-8'), 'UTF-8');

		// 検索される文字列（変換前）から、検索する文字列をハイライトして、返す。
		return str_replace($str, "<SPAN style='background-color:yellow'>{$str}</SPAN>", $target_string);

	}else{ // 見つからなければ、検索される文字列をそのまま返す。
		return $target_string;
	}
}

?>