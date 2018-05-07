<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="TAG")
 * @ORM\Entity
 */
class Tag
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=10, nullable=false)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="twitter", type="string", length=30, nullable=true)
     */
    private $twitter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="keyName", type="integer", nullable=true)
     */
    private $keyname;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTwitter(): ?string
    {
        return $this->twitter;
    }

    public function setTwitter(?string $twitter): self
    {
        $this->twitter = $twitter;

        return $this;
    }

    public function getKeyname(): ?int
    {
        return $this->keyname;
    }

    public function setKeyname(?int $keyname): self
    {
        $this->keyname = $keyname;

        return $this;
    }


}
