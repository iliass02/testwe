<?php

require 'CityBuilder.php';

/**
 *
 */
class HeavyRain extends CityBuilder
{
    function __construct(){}

    public function exec($rand = false)
    {
        $city   = $rand ? $this->randomCity() : $this->staticCity();
        $result = 0;
        $leftBorder = 0;
        
        $city = [1, 2, 1, 5, 2, 4, 1, 0, 1, 2, 6, 4, 5, 2, 3, 4, 1, 2];

        for ($j = 0; $j < count($city); $j++)
        {
            $waterPoolSize = 0;
            $left = $city[$j-1];
            $right = $city[$j+1];

            echo "block : ".$city[$j]."\n";
            echo "left : ".$left."\n";
            echo "right : ".$right."\n";
            echo "end\n\n";

            // $city[$j] taille du batiment courant
            // $left taille du batiment a gauche
            // $right taille du batiment a droite
        }
        echo json_encode($city) . " => " . $result . "\n";
    }
}
