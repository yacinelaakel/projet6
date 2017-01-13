<?php

namespace Portail\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

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
     * @var string
     *
     * @ORM\Column(name="nom_fr", type="string", length=255, unique=true)
     * @Assert\Type("string")
     */
    private $nomFr;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_la", type="string", length=255, unique=true)
     * @Assert\Type("string")
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
}

