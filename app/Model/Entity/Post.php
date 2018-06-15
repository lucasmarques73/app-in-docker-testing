<?php 

namespace Model\Entity;

/**
 * @Entity
 * @Table(name="tb_posts")
 */
class Post
{
	/**
	 * @Id
	 * @Column(type="integer")
     * @GeneratedValue(strategy="SEQUENCE")
	 * @SequenceGenerator(sequenceName="tb_posts_id_seq", initialValue=1)
	 */
	private $id;

	/**
	 * @Column(type="string", length=200, unique=true)
	 */
	private $title;

	/**
	 * @Column(type="text", nullable=true)
	 */
	private $content;

	/**
	 * @Column(type="date", options={"default":"CURRENT_TIMESTAMP"})
	 */
	private $created_at;

	/**
	 * @Column(type="boolean", options={"default":false})
	 */
	private $published;

	/**
	 * @Column(type="integer")
	 */
	private $userId;

	/**
     * @ManyToOne(targetEntity="Model\Entity\User",cascade={"persist"},inversedBy="posts")
     */
	private $user;

	public function getId()
	{
	    return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	public function getTitle()
	{
	    return $this->title;
	}
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}
	public function getContent()
	{
	    return $this->content;
	}
	public function setContent($content)
	{
		$this->content = $content;
		return $this;
	}
	public function getCreated_at()
	{
	    return $this->created_at;
	}
	public function setCreated_at($created_at)
	{
		$this->created_at = $created_at;
		return $this;
	}
	public function getPublished()
	{
	    return $this->published;
	}
	public function setPublished($published)
	{
		$this->published = $published;
		return $this;
	}
	public function getUser_id()
	{
	    return $this->user_id;
	}
	public function setUser_id($user_id)
	{
		$this->user_id = $user_id;
		return $this;
	}
	public function getUser()
	{
	    return $this->user;
	}
	public function setUser($user)
	{
		$this->user = $user;
		return $this;
	}
}