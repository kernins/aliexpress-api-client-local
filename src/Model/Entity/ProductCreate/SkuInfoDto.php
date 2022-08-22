<?php

namespace Simla\Model\Entity\ProductCreate;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SkuInfoDto
 *
 * @category SkuInfoDto
 * @package  Simla\Model\Entity\ProductCreate
 */
class SkuInfoDto
{
    /**
     * @var string $skuCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sku_code")
     */
    public $skuCode;
   
    /**
     * @var string $barCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("bar_code")
     */
    public $barCode = '0';
    
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
    
    /**
     * @var int $stock
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("inventory")
     */
    public $stock;
    
    /**
     * @var string $gtin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("gtin")
     */
    public $gtin;
    
    /**
     * @var string[] $okpd2Codes
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("okpd2_codes")
     */
    public $okpd2Codes;
    
    /**
     * @var string[] $tnvedCodes
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("tnved_codes")
     */
    public $tnvedCodes;
    
    /**
     * @var SkuAttributeDto[] $attributes
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductCreate\SkuAttributeDto>")
     * @JMS\SerializedName("sku_attributes_list")
     */
    public $attributes;
    
    
    public static function newInstance(string $skuCode, int $stock, float $price, ?float $priceDiscount=null): self
    {
       $inst = new static;
       $inst->skuCode = $skuCode;
       $inst->stock = $stock;
       $inst->price = $price;
       if($priceDiscount !== null) $inst->priceDiscount = $priceDiscount;
       
       return $inst;
    }
}
