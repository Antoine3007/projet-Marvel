 <?php


require_once "controlleur.php";

	 class RegisterControlleur extends controlleur{

	 	public function register(array $user): ?string{ // typage donné en sorti (Null ou string);

		if(!isset($user["email"]) || !isset($user["password"]))|| !isset($user["username"])) // verification de l'existence
		return "view/no-connect/register.php";

		if(!empty(trim($user["email"])) || !empty(trim($user["password"]))|| !isset($user["username"]))) // verification - remplie
		return "view/no-connect/register.php";

		if(!$this->validateEmail($email))
			return "view/no-connect/register.php";

		$email = htmlspecialchars(trim($user["email"])); // modif des balises html
		$password = strip_tags(trim($user["password"])); // supprime les balises html et php
		$username = strip_tags(trim($user["username"]));

		if($email == "toto@toto.toto" && $password = "toto"){ // connection
			$_SESSION["user"] = $user;
			return "view/no-connect/index.php";
		}else
		return "view/no-connect/register.php";

	}



	 }