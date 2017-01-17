<?php

namespace Portail\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

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
     * @ORM\ManyToOne(targetEntity="Portail\WebBundle\Entity\Oiseaux", inversedBy="observations")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
     */
    private $oiseau;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_observation", type="datetime")
     * @Assert\DateTime()
     */
    private $dateObservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_observation", type="time")
     * @Assert\Time()
     */
    private $heureObservation;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     * @Assert\Type(
     *     type="float",
     *     message="La valeur n'est pas de type {{ type }}."
     * )
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     * @Assert\Type(
     *     type="float",
     *     message="La valeur n'est pas de type {{ type }}."
     * )
     */
    private $latitude;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_individus", type="integer")
     * @Assert\Type("integer")
     * @Assert\Range(
     *      min = 1,
     *      max = 100,
     *      minMessage = "Il doit y avoir au moins {{ limit }} oiseau",
     *      maxMessage = "Il ne peut pas y avoir plus de {{ limit }} oiseaux"
     * )
     */
    private $nbIndividus;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     * @Assert\File(mimeTypes={ "image/png" })
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     * @Assert\Type("string")
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     * @Assert\Type("string")
     */
    private $etat;

    /**
     * Constructor
     */
    public function __construct()
    {
        //Une observation est par défaut en cours de validation
        $this->setEtat("En cours");
    }


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

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Observations
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @Assert\Callback
     */
    public function isDateValid(ExecutionContextInterface $context)
    {
        $dateObservation = $this->getDateObservation();
        $currentDate = date_create();
        $diff = date_diff($currentDate, $dateObservation)->format('%d');

        if ($diff < 0) {
            $context
                ->buildViolation('Invalide : jour interdit.')
                ->atPath('dateObservation')
                ->addViolation()
            ;
        }
    }


    /**
     * Set oiseaux
     *
     * @param \Portail\WebBundle\Entity\Oiseaux $oiseaux
     *
     * @return Observations
     */
    public function setOiseaux(\Portail\WebBundle\Entity\Oiseaux $oiseaux)
    {
        $this->oiseaux = $oiseaux;
    
        return $this;
    }

    /**
     * Get oiseaux
     *
     * @return \Portail\WebBundle\Entity\Oiseaux
     */
    public function getOiseaux()
    {
        return $this->oiseaux;
    }

    /**
     * Set oiseau
     *
     * @param \Portail\WebBundle\Entity\Oiseaux $oiseau
     *
     * @return Observations
     */
    public function setOiseau(\Portail\WebBundle\Entity\Oiseaux $oiseau)
    {
        $this->oiseau = $oiseau;
    
        return $this;
    }

    /**
     * Get oiseau
     *
     * @return \Portail\WebBundle\Entity\Oiseaux
     */
    public function getOiseau()
    {
        return $this->oiseau;
    }
}
