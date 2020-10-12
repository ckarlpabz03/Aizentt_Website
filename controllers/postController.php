<?php
include('../models/postModel.php');
$post = new Post;

function goback(){
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
}

if(isset($_POST['interest'])){
	$input = [
		'fullname' => $_POST['fullname'],
		'email_address' => $_POST['email_address'],
		'subject' => $_POST['subject'],
        'message' => $_POST['message']
	];

	$post->postInterest($input);
	goback();
}

?>