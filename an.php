<?php
//�A���P�[�g���[�֐�
function an() {
	include("smarty/Smarty.class.php");
	$qfile = "data/question.txt";
	$datafile = "data/vote.dat";
	$title = "������";
	
	//�A���P�[�g��ǂݏo��
	$questions = array();
	
	$fn = fopen($qfile,"rw");
	if($fn === false) {
		exit("����t�@�C�����ǂݏo���܂���");
	}
	//����t�@�C����ǂݏo��
	while(!feof($fn)) {
		$str = trim(fgets($fn));
		if(strlen($str) == 0) {
			break;
		}
		if (substr($str,0,2) == "t:"){
			list($dumm, $title) = split(":", $str);
			continue;
		}
		array_push($questions,$str);
	}
	fclose($fn);
	$smarty = new Smarty();
	$smarty->assign('title',$title);
	$smarty->assign('questions',$questions);
	return $smarty->fetch('an.tpl');
}

////�A���P�[�g���ʕ\���֐�
function vote_total() {
	include("smarty/Smarty.class.php");
	$qfile = "data/question.txt";
	$datafile = "data/vote.dat";
	$fq = @fopen($qfile,"r");
	$fd = @fopen($datafile,"r");
	$questions = array();
	$n_vote = 0;
	$n_q =0;
	$subtotal = 0;
	$title = "������";	
	while(!feof($fq)) {
		$str = trim(fgets($fq));
		if(strlen($str) == 0) {
			continue;
		}
		if (substr($str,0,2) == "t:"){
			list($dumm, $title) = split(":", $str);
			continue;
		}
		$questions[$n_q]['str'] = $str;
		$count = 0;
		if ($fd !== false) {
			$count = intval(trim(fgets($fd)));
		}
		$questions[$n_q]['votes'] = $count;
		$subtotal += $count;
		$n_q++;
	}
	@fclose($fd);
	@fclose($fq);
	for($i=0; $i<$n_q; $i++) {
		$questions[$i]['per'] = number_format($questions[$i]['votes']*100/$subtotal,2, '.','')."%";
	}
	
	$smarty = new Smarty();
	$smarty->assign('title',$title);
	$smarty->assign('questions',$questions);
	return $smarty->fetch('total.html');
}
?>