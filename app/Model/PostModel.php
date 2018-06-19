<?php 

namespace Model;

use Model\Entity\Post;
use Controller\LoginController;

class PostModel
{
	private $postRepository;

	public function __construct()
	{
		$this->postRepository = getEntityManager()->getRepository(Post::class);
	}

	public function create(array $data)
	{
		$post = new Post();
		$post->setTitle($data['title']);
		$post->setContent($data['content']);
		$post->setCreatedAt(date('Y-m-d'));
		$post->setPublished($data['published']);
		$post->setUser(LoginController::userLogged());
		$this->postRepository->save($post);
	}

	public function edit(array $data)
	{
		$post = $this->postRepository->findOneById($data['id']);
		$post->setTitle($data['title']);
		$post->setContent($data['content']);
		$post->setPublished($data['published']);
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