<?php
/**
 * Created by PhpStorm.
 * User: rafaelconceicao@conder.intranet
 * Date: 16/08/18
 * Time: 15:43
 */

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB ;

/**
 * @MongoDB\Document
 */
class Product
{
    /**
     * @MongoDB\Id
     */
    protected $id ;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $name ;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $price ;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


}