<?php

/**
 * Rozhraní pro posloupnost
 * 
 * Rozhraní pro posloupnost čísel, které se třída
 * implementující toto rozhraní zavazuje využívat.
 * @abstract
 */
interface iSequence
{
    public static function getSeqOfNums($amount): array;
    public static function getMember($number): int;
}

/**
 * Posloupnost
 *  
 * Abstraktní třída pro posloupnost celých čísel
 * implementující rozhraní pro posloupnost.
 */ 
abstract class Sequence implements iSequence
{
    protected static $seq = [];
    protected static $member = 0;

    public static function getSeqOfNums($amount): array
    {
        return self::$seq;
    }

    public static function getMember($number): int
    {
        return self::$member;
    }

}