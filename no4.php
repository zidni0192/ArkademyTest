<?php 
	function cetak_gambar($param1){
		if ($param1 % 2 ==0) {
			
		}else{
			for ($i=0; $i < $param1; $i++) { 
				for ($z=0; $z < $param1; $z++) { 
					if ($i==0 || $i==$param1-1 || $z == ceil($param1/2)-1) {
						print "&nbsp;x &nbsp;";
					}else{
						print " = &nbsp;";
					}
				}
				print"<br>";
			}			
		}
	}
	cetak_gambar(7);
?>