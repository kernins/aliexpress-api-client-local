<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetProductListFilter
 *
 * @category GetProductListRequest
 * @package  Simla\Model\Request
 */
class GetProductListFilter
{
   public const ST_ONLINE  = 'ONLINE';
   public const ST_OFFLINE = 'OFFLINE';
   
   
   /**
    * @var string $status
    *
    * @JMS\Type("string")
    * @JMS\SerializedName("status")
    */
   public $status = null;
   
   /**
    * @var GetProductListFilterSearch $search
    *
    * @JMS\Type("Simla\Model\Request\GetProductListFilterSearch")
    * @JMS\SerializedName("search_content")
    */
   public $search = null;
   
   
   
   public static function newInstance(string $status=null, GetProductListFilterSearch $search=null): self
      {
         $inst = new static;
         
         if($status !== null)
            {
               if(!in_array($status, [self::ST_ONLINE, self::ST_OFFLINE]))
                  throw new \InvalidArgumentException('Invalid status: '.$status);
               $inst->status = $status;
            }
         $inst->search = $search;
         
         return $inst;
      }
}
