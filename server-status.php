<?php
	include './include/WebAPI.php';
	
	//サーバーがオンラインの時
	if($status['status'] == true){
		echo 'オンラインユーザー：'.$list['Players']['online'].'/'.$list['Players']['max'];
	}
	//サーバーがオフラインの時
	else{
		echo 'オフライン、又はアクセスできません';
	}
?>