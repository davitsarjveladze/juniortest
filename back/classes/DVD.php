<?php
/**
 * Created by PhpStorm.
 * User: davit
 * Date: 001 01.10.19
 * Time: 17:35
 */

namespace back\classes;


/**
 * Class DVD
 * @package back\classes
 * using for DVD cards
 */
class DVD extends Product
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
        $this->count = count($arrayInfo);
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            if ('DVDdisc' === $arrayInfo[$i]["type"]){
                $this->sku[]= $arrayInfo[$i]["sku"];
                $this->name[]= $arrayInfo[$i]["name"];
                $this->price[]= $arrayInfo[$i]["price"];
                $this->size[]= $arrayInfo[$i]["size"];
            }
        }
        $this->count = count($this->size);
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
