<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\ProductCreate\ProductDto;

/**
 * Class EditProductsRequest
 *
 * @category EditProductsRequest
 * @package  Simla\Model\Request
 */
class EditProductsRequest extends CreateProductsRequest
{
    public function addProduct(ProductDto $product): self
    {
        if(empty($product->productId)) throw new \InvalidArgumentException('No subject productId specified');
        parent::addProduct($product);
        return $this;
    }
    

    public function getMethod(): string
    {
        return '/api/v1/product/edit';
    }
}
