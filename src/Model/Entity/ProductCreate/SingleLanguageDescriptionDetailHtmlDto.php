<?php

namespace Simla\Model\Entity\ProductCreate;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SingleLanguageDescriptionDetailHtmlDto
 *
 * @category SingleLanguageDescriptionDetailHtmlDto
 * @package  Simla\Model\Entity\ProductCreate
 */
class SingleLanguageDescriptionDetailHtmlDto
{
   /**
     * @var SingleLanguageDescriptionModuleHtmlDto[] $moduleList
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductCreate\SingleLanguageDescriptionModuleHtmlDto>")
     * @JMS\SerializedName("module_list")
     */
    public $moduleList;
    
    /**
     * @var string $version
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("version")
     */
    public $version = '2.0.0';
    
    
    public static function newInstance(SingleLanguageDescriptionModuleHtmlDto ...$modules): self
    {
       $inst = new static;
       $inst->moduleList = $modules;
       return $inst;
    }
}
