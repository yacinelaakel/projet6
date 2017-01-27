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

    /**
     *
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
     */
    protected $ville;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="datenaissance", type="date")
     * @Assert\Date()
     * @Assert\LessThan(
     *     "today",
     *     message = "merci de vérifier la date de naissance"
     * )
     */
    protected $datenaissance;

    /**
     *
     * @ORM\Column(type="string", length=100)
     *
     * @Assert\NotBlank(message="Merci de saisir votre profession", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=4,
     *     max=100,
     *     minMessage="Votre saisie est trop courte",
     *     maxMessage="votre saisie est trop longue",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $profession;

    /**
     * @var bool
     * @Assert\Type(type="bool")
     * @ORM\Column(name="conditiongenerale", type="boolean")
     */
    protected $conditiongenerale;



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

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return User
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return User
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set conditiongenerale
     *
     * @param boolean $conditiongenerale
     *
     * @return User
     */
    public function setConditiongenerale($conditiongenerale)
    {
        $this->conditiongenerale = $conditiongenerale;

        return $this;
    }

    /**
     * Get conditiongenerale
     *
     * @return boolean
     */
    public function getConditiongenerale()
    {
        return $this->conditiongenerale;
    }
}
