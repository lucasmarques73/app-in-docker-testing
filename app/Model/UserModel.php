<?php 

namespace Model;

use Model\Mapper\UserMapper;

class UserModel
{
	private $userMapper;

	public function __construct()
	{
		$this->userMapper = new UserMapper();
	}

	public function create(array $user)
	{
		$this->userMapper->insert($user);
	}

	public function edit(array $user)
	{
		$id = 'id='.$user['id'];
		$this->userMapper->update($user,$id);
	}

	public function findOne(int $id)
	{
		return $this->userMapper->find('*','id='.$id);
	}

	public function all()
	{
		return $this->userMapper->findAll('*',null,null,'id');
	}

	public function delete(int $id)
	{
		$this->userMapper->delete('id='.$id);
	}

	public function login(array $data)
	{
		$where = "email='{$data['email']}'";
		$user = $this->userMapper->find('*',$where);
		
		if(!$user){
			return false;
		}
		if (password_verify($data['pass'],$user->getPass())) {
			return $user;
		} else {
			return false;
		}
	}
}