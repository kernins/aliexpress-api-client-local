<?php

namespace Simla\Model\Response;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\TaskResultDto;

/**
 * Class TaskGroupResponse
 *
 * @category TaskGroupResponse
 * @package  Simla\Model\Response
 */
class TaskGroupResponse extends BaseResponse
{
    /**
     * @var int $groupId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("group_id")
     */
    public $groupId;
    
    /**
     * @var TaskResultDto[] $results
     *
     * @JMS\Type("array<Simla\Model\Entity\TaskResultDto>")
     * @JMS\SerializedName("results")
     */
    public $results;
    
    
    public function isAllSuccedeed(): bool
    {
       foreach($this->results as $r)
          {
            if(!$r->success) return false;
          }
       return empty($this->results)? false : true;
    }
    
    public function getAllErrors(): array
    {
       $errs = [];
       foreach($this->results as $r)
          {
            if($r->success) continue;
            $errs = array_merge($errs, $r->errors);
          }
       return $errs;
    }
}
