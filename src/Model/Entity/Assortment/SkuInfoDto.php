<?php

namespace Simla\Model\Entity\Assortment;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SkuInfoDto
 *
 * @category SkuInfoDto
 * @package  Simla\Model\Entity\Assortment
 */
class SkuInfoDto
{
    /**
     * @var string $id
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     */
    public $id;
    
    /**
     * @var int $skuId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("sku_id")
     */
    public $skuId;
    
    /**
     * @var string $skuCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $skuCode;
    
    /**
     * @var float $price
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price")
     */
    public $price;
    
    /**
     * @var float $priceDiscount
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("discount_price")
     */
    public $priceDiscount;
    
    /**
     * @var int $stock
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ipm_sku_stock")
     */
    public $stock;
}
