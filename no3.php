<?php 
	function count_vowels($param)
	{
	    preg_match_all('/[aeiou]/', $param, $match);
	    return count($match[0]);
	}
	echo count_vowels("sampleinput");
?>