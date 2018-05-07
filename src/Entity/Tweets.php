<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tweets
 *
 * @ORM\Table(name="TWEETS")
 * @ORM\Entity
 */
class Tweets
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="pos", type="float", precision=10, scale=0, nullable=false)
     */
    private $pos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbr", type="integer", nullable=true)
     */
    private $nbr;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getPos(): ?float
    {
        return $this->pos;
    }

    public function setPos(float $pos): self
    {
        $this->pos = $pos;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNbr(): ?int
    {
        return $this->nbr;
    }

    public function setNbr(?int $nbr): self
    {
        $this->nbr = $nbr;

        return $this;
    }


}
