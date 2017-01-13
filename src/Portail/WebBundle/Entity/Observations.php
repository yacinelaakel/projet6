<?php

namespace Portail\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observations
 *
 * @ORM\Table(name="observations")
 * @ORM\Entity(repositoryClass="Portail\WebBundle\Repository\ObservationsRepository")
 */
class Observations
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_observation", type="datetime")
     */
    private $dateObservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_observation", type="time")
     */
    private $heureObservation;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=9, scale=5)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=9, scale=5)
     */
    private $latitude;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_individus", type="integer")
     */
    private $nbIndividus;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateObservation
     *
     * @param \DateTime $dateObservation
     *
     * @return Observations
     */
    public function setDateObservation($dateObservation)
    {
        $this->dateObservation = $dateObservation;
    
        return $this;
    }

    /**
     * Get dateObservation
     *
     * @return \DateTime
     */
    public function getDateObservation()
    {
        return $this->dateObservation;
    }

    /**
     * Set heureObservation
     *
     * @param \DateTime $heureObservation
     *
     * @return Observations
     */
    public function setHeureObservation($heureObservation)
    {
        $this->heureObservation = $heureObservation;
    
        return $this;
    }

    /**
     * Get heureObservation
     *
     * @return \DateTime
     */
    public function getHeureObservation()
    {
        return $this->heureObservation;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Observations
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Observations
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set nbIndividus
     *
     * @param integer $nbIndividus
     *
     * @return Observations
     */
    public function setNbIndividus($nbIndividus)
    {
        $this->nbIndividus = $nbIndividus;
    
        return $this;
    }

    /**
     * Get nbIndividus
     *
     * @return integer
     */
    public function getNbIndividus()
    {
        return $this->nbIndividus;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Observations
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Observations
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}

