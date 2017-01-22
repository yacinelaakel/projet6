<?php

namespace Portail\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Portail\WebBundle\Entity\Observations;

/**
 * Oiseaux
 *
 * @ORM\Table(name="oiseaux")
 * @ORM\Entity(repositoryClass="Portail\WebBundle\Repository\OiseauxRepository")
 */
class Oiseaux
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
     * @ORM\OneToMany(targetEntity="Portail\WebBundle\Entity\Observations", mappedBy="oiseau")
     * @Assert\Valid()
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_VERN", type="string", length=255)
     * @Assert\Regex("/^[a-zA-Z]{3,40}/", message="Le nom doit être valide (entre 3 et 40 lettres).")
     */
    private $nomFr;

    /**
     * @var string
     *
     * @ORM\Column(name="LB_NOM", type="string", length=255)
     * @Assert\Regex("/^[a-zA-Z]{3,40}/", message="Le nom doit être valide (entre 3 et 40 lettres).")
     */
    private $nomLa;


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
     * Set nomFr
     *
     * @param string $nomFr
     *
     * @return Oiseaux
     */
    public function setNomFr($nomFr)
    {
        $this->nomFr = $nomFr;

        return $this;
    }

    /**
     * Get nomFr
     *
     * @return string
     */
    public function getNomFr()
    {
        return $this->nomFr;
    }

    /**
     * Set nomLa
     *
     * @param string $nomLa
     *
     * @return Oiseaux
     */
    public function setNomLa($nomLa)
    {
        $this->nomLa = $nomLa;

        return $this;
    }

    /**
     * Get nomLa
     *
     * @return string
     */
    public function getNomLa()
    {
        return $this->nomLa;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->observations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add observation
     *
     * @param \Portail\WebBundle\Entity\Observations $observation
     *
     * @return Oiseaux
     */
    public function addObservation(\Portail\WebBundle\Entity\Observations $observation)
    {
        $this->observations[] = $observation;
        //On associe l'observation à l'oiseau
        $observation->setOiseau($this);

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
}
