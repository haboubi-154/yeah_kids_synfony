<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;



use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * 
 * 
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
 
class User
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
     * @var string
     *@Assert\NotBlank
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     * @Assert\NotBlank
     * 
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     */

    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     * @Assert\NotBlank
     *  @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     */
    private $nom;

    /**
     * @var string
     * 
     * @ORM\Column(name="email", type="string", length=30, nullable=false)
     * @Assert\NotBlank
     * @Assert\Regex(pattern="/@/" ,match=true,message="require @")
     * 
     * 
     * 
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20, nullable=false)
     * @Assert\NotBlank
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=false)
     * @Assert\NotBlank
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your password  must be at least {{ limit }} characters long",
     *      maxMessage = "Your password  cannot be longer than {{ limit }} characters"
     * )
     * @Assert\Regex(pattern="/[a-z]/",
     * message=true, 
     * message="Your password require miniscule caracter"
     *   )
     * @Assert\Regex(pattern="/[A-Z]/",
     * message=true, 
     * message="Your password require maj caracter"
     *   )
     * @Assert\Regex(pattern="/\d/",
     * message=true, 
     * message="Your password require numbers"
     *   )
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=50)
     *
     * 
     * 
     * 
     * 
     * 
     * 
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=30, nullable=false)
     
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="responde", type="string", length=30, nullable=false)
     * @Assert\NotBlank
     */
    private $responde;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=20, nullable=false)
     * @Assert\NotBlank
     * )
     */
     
    private $role;


    /**
     * @var int
     *
     * @ORM\Column(name="block", type="integer", nullable=true)
     */
    private $block;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
    public function getblock(): ?string
    {
        return $this->block;
    }

    public function setblock(int $block): self
    {
        $this->block = $block;

        return $this;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getResponde(): ?string
    {
        return $this->responde;
    }
    public function setId(int $id): ?self
    {
         $this->id=$id;
         return $this;
    }


    public function setResponde(string $responde): self
    {
        $this->responde = $responde;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }
    
    
    
    public function hash_password(int $length) : self
    {
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/\\][{}\'";:?.>,<!@#$%^&*()-_=+|';
     $randStringLen = 30;

     $randString = "";
     for ($i = 0; $i < $randStringLen; $i++) {
         $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
     }

   
        $hashed=password_hash($this->password, PASSWORD_DEFAULT, array( "cost" => 10,"salt" => $randString));
        
        
        
        $this->password=$hashed;
        $this->salt=$randString;


        return $this;
    }



}
