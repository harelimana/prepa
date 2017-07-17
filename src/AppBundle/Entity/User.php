<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @var VARCHAR 
     * @ORM\Column(name="username", type="VARCHAR", length=128)
     */
    
    private $usename;
    
    /**
     * @var string
     *
     * @ORM\Column(name="profile_pic", type="VARCHAR", length=45, nullable=true)
     */
    private $profile_pic;
    
    
    function getUsename() {
        return $this->usename;
    }

    function getProfile_pic() {
        return $this->profile_pic;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsename(VARCHAR $usename) {
        $this->usename = $usename;
    }

    function setProfile_pic($profile_pic) {
        $this->profile_pic = $profile_pic;
    }
    
}

