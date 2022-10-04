<?php

namespace Simla\Model\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ProductSkuStockDto
 *
 * @category ProductSkuStockDto
 * @package  Simla\Model\Entity
 */
class ProductSkuStockDto
{
    /**
     * @var string $skuCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sku_code")
     */
    public $skuCode;

    /**
     * @var int $stock
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("inventory")
     */
    public $stock;
    
    
    public static function newInstance(string $skuCode, int $stock): self
    {
       $inst = new static;
       $inst->skuCode = $skuCode;
       $inst->stock = max(0, $stock);
       return $inst;
    }
}
