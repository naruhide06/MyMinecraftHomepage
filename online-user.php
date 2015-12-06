<?php
	include './include/WebAPI.php';
	
	//サーバーがオンラインの時
	if($status['status'] == true){
		//誰かがオンラインなら
		if(0 < $list['Players']['online']){
			$keys = $list['Players']['list'];
			
			//プレイヤーの数だけアイコンを表示する
			foreach($keys as $keys){
				$icon = 'https://minotar.net/avatar/'.$keys.'/45';
				echo '<img src="'.$icon.'"  title='.$keys.'>';
			}
		}
		//誰もいなければ
		else{
			echo '誰も遊んでいません';
		}
	}
	//サーバーがオフラインの時
	else{
		echo 'しばらくお待ち下さい';
	}
?>