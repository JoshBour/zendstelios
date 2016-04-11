<?php

namespace Admin\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Gallery
 * @package Admin\Entity
 * @ORM\Entity
 * @ORM\Table(name="galleries")
 */
class Gallery
{
    /**
     * @ORM\Column(type="text", nullable=TRUE)
     * @var string
     */
    private $description;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=3, name="gallery_id")
     * @var int
     */
    private $galleryId;

    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="gallery")
     * @var ArrayCollection | Image[]
     */
    private $images;

    /**
     * @ORM\Column(type="string", length=100, nullable=TRUE)
     * @var string
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=20)
     * @var string
     */
    private $url;

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getGalleryId()
    {
        return $this->galleryId;
    }

    /**
     * @param int $galleryId
     */
    public function setGalleryId($galleryId)
    {
        $this->galleryId = $galleryId;
    }

    /**
     * @return Image[]|ArrayCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param Image[]|ArrayCollection $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


}