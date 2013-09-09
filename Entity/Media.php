<?php

/**
 * 
 * @author:  Gabriel BONDAZ <gabriel.bondaz@idci-consulting.fr>
 * @author:  Sekou KOÏTA <sekou.koita@supinfo.com>
 * @license: GPL
 *
 */

namespace Tms\Bundle\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media", uniqueConstraints={@ORM\UniqueConstraint(name="Reference", columns={"reference"})})
 * @ORM\Entity(repositoryClass="Tms\Bundle\MediaBundle\Entity\Repository\MediaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Media
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;

    /**
     * @var boolean
     * @ORM\Column(name="enabled", type="boolean")
     */
    protected $enabled;

    /**
     * @var string
     * @ORM\Column(name="storageMapperId", type="string", nullable=false)
     */
    protected $storageMapperId;

    /**
     * @var string
     * @ORM\Column(name="reference", type="string")
     */
    protected $reference;

    /**
     * @var integer
     * @ORM\Column(name="width", type="integer", nullable=true)
     */
    protected $width;

    /**
     * @var integer
     * @ORM\Column(name="heigth", type="integer", nullable=true)
     */
    protected $height;

    /**
     * @var integer
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    protected $size;

    /**
     * @var string
     * @ORM\Column(name="contentType", type="string", length=255)
     */
    protected $contentType;

    /**
     * @var string
     * @ORM\Column(name="owner", type="string", length=255, nullable=true)
     */
    protected $owner;

    /**
     * @var \DateTime
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updatedAt;

    /**
     * On create
     *
     * @ORM\PrePersist()
     */
    public function onCreate()
    {
        $now = new \DateTime();
        $this
            ->setCreatedAt($now)
            ->setUpdatedAt($now)
        ;
    }

    /**
     * On update
     *
     * @ORM\PreUpdate()
     */
    public function onUpdate()
    {
        $now = new \DateTime();
        $this->setUpdatedAt($now);
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setEnabled(true);
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
     * @return Media
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
     * @return Media
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return Media
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set storage mapper Id
     *
     * @param string $storageMapperId
     * @return Media
     */
    public function setStorageMapperId($storageMapperId)
    {
        $this->storageMapperId = $storageMapperId;

        return $this;
    }

    /**
     * Get storage mapper Id
     *
     * @return string 
     */
    public function getStorageMapperId()
    {
        return $this->storageMapperId;
    }

    /**
     * Set reference
     *
     * @param array $reference
     * @return MediaEntity
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference data
     *
     * @return array 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return Media
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Media
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return Media
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set content type
     *
     * @param string $contentType
     * @return Media
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get content type
     *
     * @return string 
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set owner
     *
     * @param string $owner
     * @return Media
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set created at
     *
     * @param \DateTime $createdAt
     * @return Media
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get created at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updated at
     *
     * @param \DateTime $updatedAt
     * @return Media
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updated at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
