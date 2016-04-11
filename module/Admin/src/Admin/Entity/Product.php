<?php
namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 * @package Admin\Entity
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=5, name="product_id")
     * @var int
     */
    private $productId;

    /**
     * @ORM\Column(type="string", length=100)
     * @var string
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=TRUE)
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="datetime", name="created_date")
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
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
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTime $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }



}