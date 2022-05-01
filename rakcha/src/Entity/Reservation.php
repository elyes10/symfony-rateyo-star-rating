<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="ID_C", columns={"ID_C"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_RES", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRes;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_F", type="integer", nullable=false)
     */
    private $idF;

    /**
     * @var string
     *
     * @ORM\Column(name="Chaise", type="string", length=20, nullable=false)
     */
    private $chaise;

    /**
     * @var string
     *
     * @ORM\Column(name="Date", type="string", length=20, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_Client", type="string", length=50, nullable=false)
     */
    private $typeClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=50, nullable=false)
     */
    private $mail;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_C", referencedColumnName="ID_C")
     * })
     */
    private $idC;

    public function getIdRes(): ?int
    {
        return $this->idRes;
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

    public function getChaise(): ?string
    {
        return $this->chaise;
    }

    public function setChaise(string $chaise): self
    {
        $this->chaise = $chaise;

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

    public function getTypeClient(): ?string
    {
        return $this->typeClient;
    }

    public function setTypeClient(string $typeClient): self
    {
        $this->typeClient = $typeClient;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

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
