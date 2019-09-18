<?php
	#mazitov979@gmail.com
    #5d96f5f42a39f27b06f9e268cb83f02b18b0cb17
	include("auth.php");
	$subdomain = 'mazitov979';
	$login = 'mazitov979@gmail.com';
	$hash_key = '5d96f5f42a39f27b06f9e268cb83f02b18b0cb17';

	$auth = new AmoAuth();
	$auth->authorize($subdomain, $login, $hash_key);
?>