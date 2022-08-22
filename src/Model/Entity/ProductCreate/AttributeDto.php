<?php

namespace Simla\Model\Entity\ProductCreate;

use JMS\Serializer\Annotation as JMS;

/**
 * Class AttributeDto
 *
 * @category AttributeDto
 * @package  Simla\Model\Entity\ProductCreate
 */
class AttributeDto
{
   /**
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("attribute_name")
     */
    public $name;
    
    /**
     * @var int $nameId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("attribute_name_id")
     */
    public $nameId;
    
    /**
     * @var string $value
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("attribute_value")
     */
    public $value;
    
    /**
     * @var int $valueId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("attribute_value_id")
     */
    public $valueId;
    
    
    public static function newInstanceCustom(string $name, string $value): self
    {
       $inst = new static;
       $inst->nameId = -1;
       $inst->name = $name;
       $inst->value = $value;
       return $inst;
    }
    
    public static function newInstance(int $nameId, ?string $value, ?int $valueId=null): self
    {
       $inst = new static;
       $inst->nameId = $nameId;
       if($value !== null) $inst->value = $value;
       if($valueId !== null) $inst->valueId = $valueId;
       return $inst;
    }
}
