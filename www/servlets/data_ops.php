<?php
	include_once("common.php");
	//DEBUG USE
/*
	$_POST["uname"] = "xfu";
	$_POST["pwd"] = "abc";
*/
	//------ COMMENT OUT LATER


	$op= $_POST["op"];
	if($op=="getPosts"){
		$arr = getPosts();
		$str = json_encode($arr);
		print($str);
	}else{
		echo "nok";
	}
	
?>
