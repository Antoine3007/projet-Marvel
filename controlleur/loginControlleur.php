<?php

class LoginControlleur{

	 public function login(array $user): ?string{ // typage donné en sorti (Null ou string);

		if(!isset($user["email"]) || !isset($user["password"])) // verification de l'existence
		return "view/no-connect/login.php";

		if(!empty(trim($user["email"])) || !empty(trim($user["password"]))) // verification - remplie
		return "view/no-connect/login.php";

		if(!$this->validateEmail($email))
			return "view/no-connect/login.php";

		$email = htmlspecialchars(trim($user["email"])); // modif des balises html
		$password = strip_tags(trim($user["password"])); // supprime les balises html et php

		if($email == "toto@toto.toto" && $password = "toto"){ // connection
			$_SESSION["user"] = $user;
			return "view/no-connect/login.php";
		}else
		return "view/no-connect/login.php";

	}

	public function validateEmail(string $email): bool{
		return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;


	}
}