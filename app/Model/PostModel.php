<?php 

namespace Model;

use Model\Entity\Post;
use Model\Entity\User;
use Controller\LoginController;

class PostModel
{
	private $postRepository;

	public function __construct()
	{
		$this->postRepository = getEntityManager()->getRepository(Post::class);
		$this->userRepository = getEntityManager()->getRepository(User::class);
	}

	public function create(array $data)
	{
		$post = new Post();
		$post->setTitle($data['title']);
		$post->setContent($data['content']);
		$post->setCreatedAt(new \DateTime());
		$post->setPublished(boolval($data['published']));
		$user = $this->userRepository->findOneById(LoginController::userLogged()->getId());
		$post->setUser($user);
		$this->postRepository->save($post);
	}

	public function edit(array $data)
	{
		$post = $this->postRepository->findOneById($data['id']);
		$post->setTitle($data['title']);
		$post->setContent($data['content']);
		$post->setPublished(boolval($data['published']));
		$this->postRepository->save($post);
	}

	public function find(int $id)
	{
		return $this->postRepository->findOneById($id);
	}

	public function all()
	{
		return $this->postRepository->findAll();
	}

	public function delete(int $id)
	{
		$post = $this->postRepository->findOneById($id);
		$this->postRepository->remove($post);
	}
}