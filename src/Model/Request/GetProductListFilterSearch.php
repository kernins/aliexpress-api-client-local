<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetProductListFilterSearch
 *
 * @category GetProductListRequest
 * @package  Simla\Model\Request
 */
class GetProductListFilterSearch
{
   public const FLD_ID        = 'PRODUCT_ID';
   public const FLD_SKUCODE   = 'SKU_SELLER_SKU';
   public const FLD_NAME      = 'PRODUCT_TITLE';
   
   /**
    * @var string $field
    *
    * @JMS\Type("string")
    * @JMS\SerializedName("content_type")
    */
   public $field;
   
   /**
    * @var string[] $values
    *
    * @JMS\Type("array<string>")
    * @JMS\SerializedName("content_values")
    */
   public $values;
   
   
   public static function newInstance(string $field, string ...$values): self
      {
         if(!in_array($field, [self::FLD_ID, self::FLD_SKUCODE, self::FLD_NAME]))
            throw new \InvalidArgumentException('Invalid search field given: '.$field);
         if(empty($values)) throw new \UnexpectedValueException('No field values to search for given');
         
         $inst = new static;
         $inst->field = $field;
         $inst->values = $values;
         return $inst;
      }
}
