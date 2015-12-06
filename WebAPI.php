<?php
	$status = json_decode(file_get_contents("https://mcapi.ca/query/hoyagai-world.net/status"), true);
	$list = json_decode(file_get_contents("https://mcapi.ca/query/hoyagai-world.net/list"), true);
?>