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

        for ($j = 0; $j < count($city); $j++)
        {
            $waterPoolSize = 0;
            $left = $city[$j-1];
            $right = $city[$j+1];

            echo "block : ".$city[$j]."\n";
            echo "left : ".$left."\n";
            echo "right : ".$right."\n";

            if ($left > $city[$j] && $right > $city[$j]) {
                echo "WATER !!! \n";
                $min = min([$left, $right]);
                echo "min : ".$min."\n";
                $water = $min-$city[$j];
                echo "water : ".$water."\n";
                if ($left > $water) {
                    // echo "new water : ".$left - ($water+$city[$j])."\n";
                    $water += $left - ($water+$city[$j]);
                }

                $result += $water;
            }
            echo "end\n\n";

            // $city[$j] taille du batiment courant
            // $left taille du batiment a gauche
            // $right taille du batiment a droite
        }
        echo json_encode($city) . " => " . $result . "\n";
    }
}
