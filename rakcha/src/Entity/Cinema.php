<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cinema
 *
 * @ORM\Table(name="cinema")
 * @ORM\Entity
 */
class Cinema
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CIN", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCin;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=20, nullable=false)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="Nbre_P", type="integer", nullable=false)
     */
    private $nbreP;

    public function getIdCin(): ?int
    {
        return $this->idCin;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNbreP(): ?int
    {
        return $this->nbreP;
    }

    public function setNbreP(int $nbreP): self
    {
        $this->nbreP = $nbreP;

        return $this;
    }

    public function __toString(): string
    {
        return $this->idCin;
    }
}
