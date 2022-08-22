<?php

namespace Simla\Model\Enum;

class ProductUnits
{
    public const PAIR = 100000013;
    public const PACK = 100000014;
    public const UNIT = 100000015;
    public const SET  = 100000017;
    public const SQ_M = 100000019;

    // List of all units.
    public const UNITS_LIST = [
        self::PAIR,
        self::PACK,
        self::UNIT,
        self::SET,
        self::SQ_M
    ];
}
