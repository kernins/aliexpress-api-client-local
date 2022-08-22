<?php

namespace Simla\Model\Entity\ProductCreate;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SingleLanguageDescriptionModuleHtmlDto
 *
 * @category SingleLanguageDescriptionModuleHtmlDto
 * @package  Simla\Model\Entity\ProductCreate
 */
class SingleLanguageDescriptionModuleHtmlDto
{
   /**
     * @var SingleLanguageDescriptionModuleContentDto $content
     *
     * @JMS\Type("Simla\Model\Entity\ProductCreate\SingleLanguageDescriptionModuleContentDto")
     * @JMS\SerializedName("html")
     */
    public $content;
    
    /**
     * @var string $type
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type = 'html';
    
    
    public static function newInstance(string $content): self
    {
       $inst = new static;
       $inst->content = SingleLanguageDescriptionModuleContentDto::newInstance($content);
       return $inst;
    }
}
