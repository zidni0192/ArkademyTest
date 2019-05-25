<?php 
	function betweenDays($param1,$param2){
		for ($i=strtotime($param1); $i<=strtotime($param2); $i+=86400) {  
		    echo date("Y-m-d", $i).'<br />'; 
		}		
	}
	betweenDays("2019-11-01","2019-12-01");
?>