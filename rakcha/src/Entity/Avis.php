<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis")
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_A", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idA;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_F", type="integer", nullable=false)
     */
    private $idF;

    /**
     * @var string
     *
     * @ORM\Column(name="Valeur", type="string", length=20, nullable=false)
     */
    private $valeur;

    /**
     * @var string
     *
     * @ORM\Column(name="Date", type="string", length=20, nullable=false)
     */
    private $date;

    public function getIdA(): ?int
    {
        return $this->idA;
    }

    public function getIdF(): ?int
    {
        return $this->idF;
    }

    public function setIdF(int $idF): self
    {
        $this->idF = $idF;

        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(string $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }


}
