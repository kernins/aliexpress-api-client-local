<?php

namespace Simla\Model\Entity\ProductCreate;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SingleLanguageDescriptionModuleContentDto
 *
 * @category SingleLanguageDescriptionModuleContentDto
 * @package  Simla\Model\Entity\ProductCreate
 */
class SingleLanguageDescriptionModuleContentDto
{
   /**
     * @var string $content
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("content")
     */
    public $content;
    
    
    public static function newInstance(string $content): self
    {
       $inst = new static;
       $inst->content = $content;
       return $inst;
    }
}
