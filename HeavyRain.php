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

        $prev = 0;
        $next = $city[1];

        for ($j = 0; $j < count($city); $j++)
        {
            $current = $city[$j];
            $water = 0;
            if ($prev > $city[$j] && $next > $city[$j]) {
                $min = min([$prev, $next]);
                $water = $min-$city[$j];

                if ($prev > $water) {
                    $value = $prev-($water+$city[$j]);
                    $water += $prev - ($water+$city[$j]);
                }
                $result += $water;
            }
            else if ($prev > $city[$j] && $next < $city[$j]) {
                $water = $prev - $current;
                $result += $water;
            }

            $prev = $water + $city[$j];
            $next = $city[$j+2];
        }
        echo json_encode($city) . " => " . $result . "\n";
    }
}
