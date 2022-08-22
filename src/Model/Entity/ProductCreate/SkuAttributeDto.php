<?php

namespace Simla\Model\Entity\ProductCreate;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SkuAttributeDto
 *
 * @category SkuAttributeDto
 * @package  Simla\Model\Entity\ProductCreate
 */
class SkuAttributeDto
{
   /**
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sku_attribute_name")
     */
    public $name;
    
    /**
     * @var int $nameId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("sku_attribute_name_id")
     */
    public $nameId;
    
    /**
     * @var string $value
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sku_attribute_value")
     */
    public $value;
    
    /**
     * @var int $valueId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("sku_attribute_value_id")
     */
    public $valueId;
    
    
    public static function newInstance(string $name, string $value): self
    {
       $inst = new static;
       $inst->name = $name;
       $inst->value = $value;
       return $inst;
    }
    
    public static function newInstanceExisting(int $nameId, int $valueId): self
    {
       $inst = new static;
       $inst->nameId = $nameId;
       $inst->valueId = $valueId;
       return $inst;
    }
}
