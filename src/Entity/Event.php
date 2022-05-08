<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="IDX_3BAE0AA76B3CA4B", columns={"id_user"})})
 * @ORM\Entity
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="event", type="string", length=255, nullable=false)
     */
    private $event;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut_event", type="string", length=255, nullable=false)
     */
    private $dateDebutEvent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_fin_event", type="string", length=255, nullable=true)
     */
    private $dateFinEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_event", type="string", length=255, nullable=false)
     */
    private $lieuEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite_event", type="integer", nullable=false)
     */
    private $capaciteEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="description_event", type="string", length=255, nullable=false)
     */
    private $descriptionEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=false)
     */
    private $logo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prix_event", type="integer", nullable=true)
     */
    private $prixEvent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function setEvent(string $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDateDebutEvent(): ?string
    {
        return $this->dateDebutEvent;
    }

    public function setDateDebutEvent(string $dateDebutEvent): self
    {
        $this->dateDebutEvent = $dateDebutEvent;

        return $this;
    }

    public function getDateFinEvent(): ?string
    {
        return $this->dateFinEvent;
    }

    public function setDateFinEvent(?string $dateFinEvent): self
    {
        $this->dateFinEvent = $dateFinEvent;

        return $this;
    }

    public function getLieuEvent(): ?string
    {
        return $this->lieuEvent;
    }

    public function setLieuEvent(string $lieuEvent): self
    {
        $this->lieuEvent = $lieuEvent;

        return $this;
    }

    public function getCapaciteEvent(): ?int
    {
        return $this->capaciteEvent;
    }

    public function setCapaciteEvent(int $capaciteEvent): self
    {
        $this->capaciteEvent = $capaciteEvent;

        return $this;
    }

    public function getDescriptionEvent(): ?string
    {
        return $this->descriptionEvent;
    }

    public function setDescriptionEvent(string $descriptionEvent): self
    {
        $this->descriptionEvent = $descriptionEvent;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getPrixEvent(): ?int
    {
        return $this->prixEvent;
    }

    public function setPrixEvent(?int $prixEvent): self
    {
        $this->prixEvent = $prixEvent;

        return $this;
    }


}
