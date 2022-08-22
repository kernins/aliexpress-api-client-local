<?php

namespace Simla\Model\Entity\ProductCreate;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SingleLanguageDescriptionDto
 *
 * @category SingleLanguageDescriptionDto
 * @package  Simla\Model\Entity\ProductCreate
 */
class SingleLanguageDescriptionDto
{
    /**
     * @var string $lang
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("language")
     */
    public $lang;
    
    /**
     * @var SingleLanguageDescriptionDetailHtmlDto $detailMob
     *
     * @JMS\Type("Simla\Model\Entity\ProductCreate\SingleLanguageDescriptionDetailHtmlDto")
     * @JMS\SerializedName("mobile_detail")
     */
    public $detailMob;
    
    /**
     * @var SingleLanguageDescriptionDetailHtmlDto $detailWeb
     *
     * @JMS\Type("Simla\Model\Entity\ProductCreate\SingleLanguageDescriptionDetailHtmlDto")
     * @JMS\SerializedName("web_detail")
     */
    public $detailWeb;
    
    
    public static function newInstanceHtml(string $lang, string $detailWeb, ?string $detailMob=null): self
    {
       $inst = new static;
       $inst->lang = $lang;
       $inst->detailWeb = SingleLanguageDescriptionDetailHtmlDto::newInstance(
          SingleLanguageDescriptionModuleHtmlDto::newInstance($detailWeb)
       );
       $inst->detailMob = SingleLanguageDescriptionDetailHtmlDto::newInstance(
          SingleLanguageDescriptionModuleHtmlDto::newInstance($detailMob ?? $detailWeb)
       );
       return $inst;
    }
}
