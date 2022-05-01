<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Promotion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPromotion;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_O", type="integer", nullable=false)
     */
    private $idO;

    /**
     * @var float
     *
     * @ORM\Column(name="Valeur", type="float", precision=10, scale=0, nullable=false)
     */
    private $valeur;

    public function getIdPromotion(): ?int
    {
        return $this->idPromotion;
    }

    public function getIdO(): ?int
    {
        return $this->idO;
    }

    public function setIdO(int $idO): self
    {
        $this->idO = $idO;

        return $this;
    }

    public function getValeur(): ?float
    {
        return $this->valeur;
    }

    public function setValeur(float $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }


}
