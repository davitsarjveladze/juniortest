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

    public function displayCard($arrayInfo)
    {
        for ($i = 0; $i < count($arrayInfo); $i++)
        {
            switch ($arrayInfo[$i]["type"]){
                case  'DVDdisc':
                    echo "<div class=\"shoppingCard DVD-disc\">
                        <p>".$arrayInfo[$i]["sku"]."</p> 
                        <p>".$arrayInfo[$i]["name"]."</p> 
                        <p>".$arrayInfo[$i]["price"]."</p> 
                        <p>".$arrayInfo[$i]["size"]."</p> 
                        </div>" ;
                    break;
                case 'Book':
                    echo "<div class=\"shoppingCard Book\">
                        <p>".$arrayInfo[$i]["sku"]."</p>
                        <p>".$arrayInfo[$i]["name"]."</p>
                        <p>".$arrayInfo[$i]["price"]."</p>
                        <p>".$arrayInfo[$i]["weight"]."</p>
                        </div>" ;
                    break;
                case '​Furniture':
                    echo "<div class=\"shoppingCard ​Furniture\">
                        <p>".$arrayInfo[$i]["sku"]."</p>
                        <p>".$arrayInfo[$i]["name"]."</p>
                        <p>".$arrayInfo[$i]["price"]."</p>
                        <p>".$arrayInfo[$i]["height"].'x'.$arrayInfo[$i]["width"].'x'.$arrayInfo[$i]["length"]."</p>
                        </div>" ;
                    break;

            }

        }

    }

}
