<?php

/**
 * Aritmetická posloupnost
 * 
 * Třída je potomkem třídy Sequence.
 * Umožňuje pomocí rozhraní získat prvních n-členů
 * aritmetické poslounosti a hodnotu n-tého
 * člena posloupnosti.
 */
class ASeq extends Sequence
{
    /**
     * Přírůstek
     * 
     * Statický atribut pro uchování hodnoty
     * přírůstku aritmetické posloupnosti.
     * @var int $difference
     * @static
     */
    protected static $difference = 0;

    /**
     * První člen posloupnosti
     * 
     * Statický atribut pro uchování hodnoty
     * prvního člena aritmetické posloupnosti.
     * @var int $firstMember
     * @static
     */
    protected static $firstMember = 0;

    /**
     * Setter pro nastavení atributu přírůstek
     * 
     * Statický setter nastaví hodnotu statickho
     * atributu přírůstek.
     * @param int $dif
     * @return void statická metoda nic nevrací
     */
    public static function setDifference($dif)
    {
        if (is_int($dif))
        {
            self::$difference = $dif;
        }
        else
        {
            die("Chyba: Přírůstek není celé číslo.");
        }
    }

    /**
     * Setter pro nastavení atributu první člen
     * 
     * Statický setter nastaví hodnotu statického
     * atributu první člen posloupnosti.
     * @param int $member
     * @return void statická metoda nic nevrací
     */
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

    public static function setVals($member, $dif)
    {
        self::setFirstMember($member);
        self::setDifference($dif);
    }

    public static function getSeqOfNums($amount): array
    {
        if (is_int($amount) && $amount > 0)
        {
            parent::$seq = [];
            parent::$seq[0] = self::$firstMember;
            for ($i = 1; $i < $amount; $i++)
            {
                parent::$seq[$i] = parent::$seq[$i-1] + self::$difference;
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
            parent::$member = self::$firstMember + ($number - 1) * self::$difference;
            return parent::$member;
        }
        else
        {
            die("Chyba: Hodnota člena posloupnosti není celé nezáporné číslo.");
        }
    }

}