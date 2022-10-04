<?php

namespace Simla\Model\Response;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Response\Data\GetOrderListResponseData;

/**
 * Class GetOrderListResponse
 *
 * @category GetOrderListResponse
 * @package  Simla\Model\Response
 */
class GetOrderListResponse extends BaseResponse implements \Countable
{
    /**
     * @var GetOrderListResponseData $responseData
     *
     * @JMS\Type("Simla\Model\Response\Data\GetOrderListResponseData")
     * @JMS\SerializedName("data")
     */
    public $responseData;
    
    
    public function count(): int
    {
       return empty($this->responseData)? 0 : count($this->responseData);
    }
}
