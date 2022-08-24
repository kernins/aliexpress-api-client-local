<?php

namespace Simla\Model\Response\Data;
use Simla\Model\Response\ErrorResponseBody, Simla\Model\Enum;

use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;

class GetProductAsyncTaskStatusResponseData
{
    /**
     * @var int $taskId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $taskId;
    
    /**
     * @var int $groupId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("group_id")
     */
    public $groupId;
    
    /**
     * @var int $action
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("action")
     * @Assert\Choice(choices=Simla\Model\Enum\ProductAsyncTaskActions::ACTIONS_LIST, multiple=false)
     */
    public $action;
    
    /**
     * @var int $status
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("status")
     * @Assert\Choice(choices=Simla\Model\Enum\ProductAsyncTaskStatuses::STATUSES_LIST, multiple=false)
     */
    public $status;
    
    /**
     * @var int $productId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("product_id")
     */
    public $productId;
    
    /**
     * @var string[] $skuCodes
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("sku_codes")
     */
    public $skuCodes;
    
    /**
     * @var ?ErrorResponseBody $error
     *
     * @JMS\Type("Simla\Model\Response\ErrorResponseBody")
     * @JMS\SerializedName("error")
     */
    public $error;
    
    /**
     * @var string[] $warnings
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("warnings")
     */
    public $warnings;
    
    /**
     * @var string $createdAt
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("created_at")
     */
    public $createdAt;
    
    /**
     * @var string $updatedAt
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("updated_at")
     */
    public $updatedAt;
    
    
    public function isSuccessful(): bool
    {
       return $this->status == Enum\ProductAsyncTaskStatuses::SUCCESSFUL;
    }
    
    public function isFailed(): bool
    {
       return $this->status == Enum\ProductAsyncTaskStatuses::FAILED;
    }
    
    public function isCompleted(): bool
    {
       return $this->isSuccessful() || $this->isFailed();
    }
}
