<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\ProductStockDto;
use Simla\Model\Response\TaskGroupResponse;

/**
 * Class SetStocksRequest
 *
 * @category SetStocksRequest
 * @package  Simla\Model\Request
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class SetStocksRequest extends BaseRequest
{
    /**
     * @var ProductStockDto[] $productsStock
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductStockDto>")
     * @JMS\SerializedName("products")
     */
    public $productsStock;
    
    
    public static function newInstance(ProductStockDto ...$productStock): self
    {
       $inst = new static;
       foreach($productStock as $ps) $inst->addProductStock($ps);
       return $inst;
    }
    
    
    public function addProductStock(ProductStockDto $prodStock): self
    {
        if(empty($this->productsStock)) $this->productsStock = [];
        $this->productsStock[] = $prodStock;
        return $this;
    }
    

    public function getMethod(): string
    {
        return '/api/v1/product/update-sku-stock';
    }

    public function getExpectedResponse(): string
    {
        return TaskGroupResponse::class;
    }
}
