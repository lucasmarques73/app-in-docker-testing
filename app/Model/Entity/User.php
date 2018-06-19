<?php

namespace Model\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Users
 *
 * @Table(name="users", uniqueConstraints={@UniqueConstraint(name="idx_users_email", columns={"email"})})
 * @Entity(repositoryClass="Model\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="users_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="pass", type="string", length=100, nullable=false)
     */
    private $pass;

    /**
     *  @var \Model\Entity\Post[]
     *
     *  @OneToMany(targetEntity="Model\Entity\Post",cascade={"persist", "remove", "merge"}, mappedBy="user")
     */

    private $posts;

    /**
     * User constructor
     */
    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pass.
     *
     * @param string $pass
     *
     * @return Users
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass.
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set post.
     *
     * @param \Model\Entity\Post $post
     *
     * @return Users
     */
    public function addPost(\Model\Entity\Post $post)
    {
        $this->posts->add($post);
        $post->setUser($this);
        return $this;
    }

    /**
     * Get posts.
     *
     * @return \Model\Entity\Post[]|null
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
