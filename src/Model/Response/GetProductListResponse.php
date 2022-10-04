<?php

namespace Simla\Model\Response;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\Assortment\ProductDto;

/**
 * Class GetProductListResponse
 *
 * @category GetProductListResponse
 * @package  Simla\Model\Response
 */
class GetProductListResponse extends BaseResponse implements \Countable
{
    /**
     * @var ProductDto[] $products
     *
     * @JMS\Type("array<Simla\Model\Entity\Assortment\ProductDto>")
     * @JMS\SerializedName("data")
     */
    public $products;
    
    
    public function isEmpty(): bool
    {
       return empty($this->products);
    }
    
    public function count(): int
    {
       return empty($this->products)? 0 : count($this->products);
    }
}
