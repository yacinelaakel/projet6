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
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
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
    protected $name;

    /**
     * @var string
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
    protected $surname;

    /**
     * @var \DateTime
     * @ORM\Column(name="naissance", type="date")
     *
     * @Assert\NotBlank(message="Merci de saisir votre nom", groups={"Registration", "Profile"})
     * @Assert\Datetime()
     * @Assert\LessThan(
     *     "today",
     *     message = "merci de vérifier la date de naissance"
     * )
     */
    protected $naissance;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Merci de saisir votre ville", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=2,
     *     max=255,
     *     minMessage="Votre saisie est trop courte",
     *     maxMessage="votre saisie est trop longue",
     *     groups={"Registration", "Profile"}
     * )
     * @Assert\NotBlank()
     * @ORM\Column(name="ville", type="string", length=255)
     *
     */
    protected $ville;




    public function __construct()
    {
        $this->naissance = new \Date();

    }

    /**
     * Get id
     *
     * @return int
     */
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
    public function setNom($name)
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
     * Set surname
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }


    /**
     * Set naissance
     *
     * @param \DateTime $naissance
     *
     * @return User
     */
    public function setnaissance($naissance)
    {
        $this->naissance = $naissance;

        return $this;
    }

    /**
     * Get naissance
     *
     * @return \DateTime
     */
    public function getnaissance()
    {
        return $this->naissance;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }






}