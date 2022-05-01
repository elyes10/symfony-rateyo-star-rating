<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chaises
 *
 * @ORM\Table(name="chaises", indexes={@ORM\Index(name="id_cinema", columns={"id_cinema"}), @ORM\Index(name="id_film", columns={"id_film"})})
 * @ORM\Entity
 */
class Chaises
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count;

    /**
     * @var \Film
     *
     * @ORM\ManyToOne(targetEntity="Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_film", referencedColumnName="ID_F")
     * })
     */
    private $idFilm;

    /**
     * @var \Cinema
     *
     * @ORM\ManyToOne(targetEntity="Cinema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cinema", referencedColumnName="ID_CIN")
     * })
     */
    private $idCinema;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getIdFilm(): ?Film
    {
        return $this->idFilm;
    }

    public function setIdFilm(?Film $idFilm): self
    {
        $this->idFilm = $idFilm;

        return $this;
    }

    public function getIdCinema(): ?Cinema
    {
        return $this->idCinema;
    }

    public function setIdCinema(?Cinema $idCinema): self
    {
        $this->idCinema = $idCinema;

        return $this;
    }


}
