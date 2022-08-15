<?php

namespace Simla\Model\Response;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Response\Data\SetOrderInTransitResponseData;

/**
 * Class SetOrderInTransitResponse
 *
 * @category SetOrderInTransitResponse
 * @package  Simla\Model\Response
 */
class SetOrderInTransitResponse extends BaseResponse
{
    /**
     * @var SetOrderInTransitResponseData $responseData
     *
     * @JMS\Type("Simla\Model\Response\Data\SetOrderInTransitResponseData")
     * @JMS\SerializedName("data")
     */
    public $responseData;
}
