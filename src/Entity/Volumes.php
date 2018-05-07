<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Volumes
 *
 * @ORM\Table(name="VOLUMES")
 * @ORM\Entity
 */
class Volumes
{
    /**
     * @var float
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=false)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=30, nullable=false)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="classement", type="integer", nullable=true)
     */
    private $classement;

    /**
     * @var float|null
     *
     * @ORM\Column(name="market_cap_usd", type="float", precision=10, scale=0, nullable=true)
     */
    private $marketCapUsd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="percent_change_1h", type="string", length=6, nullable=true)
     */
    private $percentChange1h;

    /**
     * @var string|null
     *
     * @ORM\Column(name="percent_change_24h", type="string", length=6, nullable=true)
     */
    private $percentChange24h;

    /**
     * @var string|null
     *
     * @ORM\Column(name="percent_change_7d", type="string", length=6, nullable=true)
     */
    private $percentChange7d;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_btc", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceBtc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="keyName", type="integer", nullable=true)
     */
    private $keyname;

    /**
     * @var float|null
     *
     * @ORM\Column(name="variation", type="float", precision=10, scale=0, nullable=true)
     */
    private $variation;

    /**
     * @var int
     *
     * @ORM\Column(name="idPrimary", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprimary;

    public function getVolume(): ?float
    {
        return $this->volume;
    }

    public function setVolume(float $volume): self
    {
        $this->volume = $volume;

        return $this;
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getClassement(): ?int
    {
        return $this->classement;
    }

    public function setClassement(?int $classement): self
    {
        $this->classement = $classement;

        return $this;
    }

    public function getMarketCapUsd(): ?float
    {
        return $this->marketCapUsd;
    }

    public function setMarketCapUsd(?float $marketCapUsd): self
    {
        $this->marketCapUsd = $marketCapUsd;

        return $this;
    }

    public function getPercentChange1h(): ?string
    {
        return $this->percentChange1h;
    }

    public function setPercentChange1h(?string $percentChange1h): self
    {
        $this->percentChange1h = $percentChange1h;

        return $this;
    }

    public function getPercentChange24h(): ?string
    {
        return $this->percentChange24h;
    }

    public function setPercentChange24h(?string $percentChange24h): self
    {
        $this->percentChange24h = $percentChange24h;

        return $this;
    }

    public function getPercentChange7d(): ?string
    {
        return $this->percentChange7d;
    }

    public function setPercentChange7d(?string $percentChange7d): self
    {
        $this->percentChange7d = $percentChange7d;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPriceBtc(): ?float
    {
        return $this->priceBtc;
    }

    public function setPriceBtc(?float $priceBtc): self
    {
        $this->priceBtc = $priceBtc;

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

    public function getVariation(): ?float
    {
        return $this->variation;
    }

    public function setVariation(?float $variation): self
    {
        $this->variation = $variation;

        return $this;
    }

    public function getIdprimary(): ?int
    {
        return $this->idprimary;
    }


}
