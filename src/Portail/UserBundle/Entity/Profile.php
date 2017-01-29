<?php

namespace Portail\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table(name="profile")
 * @ORM\Entity(repositoryClass="Portail\UserBundle\Repository\ProfileRepository")
 */
class Profile
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedenaissance", type="date")
     */
    private $datedenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=100)
     */
    private $profession;

    /**
     * @var bool
     *
     * @ORM\Column(name="conditiongenerale", type="boolean")
     */
    private $conditiongenerale;

    /**
     * @ORM\ManyToOne(targetEntity="Portail\UserBundle\Entity\Profile", inversedBy="user", cascade={"persist"})
     */
    private $user;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Profile
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
     * @return Profile
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
     * Set datedenaissance
     *
     * @param \DateTime $datedenaissance
     *
     * @return Profile
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    /**
     * Get datedenaissance
     *
     * @return \DateTime
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Profile
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
     * Set profession
     *
     * @param string $profession
     *
     * @return Profile
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
     * @return Profile
     */
    public function setConditiongenerale($conditiongenerale)
    {
        $this->conditiongenerale = $conditiongenerale;

        return $this;
    }

    /**
     * Get conditiongenerale
     *
     * @return bool
     */
    public function getConditiongenerale()
    {
        return $this->conditiongenerale;
    }

    /**
     * Set user
     *
     * @param \Portail\UserBundle\Entity\Profile $user
     *
     * @return Profile
     */
    public function setUser(\Portail\UserBundle\Entity\Profile $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Portail\UserBundle\Entity\Profile
     */
    public function getUser()
    {
        return $this->user;
    }
}
