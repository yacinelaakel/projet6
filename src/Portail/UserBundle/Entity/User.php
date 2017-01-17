<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 14/01/2017
 * Time: 22:29
 */

// src/PortailUserBundle/Entity/User.php

namespace Portail\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(type="string", length=100)
     *
     * @Assert\NotBlank(message="Merci de saisir votre nom", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=100,
     *     minMessage="Votre saisie est trop courte",
     *     maxMessage="votre saisie est trop longue",
     *     groups={"Registration", "Profile"}
     * )
     */
     protected $nom;

    /**
     *
     * @ORM\Column(type="string", length=100)
     *
     * @Assert\NotBlank(message="Merci de saisir votre prénom", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=100,
     *     minMessage="Votre saisie est trop courte",
     *     maxMessage="votre saisie est trop longue",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $prenom;





    public function __construct()
    {
        parent::__construct();
    }



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
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
