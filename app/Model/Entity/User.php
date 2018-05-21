<?php 

namespace Model\Entity;

class User
{
	private $id;
	private $name;
	private $email;
	private $pass;

	public function getId()
	{
	    return $this->id;
	}
	public function setId($id)
	{
	    $this->id = $id;
	}
	public function getName()
	{
	    return $this->name;
	}
	public function setName($name)
	{
	    $this->name = $name;
	}
	public function getEmail()
	{
	    return $this->email;
	}
	public function setEmail($email)
	{
	    $this->email = $email;
	}
	public function getPass()
	{
	    return $this->pass;
	}
	public function setPass($pass)
	{	
		$pass = password_hash($pass,PASSWORD_BCRYPT);
    	$this->pass = $pass;				
	}
}