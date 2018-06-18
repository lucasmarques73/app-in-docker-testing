<?php 

namespace Model;

use Model\Entity\User;

class UserModel
{
	private $userRepository;

	public function __construct()
	{
		$this->userRepository =  getEntityManager()->getRepository(User::class);
	}

	public function create(array $data)
	{
		$user = new User();
		$user->setName($data['name']);
		$user->setEmail($data['email']);
		$user->setPass($data['pass']);
		$this->userRepository->save($user);
	}

	public function edit(array $data)
	{
		$user = $this->userRepository->findOneById($data['id']);
		$user->setName($data['name']);
		$user->setEmail($data['email']);
		$user->setPass($data['pass']);
		$this->userRepository->save($user);
	}

	public function find(int $id)
	{
		return $this->userRepository->findOneById($id);
	}

	public function all()
	{
		return $this->userRepository->findAll();
	}

	public function delete(int $id)
	{
		$user = $this->userRepository->findOneById($id);
		$this->userRepository->remove($user);
	}

	public function login(array $data)
	{
		$user = $this->userRepository->findOneByEmail($data['email']);
		
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