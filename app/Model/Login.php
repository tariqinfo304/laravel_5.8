<?php

namespace App\Model;

class Login{
	

	private $login;
	private $password;

	function __construct(string $login="",string $password="")
	{
		$this->set_login($login);
		$this->set_password($password);
	}

	function set_login($login)
	{
		$this->login = $login;
	}
	function set_password($pass)
	{
		$this->password = $pass;
	}

	function __tostring()
	{
		echo "Username is : " . $this->login;
		echo "<br/> Password is : " . $this->password;
	}
}