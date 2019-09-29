<?php
/**
 * Created by PhpStorm.
 * User: davit
 * Date: 028 28.09.19
 * Time: 22:23
 */

namespace back\classes;


/**
 * Class ProductCard
 * @package back\classes
 * inside Common parameters
 */
class ProductCard
{
    /**
     * @var array
     *
     */
    protected $sku = array();
    protected $name = array();
    protected $price = array();
    protected $count = array();
}

/**
 *class  for dvd disk
 * Class ProductCardDvdDisc
 * @package back\classes
 */

class ProductCardDvdDisc extends ProduCtcard
{
    /**
     *
     * @var array
     * disk size
     */
    private $size = array();

    /**
     * @param $arrayInfo array
     * function use to set disk parameters
     *array  need to get from the sql request
     */

    public function setValue($arrayInfo)
    {
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->sku[]= $arrayInfo[$i]["sku"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->name[]= $arrayInfo[$i]["name"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->price[]= $arrayInfo[$i]["price"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->size[]= $arrayInfo[$i]["size"];
        }


        $this->count = count($arrayInfo);

    }

    /**
     * display disk parameters
     */
    public function getValue()
    {
        for ($i = 0; $i < $this->count; $i++){
            echo "<div class=\"shoppingCard DVD-disc\">
            <p>".$this->sku[$i]."</p> 
            <p>".$this->name[$i]."</p> 
            <p>".$this->price[$i]."</p> 
            <p>".$this->size[$i]."</p> 
            </div>" ;
            ;
        }

    }
}

/**
 * Class ProductCardBook
 * @package back\classes
 */
class ProductCardBook extends ProduCtcard
{
    private $weight = array();

    /**
     * @param $arrayInfo
     * function use  to set disk parameters
     *array  need to get from the sql request
     */
    public function setValue($arrayInfo)
    {
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->sku[]= $arrayInfo[$i]["sku"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->name[]= $arrayInfo[$i]["name"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->price[]= $arrayInfo[$i]["price"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->weight[]= $arrayInfo[$i]["weight"];
        }


        $this->count = count($arrayInfo);

    }

    /**
     * function use to display value
     */
    public function getValue()
    {
        for ($i = 0; $i < $this->count; $i++){
            echo "<div class=\"shoppingCard Book\">
            <p>".$this->sku[$i]."</p> 
            <p>".$this->name[$i]."</p> 
            <p>".$this->price[$i]."</p> 
            <p>".$this->weight[$i]."</p> 
            </div>" ;
            ;
        }

    }
}

/**
 * Class ProductCardFurniture
 * @package back\classes
 */
class ProductCardFurniture extends ProduCtcard
{
    /**
     * @var array
     * privet parameters to describe furniture
     */
    private $height = array();
    private $width = array();
    private $length = array();

    /**
     * @param $arrayInfo
     * function use to set parameters
     * array need to get from sql query
     */
    public function setValue($arrayInfo)
    {
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->sku[]= $arrayInfo[$i]["sku"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->name[]= $arrayInfo[$i]["name"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->price[]= $arrayInfo[$i]["price"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->height[]= $arrayInfo[$i]["height"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->width[]= $arrayInfo[$i]["width"];
        }
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            $this->length[]= $arrayInfo[$i]["length"];
        }

        $this->count = count($arrayInfo);

    }

    /**
     *  function use to display values
     */
    public function getValue()
    {
        for ($i = 0; $i < $this->count; $i++){
            echo "<div class=\"shoppingCard ​Furniture\">
            <p>".$this->sku[$i]."</p> 
            <p>".$this->name[$i]."</p> 
            <p>".$this->price[$i]."</p> 
            <p>".$this->height[$i].'x'.$this->width[$i].'x'.$this->width[$i]."</p> 
            </div>" ;
            ;
        }

    }
}