<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ratingcinema
 *
 * @ORM\Table(name="ratingcinema", indexes={@ORM\Index(name="ID_CIN", columns={"ID_CIN"})})
 * @ORM\Entity
 */
class Ratingcinema
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrc;

    /**
     * @var int
     *
     * @ORM\Column(name="ratingc", type="integer", nullable=false)
     */
    private $ratingc;

    /**
     * @var \Cinema
     *
     * @ORM\ManyToOne(targetEntity="Cinema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CIN", referencedColumnName="ID_CIN")
     * })
     */
    private $idCin;

    public function getIdrc(): ?int
    {
        return $this->idrc;
    }

    public function getRatingc(): ?int
    {
        return $this->ratingc;
    }

    public function setRatingc(int $ratingc): self
    {
        $this->ratingc = $ratingc;

        return $this;
    }

    public function getIdCin(): ?Cinema
    {
        return $this->idCin;
    }

    public function setIdCin(?Cinema $idCin): self
    {
        $this->idCin = $idCin;

        return $this;
    }


}
