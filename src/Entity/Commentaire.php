<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**

     *
     * @ORM\ManyToOne (targetEntity=User::class)
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $idUser;

    /**

     *
     * @ORM\ManyToOne (targetEntity=Publication::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="id_pub", referencedColumnName="id")
     */


    private $idPub;

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return mixed
     */
    public function getIdPub()
    {
        return $this->idPub;
    }

    /**
     * @param mixed $idPub
     */
    public function setIdPub($idPub): void
    {
        $this->idPub = $idPub;
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
