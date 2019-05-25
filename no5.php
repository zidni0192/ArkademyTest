<?php 

	function ganti_kata($param1,$param2,$param3){
		$text = str_split($param1);
		for ($i=0; $i < count($text); $i++) { 
			if ($text[$i]==$param2) {
				$text[$i]=$param3;
			}
			echo $text[$i];
		}
	}
	ganti_kata("purwakarta","a","o");
?>