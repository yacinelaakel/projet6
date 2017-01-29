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
use Doctrine\Common\Collections\ArrayCollection;
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
     * @var ArrayCollection
     *
     * @ORM\OneToOne(targetEntity="Portail\UserBundle\Entity\Profile", cascade={"persist"})
     * @Assert\Valid()
     */
    private $profile;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Add profile
     *
     * @param \Portail\UserBundle\Entity\Profile $profile
     *
     * @return User
     */
    public function addProfile(\Portail\UserBundle\Entity\Profile $profile)
    {
        $this->profile[] = $profile;
        $profile->setUser($this);

        return $this;
    }

    /**
     * Remove profile
     *
     * @param \Portail\UserBundle\Entity\Profile $profile
     */
    public function removeProfile(\Portail\UserBundle\Entity\Profile $profile)
    {
        $this->profile->removeElement($profile);
    }

    /**
     * Get profile
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfile()
    {
        return $this->profile;
    }


}