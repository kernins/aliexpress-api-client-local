<?php

namespace Simla\Model\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ProductStockDto
 *
 * @category ProductStockDto
 * @package  Simla\Model\Entity
 */
class ProductStockDto
{
    /**
     * @var int $productId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("product_id")
     */
    public $productId;
    
    /**
     * @var ProductSkuStockDto[] $stockInfo
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductSkuStockDto>")
     * @JMS\SerializedName("skus")
     */
    public $stockInfo;
    
    
    public static function newInstance(int $prodId, ProductSkuStockDto ...$stockInfo): self
    {
       $inst = new static;
       $inst->productId = $prodId;
       foreach($stockInfo as $si) $inst->addSkuStock($si);
       return $inst;
    }
    
    
    public function addSkuStock(ProductSkuStockDto $skuStock): self
    {
        if(empty($this->stockInfo)) $this->stockInfo = [];
        $this->stockInfo[] = $skuStock;
        return $this;
    }
}
