<?php

namespace Simla\Model\Response;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Response\Data\GetProductAsyncTaskStatusResponseData;

/**
 * Class GetProductAsyncTaskStatusResponse
 *
 * @category GetProductAsyncTaskStatusResponse
 * @package  Simla\Model\Response
 */
class GetProductAsyncTaskStatusResponse extends BaseResponse
{
    /**
     * @var GetProductAsyncTaskStatusResponseData[] $taskStatuses
     *
     * @JMS\Type("array<Simla\Model\Response\Data\GetProductAsyncTaskStatusResponseData>")
     * @JMS\SerializedName("data")
     */
    public $taskStatuses;
}
