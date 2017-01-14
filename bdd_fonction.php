<?php
	####################################################
	##                                                ##
	##             VERIFICATION DE DONNEE             ##
	##                                                ##
	####################################################
	
	function verif_user($login, $pwd)
	{
		// But: Vérifie un utilisateur
		// prend le login et le password en clair en argument
		// renvoie True si la personne est bien identifiée, False sinon
		
		global $bdd;
		
		$req = $bdd->prepare('SELECT id, password FROM user
								WHERE login=:login');
		$req->execute(array('login' => $login));
		
		$req = $req->fetch();
		$hash = $req['password'];
		
		// Vérifions d'abord que le mot de passe correspond au hachage stocké
		if (password_verify($pwd, $hash))
		{
			/*
			// Le hachage correspond, on vérifie au cas où un nouvel algorithme de hachage
			// serait disponible ou si le coût a été changé
			
			if (password_needs_rehash($hash, PASSWORD_DEFAULT))
			{
				// On crée un nouveau hachage afin de mettre à jour l'ancien
				$newHash = password_hash($pwd, PASSWORD_DEFAULT);
			}
			*/
			
			// On connecte l'utilisateur
			return $req['id'];
		}
		else { return "0"; }
	}
	
	
	####################################################
	##                                                ##
	##             RECUPERATION DE DONNEE             ##
	##                                                ##
	####################################################
	
	//c'est coté parent, 
	function all_info_user($id)
	{
		// But: Récupere l'inventaire d'un user
		
		global $bdd;
		
		$req = $bdd->prepare('SELECT * FROM user
								WHERE id=:id');
		$req->execute(array('id' => $id));
		
		return $req->fetch();
	}
	
	function all_member_of_family($id_family)
	{
		// But: Récupere l'inventaire d'un user
		
		global $bdd;
		
		$req = $bdd->prepare('SELECT member FROM family
								WHERE id=:id');
		$req->execute(array('id' => $id_family));
		
		$member = $req->fetch()["member"];
		
		return explode(",", $member);
	}
	
	function all_news()
	{
		// But: Récupere l'inventaire d'un user
		
		global $bdd;
		
		$req = $bdd->prepare('SELECT * FROM news');
		$req->execute();
		
		return $req->fetchAll();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>