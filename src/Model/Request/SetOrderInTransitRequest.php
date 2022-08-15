<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\ProductPriceDto;
use Simla\Model\Response\TaskGroupResponse;

/**
 * Class SetOrderInTransitRequest
 *
 * @category SetOrderInTransitRequest
 * @package  Simla\Model\Request
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class SetOrderInTransitRequest extends BaseRequest
{
    /**
     * @var int $orderId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("trade_order_id")
     */
    public $orderId;
    
    /**
     * @var string $serviceName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("provider_name")
     */
    public $serviceName;
    
    /**
     * @var string $trackNo
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("tracking_number")
     */
    public $trackNo;
    
    /**
     * @var string $trackUrl
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("tracking_url")
     */
    public $trackUrl;
    
    /**
     * @var string $servicePhone
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("support_phone_number")
     */
    public $servicePhone;
    
    
    public static function newInstance(int $orderId, string $serviceName, string $trackNo, ?string $trackUrl=null, ?string $servicePhone=null): self
    {
       $inst = new static;
       $inst->orderId = $orderId;
       $inst->serviceName = $serviceName;
       $inst->trackNo = $trackNo;
       $inst->trackUrl = $trackUrl;
       $inst->servicePhone = $servicePhone;
       return $inst;
    }
    

    public function getMethod(): string
    {
        return '/api/v1/offline-ship/to-in-transit';
    }

    public function getExpectedResponse(): string
    {
        return TaskGroupResponse::class;
    }
}
