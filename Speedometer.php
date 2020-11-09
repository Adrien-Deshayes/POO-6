<?php
class Speedometer
{
    const Miles = 0.62137;
    const Km = 1.555;
    
    public static function convertKmToMiles(float $nb): float
    {
        return $nb * self::Miles;
    }

    public static function convertMilesToKm(float $nb): float
    {
        return $nb * self::Km;
    }
}