<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programme
 *
 * @ORM\Table(name="programme", indexes={@ORM\Index(name="ID_E_FK", columns={"ID_E"})})
 * @ORM\Entity
 */
class Programme
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Prog", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProg;

    /**
     * @var string
     *
     * @ORM\Column(name="Date", type="string", length=32, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Description_detaillée", type="string", length=750, nullable=false)
     */
    private $descriptionDetaill�e;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_E", referencedColumnName="ID_E")
     * })
     */
    private $idE;

    public function getIdProg(): ?int
    {
        return $this->idProg;
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

    public function getDescriptionDetaill�e(): ?string
    {
        return $this->descriptionDetaill�e;
    }

    public function setDescriptionDetaill�e(string $descriptionDetaill�e): self
    {
        $this->descriptionDetaill�e = $descriptionDetaill�e;

        return $this;
    }

    public function getIdE(): ?Evenement
    {
        return $this->idE;
    }

    public function setIdE(?Evenement $idE): self
    {
        $this->idE = $idE;

        return $this;
    }


}
