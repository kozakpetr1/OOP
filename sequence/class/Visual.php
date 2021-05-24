<?php

class Visual
{
    public static function showValue($val)
    {
        echo "<div style=\"padding: 0.5em; width: 3em; border: 1px solid black; border-collapse: collapse;\">" . $val . "</div>" . PHP_EOL;
    }

    public static function showArray($array)
    {
        echo "<div style=\"display: flex; margin: 0.2em 0 0.2em 0;\">" . PHP_EOL;
        foreach ($array as $val)
        {
            self::showValue($val);
        }
        echo "</div>" . PHP_EOL;
    }

}