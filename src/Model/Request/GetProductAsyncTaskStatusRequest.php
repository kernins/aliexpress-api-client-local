<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Response\GetProductAsyncTaskStatusResponse;

/**
 * Class GetProductAsyncTaskStatusRequest
 *
 * @category GetProductAsyncTaskStatusRequest
 * @package  Simla\Model\Request
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class GetProductAsyncTaskStatusRequest extends BaseRequest
{
    /**
     * @var int $groupId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("group_id")
     */
    public $groupId;
    
    
    public static function newInstance(int $groupId): self
    {
       $inst = new static;
       $inst->groupId = $groupId;
       return $inst;
    }
    

    public function getMethod(): string
    {
        return '/api/v1/tasks';
    }

    public function getExpectedResponse(): string
    {
        return GetProductAsyncTaskStatusResponse::class;
    }
    
    public function getHTTPMethod(): string
    {
       return 'GET';
    }
}
