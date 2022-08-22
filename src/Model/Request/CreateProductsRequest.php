<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\ProductCreate\ProductDto;
use Simla\Model\Response\TaskGroupResponse;

/**
 * Class CreateProductsRequest
 *
 * @category CreateProductsRequest
 * @package  Simla\Model\Request
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class CreateProductsRequest extends BaseRequest
{
    /**
     * @var ProductDto[] $products
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductCreate\ProductDto>")
     * @JMS\SerializedName("products")
     */
    public $products;
    
    
    public static function newInstance(ProductDto ...$products): self
    {
       $inst = new static;
       foreach($products as $prod) $inst->addProduct($prod);
       return $inst;
    }
    
    public function addProduct(ProductDto $product): self
    {
        if(empty($this->products)) $this->products = [];
        $this->products[] = $product;
        return $this;
    }
    

    public function getMethod(): string
    {
        return '/api/v1/product/create';
    }

    public function getExpectedResponse(): string
    {
        return TaskGroupResponse::class;
    }
}
