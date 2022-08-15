<?php

namespace Simla\Model\Response\Data;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\SellerLogisticOrderDto;


class SetOrderInTransitResponseData
{
    /**
     * @var SellerLogisticOrderDto[] $createdOrders
     *
     * @JMS\Type("array<Simla\Model\Entity\SellerLogisticOrderDto>")
     * @JMS\SerializedName("created_orders")
     */
    public $createdOrders;
}
