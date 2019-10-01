<?php
/**
 * Created by PhpStorm.
 * User: davit
 * Date: 001 01.10.19
 * Time: 17:31
 */

namespace back\classes;


/**
 * Class Furniture
 * @package back\classes
 * using for Furniture cards
 */
class Furniture extends Product
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
            if ('​Furniture' === $arrayInfo[$i]["type"]) {
                $this->sku[] = $arrayInfo[$i]["sku"];
                $this->name[] = $arrayInfo[$i]["name"];
                $this->height[] = $arrayInfo[$i]["height"];
                $this->width[] = $arrayInfo[$i]["width"];
                $this->length[] = $arrayInfo[$i]["length"];
            }
        }
        $this->count = count($this->length);

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