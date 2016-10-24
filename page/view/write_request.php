<?php
	include_once("db.php");
	$sql = "insert into noticeboard set title='{$_POST['text']}', content ='{$_POST['area']}', writer ='{$_POST['wt_pp']}'";
	$db->query($sql);
	al("작성이 완료되었습니다.","/view/noticeboard");
?>