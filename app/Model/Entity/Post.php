<?php

namespace Model\Entity;

/**
 * Post
 *
 * @Table(name="posts", uniqueConstraints={@UniqueConstraint(name="idx_posts_titles", columns={"title"})}, indexes={@Index(name="IDX_885DBAFAA76ED395", columns={"user_id"})})
 * @Entity(repositoryClass="Model\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="posts_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="title", type="string", length=200, nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @Column(name="created_at", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var bool
     *
     * @Column(name="published", type="boolean", nullable=false)
     */
    private $published = false;

    /**
     * @var \Model\Entity\User
     *
     * @ManyToOne(targetEntity="Model\Entity\User",cascade={"persist", "merge"}, inversedBy="posts")
     * @JoinColumns({
     *   @JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle(string $title): Post
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set content.
     *
     * @param string|null $content
     *
     * @return Post
     */
    public function setContent(string $content = null): Post
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Post
     */
    public function setCreatedAt(\DateTime $createdAt): Post
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * Set published.
     *
     * @param bool $published
     *
     * @return Post
     */
    public function setPublished(bool $published = false): Post
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published.
     *
     * @return bool
     */
    public function getPublished(): bool
    {
        return $this->published;
    }

    /**
     * Set user.
     *
     * @param \Model\Entity\User|null $user
     *
     * @return Post
     */
    public function setUser(\Model\Entity\User $user = null): Post
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \Model\Entity\User|null
     */
    public function getUser(): ?\Model\Entity\User
    {
        return $this->user;
    }
}
