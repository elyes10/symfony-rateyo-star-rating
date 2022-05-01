<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="planning", indexes={@ORM\Index(name="fk_idcin", columns={"ID_CIN"})})
 * @ORM\Entity
 */
class Planning
{
    /**
     * @var int
     *
     * @ORM\Column(name="idP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idp;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="nomF", type="string", length=30, nullable=false)
     */
    private $nomf;

    /**
     * @var \Cinema
     *
     * @ORM\ManyToOne(targetEntity="Cinema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CIN", referencedColumnName="ID_CIN")
     * })
     */
    private $idCin;

    public function getIdp(): ?int
    {
        return $this->idp;
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

    public function getNomf(): ?string
    {
        return $this->nomf;
    }

    public function setNomf(string $nomf): self
    {
        $this->nomf = $nomf;

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
