<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use mysqli;

/**
 * Reclamation
 * @ORM\Entity(repositoryClass="App\Repository\ReclamationRepository")
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=false)
     */
    private $idParent;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=60, nullable=false)
     * @Assert\NotBlank
     */
    private $text;

    public function getIdReclamation(): ?int
    {
        return $this->idReclamation;
    }

    public function getIdParent(): ?int
    {
        return $this->idParent;
    }

    public function setIdParent(int $idParent): self
    {
        $this->idParent = $idParent;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    
}