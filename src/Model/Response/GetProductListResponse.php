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
class GetProductListResponse extends BaseResponse
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
}
