<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCo;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length=5000, nullable=false)
     */
    private $contenu;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_O", type="integer", nullable=false)
     */
    private $idO;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_Publication", type="string", length=30, nullable=false)
     */
    private $datePublication;

    public function getIdCo(): ?int
    {
        return $this->idCo;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
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

    public function getDatePublication(): ?string
    {
        return $this->datePublication;
    }

    public function setDatePublication(string $datePublication): self
    {
        $this->datePublication = $datePublication;

        return $this;
    }


}
