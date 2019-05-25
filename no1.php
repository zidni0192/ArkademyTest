<?php 
	error_reporting(0);
	function biodata(){
		$name = "Zidni Hidayat Edby";
		$address = "Gembong Gg Beringin IV No 64 Kedungwuni Pekalongan";
		$hobbies = ['Playing','Sleeping','Playing','Sleeping'];
		$is_married = false;
		$school->highschool = "SMK SYafi'i Akrom Pekalongan";
		$school->university = "-";
		$skill = [["name"=>"games","score"=>"100"],["name"=>"Design","score"=>"30"],["name"=>"Logic","score"=>"100"]];
		$biodata = ["name"=>$name,"address"=>$address,"hobbies"=>$hobbies,"is_married"=>$is_married,"school"=>$school,"skill"=>$skill];
		print(json_encode($biodata));
	}
	biodata();
?>