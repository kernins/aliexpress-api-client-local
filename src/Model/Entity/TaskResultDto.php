<?php

namespace Simla\Model\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class TaskResultDto
 *
 * @category TaskResultDto
 * @package  Simla\Model\Entity
 */
class TaskResultDto
{
    /**
     * @var bool $success
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("ok")
     */
    public $success;

    /**
     * @var int $taskId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("task_id")
     */
    public $taskId;
    
    /**
     * @var array $errors
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("errors")
     */
    public $errors;
}
