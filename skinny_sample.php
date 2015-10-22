<?php
include_once( "Skinny.php" );
class Main {

	public function main(){
		// Skinny 呼び出し
		$out = new Skinny;
		// Skinnyへ渡す配列宣言（$outとします）
		$data = array();
		// テンプレートで出力したい内容を連想配列に追加
		$data['title']   = "Hello world.";
		$data['nowtime'] = time();  // 現在時刻とか
		$data['my_age']  = 25;      // 年齢とか
		$data['message'] = "動きました\nおめでとう!!\n";   // メッセージとか
		// $outの内容をSkinnyで出力
		$out->SkinnyDisplay( "skinny_sample.html", $data );
	}

}//class

$m = new Main;
$m->main();

