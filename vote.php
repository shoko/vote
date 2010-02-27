<?php
$mainpage = "index.php";
$msg = vote();
echo "<html>";
echo "<head>";
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
echo '<meta http-equiv="Refresh" content="5;index.php">';
echo "</head>";
echo "<body>";
echo $msg."<br><br>";
echo "5秒でもとの";
echo "</body>";
echo "</html>";
exit();

function vote() {
	$qfile = "data/question.txt";
	$datafile = "data/vote.dat";
	$cookiename = "VOTE";
	if(isset($_COOKIE[$cookiename])) {
		return "二重投稿はご遠慮ください";
	}
	
	//クッキーのセット
	setcookie($cookiename, "1");
	if(isset($_POST['quest'])) {
		$vote = trim($_POST['quest']);
		//質問ファイルを読み出す
		$n_vote = 0;
		$n_q =0;
		$fn = fopen($qfile,"r");
		if ($fn === false) {
			return "質問ファイルが読み出せません";
		}
		while (!feof($fn)){
			$str = trim(fgets($fn));
			//タイトルは読みとばす
			if (substr($str,0,2) == "t:"){
				continue;
			}
			if(strlen($str) == 0) {
				continue;		
			}
			if(strcmp($vote, $str)){
				$n_bote = $n_q;
			}
			$n_q++;
		}
	}
	fclose($fn);
	
	//データファイルを読み出す
	$fr = @fopen($datafile,"r");
	$fw = @fopen($datafile.".tmp","w");
	if($fw === false) {
		return "データファイルが読み出せません";
	}
	for ($i=0; $i<$n_q; $i++) {
		if($fr !== false) {
			$str = trim(fgets($fr));
			$count = intval($str);
		} else {
			$count = 0;
		}
		if ($i == $n_vote) {
			$count++;
		}
		fputs($fw, $count."\n");
	}
	@fclose($fr);
	@fclose($fw);
	@unlink($datafile);
	@rename($datafile.".tmp", $datafile);
	return "投票ありがとうございました";
}  
	return "投票されていません";
?>