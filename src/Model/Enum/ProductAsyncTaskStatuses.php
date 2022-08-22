<?php

namespace Simla\Model\Enum;

class ProductAsyncTaskStatuses
{
    public const CREATED      = 1;
    public const PROCESSING   = 2;
    public const SUCCESSFUL   = 3;
    public const FAILED       = 4;

    public const STATUSES_LIST = [
        self::CREATED,
        self::PROCESSING,
        self::SUCCESSFUL,
        self::FAILED,
    ];
}
