<?php

namespace Portail\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="CD_NOM", type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_VERN", type="string", length=255)
     */
    private $nomFr;

    /**
     * @var string
     *
     * @ORM\Column(name="LB_NOM", type="string", length=255)
     */
    private $nomLa;


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
