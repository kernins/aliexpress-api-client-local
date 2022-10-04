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


    public function getMethod(): string
    {
        return '/api/v1/scroll-short-product-by-filter';
    }

    public function getExpectedResponse(): string
    {
        return GetProductListResponse::class;
    }
}
