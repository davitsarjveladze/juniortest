<?php
/**
 * Created by PhpStorm.
 * User: davit
 * Date: 001 01.10.19
 * Time: 17:29
 */

namespace back\classes;

/**
 * Class Book
 * @package back\classes
 * using for Book cards
 */
class Book extends Product
{
    private $weight = array();

    /**
     * @param $arrayInfo
     * function use  to set disk parameters
     *array  need to get from the sql request
     */
    public function setValue($arrayInfo)
    {
        $this->count = count($arrayInfo);
        for ($i=0 ;count($arrayInfo)>$i; $i++){
            if ('Book' === $arrayInfo[$i]["type"]){
                $this->sku[]= $arrayInfo[$i]["sku"];
                $this->name[]= $arrayInfo[$i]["name"];
                $this->price[]= $arrayInfo[$i]["price"];
                $this->weight[]= $arrayInfo[$i]["weight"];
            }
        }
        $this->count = count($this->weight);


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