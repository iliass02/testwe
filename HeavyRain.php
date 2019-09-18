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

        /* add your code here */

        for ($j = 0; $j < count($city); $j++) {
            $waterSize = 0;
            $left = max(array_slice($city, 0, $j));
            $right = max(array_slice($city, $j));
            echo $city[$j]."\n";
            echo "left : ".$left."\n";
            echo "right : ".$right."\n";
            echo "end\n";
        }

        echo json_encode($city) . " => " . $result . "\n";
    }
}
