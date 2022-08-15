<?php

namespace Simla\Model\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ProductSkuPriceDto
 *
 * @category ProductSkuPriceDto
 * @package  Simla\Model\Entity
 */
class ProductSkuPriceDto
{
    /**
     * @var string $skuCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sku_code")
     */
    public $skuCode;

    /**
     * @var float $price
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("price")
     */
    public $price;
    
    /**
     * @var float $priceDiscount
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("discount_price")
     */
    public $priceDiscount;
    
    
    public static function newInstance(string $skuCode, float $price, ?float $priceDiscount=null): self
    {
       $inst = new static;
       $inst->skuCode = $skuCode;
       $inst->price = $price;
       if($priceDiscount !== null) $inst->priceDiscount = $priceDiscount;
       return $inst;
    }
}
