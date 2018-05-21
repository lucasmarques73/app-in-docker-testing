<?php 

namespace Model;

use Model\Mapper\PostMapper;
use Model\Entity\Post;

class PostModel
{
	private $postMapper;

	public function __construct()
	{
		$this->postMapper = new PostMapper();
	}

	public function create(array $Post)
	{
		$this->postMapper->insert($Post);
	}

	public function edit(array $Post)
	{
		$id = 'id='.$Post['id'];
		$this->postMapper->update($Post,$id);
	}

	public function findOne(int $id)
	{
		return $this->postMapper->find('*','id='.$id);
	}

	public function all()
	{
		return $this->postMapper->findAll('*',null,null,'id');
	}

	public function delete(int $id)
	{
		$this->postMapper->delete('id='.$id);
	}
}