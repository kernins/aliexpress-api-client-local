<?php

namespace Simla\Model\Entity\ProductCreate;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SingleLanguageTitleDto
 *
 * @category SingleLanguageTitleDto
 * @package  Simla\Model\Entity\ProductCreate
 */
class SingleLanguageTitleDto
{
    /**
     * @var string $lang
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("language")
     */
    public $lang;
    
    /**
     * @var string $title
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("subject")
     */
    public $title;
    
    
    public static function newInstance(string $lang, string $title): self
    {
       $inst = new static;
       $inst->lang = $lang;
       $inst->title = $title;
       return $inst;
    }
}
