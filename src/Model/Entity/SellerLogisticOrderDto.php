<?php

namespace Simla\Model\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SellerLogisticOrderDto
 *
 * @category SellerLogisticOrderDto
 * @package  Simla\Model\Entity
 */
class SellerLogisticOrderDto
{
    /**
     * @var int $id
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var int $tradeOrderId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("trade_order_id")
     */
    public $tradeOrderId;

    /**
     * @var int $serviceId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("external_provider")
     */
    public $serviceId;
    
    /**
     * @var string $createdAt
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("created_at")
     */
    public $createdAt;

    /**
     * @var LogisticOrderLineDto[] $lines
     *
     * @JMS\Type("array<Simla\Model\Entity\LogisticOrderLineDto>")
     * @JMS\SerializedName("lines")
     */
    public $lines;
}
