<?php

/**
 * Fibonacciho posloupnost
 * 
 * Třída je potomkem třídy Sequence.
 * Umožňuje pomocí rozhraní získat prvních n-členů
 * Fibonacciho poslounosti a hodnotu n-tého
 * člena posloupnosti.
 */class FSeq extends Sequence
{

    /**
     * První člen posloupnosti
     * 
     * Konstanta s hodnotou
     * prvního člena Fibonacciho posloupnosti.
     */
    protected const FIRST_MEMBER = 0;

    /**
     * Druhý člen posloupnosti
     * 
     * Konstanta s hodnotou
     * druhého člena Fibonacciho posloupnosti.
     */
    protected const SECOND_MEMBER = 1;

    public static function getSeqOfNums($amount): array
    {
        if (is_int($amount) && $amount > 0)
        {
            parent::$seq = [];
            parent::$seq[0] = self::FIRST_MEMBER;
            parent::$seq[1] = self::SECOND_MEMBER;
            for ($i = 2; $i < $amount; $i++)
            {
                parent::$seq[$i] = parent::$seq[$i-1] + parent::$seq[$i-2];
            }
        }
        else
        {
            die("Chyba: Počet prvků poslounposti není celé kladné číslo.");
        }
        
        return parent::$seq;
    }

    public static function getMember($number): int
    {
        self::getSeqOfNums($number);
        parent::$member = parent::$seq[$number - 1];
        return parent::$member;
    }

}