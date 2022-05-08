<?php

namespace App\Entity;

use App\Repository\EleveRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Eleve
 *
 * @ORM\Table(name="eleve")
 * @ORM\Entity(repositoryClass="App\Repository\EleveRepository")
 */
class Eleve
{
    /**
     * @var int
     *
     * @ORM\Column(name="ide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ide;

    /**
     * @var string
     * @Assert\NotBlank(message=" nom doit etre non vide")
     * @Assert\Length(
     *      min = 3,
     *      minMessage=" Entrer un nom au mini de 3 caracteres"
     *
     *     )
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank(message=" prenom doit etre non vide")
     * @Assert\Length(
     *      min = 3,
     *      minMessage=" Entrer un prenom au mini de 3 caracteres"
     *
     *     )
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var int

     * @ORM\Column(name="idp", type="integer", nullable=false)
     */
    private $idp;

    /**
     * @var int
     *
     * @ORM\Column(name="idj", type="integer", nullable=false)
     */
    private $idj;


    public function getIde(): ?int
    {
        return $this->ide;
    }

    public function setIde(int $ide): self
    {
        $this->ide = $ide;

        return $this;
    }





    public function getNom(): ?String
    {
        return $this->nom;
    }

    public function setNom(String $nom): self
    {
        $this->nom = $nom;

        return $this;
    }




    public function getPrenom(): ?String
    {
        return $this->prenom;
    }

    public function setPrenom(String $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }






    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }





    public function getIdp(): ?int
    {
        return $this->idp;
    }

    public function setIdp(int $idp): self
    {
        $this->idp = $idp;

        return $this;
    }




    public function getIdj(): ?int
    {
        return $this->idj;
    }

    public function setIdj(int $idj): self
    {
        $this->idj= $idj;

        return $this;
    }




}
