<?php

namespace Jam\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Jam\StoreBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jam\StoreBundle\Entity\UserRepository")
 */
class User
{
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
     * @var integer $site_id
     *
     * @ORM\ManyToOne(targetEntity="Jam\StoreBundle\Entity\Site", inversedBy="members")
     * @ORM\JoinColumn(name="fk_site_id", referencedColumnName="id")     
     */
    private $site_id;

    /**
     * @var datetime $created_ad
     *
     * @ORM\Column(name="created_ad", type="datetime")
     */
    private $created_ad;

    /**
     * @var text $details
     *
     * @ORM\Column(name="details", type="text")
     * @Assert\MaxLength(5)
     */
    private $details;


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
     * Set site_id
     *
     * @param integer $siteId
     * @return User
     */
    public function setSiteId($siteId)
    {
        $this->site_id = $siteId;
        return $this;
    }

    /**
     * Get site_id
     *
     * @return integer 
     */
    public function getSiteId()
    {
        return $this->site_id;
    }

    /**
     * Set created_ad
     *
     * @param datetime $createdAd
     * @return User
     */
    public function setCreatedAd($createdAd)
    {
        $this->created_ad = $createdAd;
        return $this;
    }

    /**
     * Get created_ad
     *
     * @return datetime 
     */
    public function getCreatedAd()
    {
        return $this->created_ad;
    }

    /**
     * Set details
     *
     * @param text $details
     * @return User
     */
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Get details
     *
     * @return text 
     */
    public function getDetails()
    {
        return $this->details;
    }
}