<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ratingoffre
 *
 * @ORM\Table(name="ratingoffre", indexes={@ORM\Index(name="for", columns={"ID_O"})})
 * @ORM\Entity
 */
class Ratingoffre
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_R", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idR;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_O", referencedColumnName="ID_O")
     * })
     */
    private $idO;

    public function getIdR(): ?int
    {
        return $this->idR;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getIdO(): ?Offre
    {
        return $this->idO;
    }

    public function setIdO(?Offre $idO): self
    {
        $this->idO = $idO;

        return $this;
    }


}
