<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="ID_C", columns={"ID_C"})})
 * @ORM\Entity
 */
class Reclamation
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
     * @var string
     *
     * @ORM\Column(name="Message", type="string", length=10000, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="Sujet", type="string", length=20, nullable=false)
     */
    private $sujet;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_C", referencedColumnName="ID_C")
     * })
     */
    private $idC;

    public function getIdR(): ?int
    {
        return $this->idR;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getIdC(): ?Utilisateur
    {
        return $this->idC;
    }

    public function setIdC(?Utilisateur $idC): self
    {
        $this->idC = $idC;

        return $this;
    }


}
