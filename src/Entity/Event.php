<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
/**
 * @ORM\Entity()

 */
class Event
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**

     *
         * @ORM\ManyToOne (targetEntity=User::class)
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $idUser;


    /**
     * @var string
     *
     * @ORM\Column(name="event", type="string", length=255)
     * @Assert\NotBlank (message ="le nom de l'event est obligatoire")
     */
    private $nomEvent;

    /**
     * @var string

     * @ORM\Column(name="Type", type="string", length=255, nullable=false)
     */
    private $typeEvent;





    /**
     * @var \DateTime

     * @ORM\Column(name="date_debut_event", type="datetime", nullable=false)
     */
    private $dateDebutEvent;


    /**
     * @var \DateTime

     * @ORM\Column(name="date_fin_event", type="datetime", nullable=true)
     */
    private $dateFinEvent;




    /**
     * @var string

     * @ORM\Column(name="lieu_event", type="string", length=255, nullable=false)
      * @Assert\NotBlank (message ="le lieu de l'event est obligatoire")
     */
    private $lieuEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite_event", type="integer")
     * @Assert\NotBlank (message ="le nombre de place de l'event est obligatoire")
     */
    private $capaciteEvent;

    /**
     * @var string
     * @ORM\Column(name="description_event", type="string", length=255, nullable=false)
     * @Assert\NotBlank (message ="la description de l'event est obligatoire")
     */
    private $descriptionEvent;
    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Il faut importer une image")
     */
    private $logo;










    /**
     * @var integer


     * @ORM\Column(name="prix_event", type="integer", nullable=true)
     * @Assert\NotBlank (message ="le prix de l'event est obligatoire")
     */
    private $prixEvent;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }



    /**
     * @return string
     */
    public function getNomEvent(): string
    {
        return $this->nomEvent;
    }

    /**
     * @param string $nomEvent
     */
    public function setNomEvent(string $nomEvent): void
    {
        $this->nomEvent = $nomEvent;
    }

    /**
     * @return string
     */
    public function getTypeEvent(): string
    {
        return $this->typeEvent;
    }

    /**
     * @param string $typeEvent
     */
    public function setTypeEvent(string $typeEvent): void
    {
        $this->typeEvent = $typeEvent;
    }

    /**
     * @return \DateTime
     */
    public function getDateDebutEvent(): \DateTime
    {
        return $this->dateDebutEvent;
    }

    /**
     * @param \DateTime $dateDebutEvent
     */
    public function setDateDebutEvent(\DateTime $dateDebutEvent): void
    {
        $this->dateDebutEvent = $dateDebutEvent;
    }

    /**
     * @return \DateTime
     */
    public function getDateFinEvent(): \DateTime
    {
        return $this->dateFinEvent;
    }

    /**
     * @param \DateTime $dateFinEvent
     */
    public function setDateFinEvent(\DateTime $dateFinEvent): void
    {
        $this->dateFinEvent = $dateFinEvent;
    }

    /**
     * @return string
     */
    public function getLieuEvent(): string
    {
        return $this->lieuEvent;
    }

    /**
     * @param string $lieuEvent
     */
    public function setLieuEvent(string $lieuEvent): void
    {
        $this->lieuEvent = $lieuEvent;
    }

    /**
     * @return int
     */
    public function getCapaciteEvent(): int
    {
        return $this->capaciteEvent;
    }

    /**
     * @param int $capaciteEvent
     */
    public function setCapaciteEvent(int $capaciteEvent): void
    {
        $this->capaciteEvent = $capaciteEvent;
    }

    /**
     * @return string
     */
    public function getDescriptionEvent(): string
    {
        return $this->descriptionEvent;
    }

    /**
     * @param string $descriptionEvent
     */
    public function setDescriptionEvent(string $descriptionEvent): void
    {
        $this->descriptionEvent = $descriptionEvent;
    }

    /**
     * @return string
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return int
     */
    public function getPrixEvent(): int
    {
        return $this->prixEvent;
    }

    /**
     * @param int $prixEvent
     */
    public function setPrixEvent(int $prixEvent): void
    {
        $this->prixEvent = $prixEvent;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser): void
    {
        $this->idUser = $idUser;
    }







}