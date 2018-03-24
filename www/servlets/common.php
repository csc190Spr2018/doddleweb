<?php
	include_once("db.php");

	//common utility
	function checksum($txt){
		return md5($txt);
	}
	function insertPost($author, $post){
		$author = secure($author);
		$post= secure($post);

		$q = "INSERT INTO tbl_posts(author, post) VALUES ('$author', '$post')";
		executeSQL($q);
	}	

	function getPosts(){
		$q = "SELECT * FROM tbl_posts order by ts desc";
		$arr = executeSQL($q);
		return $ar;
	}

if(1==2){
	insertPost("number2", "Hi, I'm here");
	$arr = getPosts();
	print_r($arr);
}
?>
