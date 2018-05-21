<?php 

namespace Model\Entity;

class Post
{
	private $id;
	private $title;
	private $content;
	private $created_at;
	private $published;
	private $userId;

	public function getId()
	{
	    return $this->id;
	}
	public function setId($id)
	{
	    $this->id = $id;
	}
	public function getTitle()
	{
	    return $this->title;
	}
	public function setTitle($title)
	{
	    $this->title = $title;
	}
	public function getContent()
	{
	    return $this->content;
	}
	public function setContent($content)
	{
	    $this->content = $content;
	}
	public function getCreated_at()
	{
	    return $this->created_at;
	}
	public function setCreated_at($created_at)
	{
	    $this->created_at = $created_at;
	}
	public function getPublished()
	{
	    return $this->published;
	}
	public function setPublished($published)
	{
	    $this->published = $published;
	}
	public function getUser_id()
	{
	    return $this->user_id;
	}
	public function setUser_id($user_id)
	{
	    $this->user_id = $user_id;
	}
}