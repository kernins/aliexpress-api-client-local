<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Response\GetProductListResponse;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class GetProductListRequest
 *
 * @category GetProductListRequest
 * @package  Simla\Model\Request
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class GetProductListRequest extends BaseRequest
{
    /**
     * @var GetProductListFilter $filter
     *
     * @JMS\Type("Simla\Model\Request\GetProductListFilter")
     * @JMS\SerializedName("filter")
     */
   public $filter = null;
   
    /**
     * @var int $lastProdId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("last_product_id")
     */
    public $lastProdId;

    /**
     * @var int $limit
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("limit")
     * @Assert\NotNull()
     */
    public $limit = 50;
    
    
    
    public static function newInstance(?GetProductListFilter $filter=null): self
    {
        $inst = new static;
        $inst->filter = $filter;
        return $inst;
    }


    public function getMethod(): string
    {
        return '/api/v1/scroll-short-product-by-filter';
    }

    public function getExpectedResponse(): string
    {
        return GetProductListResponse::class;
    }
}
