<?php

namespace Jam\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jam\StoreBundle\Entity\Site
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jam\StoreBundle\Entity\SiteRepository")
 */
class Site
{
    /**
     * Creates a Doctrine Collection for users.
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Jam\StoreBundle\Entity\User", mappedBy="site_id")
     */
    protected $users;
    
    /**
     * Override toString() method to return the name of the group
     * @return string name
     */
    public function __toString()
    {
        return $this->name;
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
     * Set name
     *
     * @param string $name
     * @return Site
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
     * Set description
     *
     * @param string $description
     * @return Site
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set users
     *
     * @param array $users
     * @return Site
     */
    public function setUsers($users)
    {
        $this->users = $users;
        return $this;
    }
    
    /**
     * Get users
     *
     * @return array
     */
    public function getUsers()
    {
        return $this->users;
    }
    
}