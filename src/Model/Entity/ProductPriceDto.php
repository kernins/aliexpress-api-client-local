<?php

namespace Simla\Model\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ProductPriceDto
 *
 * @category ProductPriceDto
 * @package  Simla\Model\Entity
 */
class ProductPriceDto
{
    /**
     * @var int $productId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("product_id")
     */
    public $productId;
    
    /**
     * @var ProductSkuPriceDto[] $priceInfo
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductSkuPriceDto>")
     * @JMS\SerializedName("skus")
     */
    public $priceInfo;
    
    
    public static function newInstance(int $prodId, ProductSkuPriceDto ...$priceInfo): self
    {
       $inst = new static;
       $inst->productId = $prodId;
       foreach($priceInfo as $pi) $inst->addSkuPrice($pi);
       return $inst;
    }
    
    public static function newInstanceSingleSku(int $prodId, string $skuCode, float $price, ?float $priceDiscount=null): self
    {
       return self::newInstance(
          $prodId,
          ProductSkuPriceDto::newInstance($skuCode, $price, $priceDiscount)
       );
    }
    
    
    public function addSkuPrice(ProductSkuPriceDto $skuPrice): self
    {
        if(empty($this->priceInfo)) $this->priceInfo = [];
        $this->priceInfo[] = $skuPrice;
        return $this;
    }
}
