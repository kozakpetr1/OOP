<?php

/**
 * Geometrická posloupnost
 * 
 * Třída je potomkem třídy Sequence.
 * Umožňuje pomocí rozhraní získat prvních n-členů
 * geometrické poslounosti a hodnotu n-tého
 * člena posloupnosti.
 */class GSeq extends Sequence
{

    /**
     * Násobek (kvocient)
     * 
     * Statický atribut pro uchování hodnoty
     * násobku prvků geometrické posloupnosti.
     * @var int $ratio
     * @static
     */
    protected static $ratio = 0;

    /**
     * První člen posloupnosti
     * 
     * Statický atribut pro uchování hodnoty
     * prvního člena geometrické posloupnosti.
     * @var int $firstMember
     * @static
     */
    protected static $firstMember = 0;

    public static function setRatio($ratio)
    {
        if (is_int($ratio))
        {
            self::$ratio = $ratio;
        }
        else
        {
            die("Chyba: Hodnota násobku není celé číslo.");
        }
    }

    public static function setFirstMember($member)
    {
        if (is_int($member))
        {
            self::$firstMember = $member;
        }
        else
        {
            die("Chyba: První člen není celé číslo.");
        }
    }

    public static function setVals($member, $ratio)
    {
        self::setFirstMember($member);
        self::setRatio($ratio);
    }

    public static function getSeqOfNums($amount): array
    {
        if (is_int($amount) && $amount > 0)
        {
            parent::$seq = [];
            parent::$seq[0] = self::$firstMember;
            for ($i = 1; $i < $amount; $i++)
            {
                parent::$seq[$i] = parent::$seq[$i-1] * self::$ratio;
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
        if (is_int($number) && $number > 0)
        {
            parent::$member = self::$firstMember * ( self::$ratio ** ($number - 1));
            return parent::$member;
        }
        else
        {
            die("Chyba: Hodnota člena posloupnosti není celé nezáporné číslo.");
        }
    }

}