<?php

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
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Portail\WebBundle\Entity\Observations", mappedBy="utilisateur")
     * @Assert\Valid()
     */
    private $observations;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Saisissez votre prénom.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=15,
     *     minMessage="Le prénom doit faire entre 3 et 15 lettres.",
     *     maxMessage="Le prénom doit faire entre 3 et 15 lettres.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Saisissez votre nom..", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=15,
     *     minMessage="Le nom doit faire entre 3 et 15 lettres.",
     *     maxMessage="Le nom doit faire entre 3 et 15 lettres.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $surname;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Saisissez votre Ville.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=2,
     *     max=50,
     *     minMessage="La ville doit faire entre 2 et 50 lettres.",
     *     maxMessage="La ville doit faire entre 2 et 50 lettres.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $city;

    /**
     * @ORM\Column(type="date",)
     */
    protected $dateboth;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Saisissez votre Profession.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=50,
     *     minMessage="minimum 3 caractères",
     *     maxMessage="maximum 50 caractères",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $job;

    /**
     * @ORM\Column(type="boolean")
     * @Assert\IsTrue(message = "Vous devez accepter les conditions d'utilisation")
     */
    protected $conditionUtilisation;


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
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set dateboth
     *
     * @param \DateTime $dateboth
     *
     * @return User
     */
    public function setDateboth($dateboth)
    {
        $this->dateboth = $dateboth;

        return $this;
    }

    /**
     * Get dateboth
     *
     * @return \DateTime
     */
    public function getDateboth()
    {
        return $this->dateboth;
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
     * Set condition
     *
     * @param boolean $condition
     *
     * @return User
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return boolean
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return User
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Add observation
     *
     * @param \Portail\WebBundle\Entity\Observations $observation
     *
     * @return User
     */
    public function addObservation(\Portail\WebBundle\Entity\Observations $observation)
    {
        $this->observations[] = $observation;
        $observation->setUtilisateur($this);
        return $this;
    }

    /**
     * Remove observation
     *
     * @param \Portail\WebBundle\Entity\Observations $observation
     */
    public function removeObservation(\Portail\WebBundle\Entity\Observations $observation)
    {
        $this->observations->removeElement($observation);
    }

    /**
     * Get observations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set conditionUtilisation
     *
     * @param boolean $conditionUtilisation
     *
     * @return User
     */
    public function setConditionUtilisation($conditionUtilisation)
    {
        $this->conditionUtilisation = $conditionUtilisation;

        return $this;
    }

    /**
     * Get conditionUtilisation
     *
     * @return boolean
     */
    public function getConditionUtilisation()
    {
        return $this->conditionUtilisation;
    }
}

