<?php
	try
	{
		$bdd=new PDO('mysql:host=localhost; dbname=famiday', "root", "");
	}
	catch(Exception $e)
	{
		die("Erreur:".$e->getMessage());
	}
?>