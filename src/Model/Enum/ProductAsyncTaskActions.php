<?php

namespace Simla\Model\Enum;

class ProductAsyncTaskActions
{
    public const CREATE = 1;
    public const UPDATE = 2;
    public const STOCKS = 3;
    public const PRICES = 4;

    public const ACTIONS_LIST = [
        self::CREATE,
        self::UPDATE,
        self::STOCKS,
        self::PRICES,
    ];
}
