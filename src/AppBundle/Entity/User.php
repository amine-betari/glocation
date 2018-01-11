<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="gl_user")
 */
class User extends BaseUser
{	
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO"))
 	 * @ORM\Column(type="integer")
	 */
	protected $id;

	/**
	 * @ORM\Column(name="nom", type="string", length=255)
	 * @Assert\NotBlank(message="Please enter your name.")
	 */
	protected $nom;
	
	/**
	 * @ORM\Column(name="prenom", type="string", length=255)
	 * @Assert\NotBlank(message="Please enter your name.")
	 */
	protected $prenom;

	public function __construct()
	{
		parent::__construct();
	// your own logic
	} 	

	public function getId()
	{
		return $this->id;
	}

/**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
}
