<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\ProductPriceDto;
use Simla\Model\Response\TaskGroupResponse;

/**
 * Class SetPricesRequest
 *
 * @category SetPricesRequest
 * @package  Simla\Model\Request
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class SetPricesRequest extends BaseRequest
{
    /**
     * @var ProductPriceDto[] $productsPrices
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductPriceDto>")
     * @JMS\SerializedName("products")
     */
    public $productsPrices;
    
    
    public static function newInstance(ProductPriceDto ...$productsPrices): self
    {
       $inst = new static;
       foreach($productsPrices as $pp) $inst->addProductPrice($pp);
       return $inst;
    }
    
    
    public function addProductPrice(ProductPriceDto $prodPrice): self
    {
        if(empty($this->productsPrices)) $this->productsPrices = [];
        $this->productsPrices[] = $prodPrice;
        return $this;
    }
    

    public function getMethod(): string
    {
        return '/api/v1/product/update-sku-price';
    }

    public function getExpectedResponse(): string
    {
        return TaskGroupResponse::class;
    }
}
