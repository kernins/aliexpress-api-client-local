<?php

namespace Simla\Model\Enum;

class InventoryDeductionStrategies
{
    public const ORDER_PLACEMENT = 'place_order_withhold';
    public const PAYMENT_CONFIRM = 'payment_success_deduct';

    // List of all strategies
    public const STRATEGIES_LIST = [
        self::ORDER_PLACEMENT,
        self::PAYMENT_CONFIRM
    ];
}
