<?php 

namespace Model\Entity;

/**
 * @Entity
 * @Table(name="tb_users")
 */
class User
{
	/**
	 * @Id
	 * @Column(type="integer")
     * @GeneratedValue(strategy="SEQUENCE")
	 * @SequenceGenerator(sequenceName="tb_users_id_seq", initialValue=1)
	 */
	private $id;

	/**
	 * @Column(type="string", length=150)
	 */
	private $name;

	/**
	 * @Column(type="string", length=100, unique=true)
	 */
	private $email;

	/**
	 * @Column(type="string", length=100)
	 */
	private $pass;

	/**
     * @OneToMany(targetEntity="Model\Entity\Post",cascade={"persist"}, mappedBy="user")
     */
	private $posts;

	public function __construct()
    {
        $this->posts = new ArrayCollection();
    }

	public function getId()
	{
	    return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	public function getName()
	{
	    return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getEmail()
	{
	    return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}
	public function getPass()
	{
	    return $this->pass;
	}
	public function setPass($pass)
	{	
		$pass = password_hash($pass,PASSWORD_BCRYPT);
		$this->pass = $pass;
		return $this;
	}
	public function getPosts()
	{
	    return $this->posts;
	}
	public function setPosts($posts)
	{
		$this->posts = $posts;
		return $this;
	}
}