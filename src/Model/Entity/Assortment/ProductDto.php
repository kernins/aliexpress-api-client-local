<?php

namespace Simla\Model\Entity\Assortment;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ProductDto
 *
 * @category ProductDto
 * @package  Simla\Model\Entity\Assortment
 */
class ProductDto
{
    /**
     * @var int $id
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;
    
    /**
     * @var int $categoryId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("category_id")
     */
    public $categoryId;
    
    /**
     * @var int $freightTplId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("freight_template_id")
     */
    public $freightTplId;
    
    /**
     * @var int[] $groupIds
     *
     * @JMS\Type("array<int>")
     * @JMS\SerializedName("group_ids")
     */
    public $groupIds;
    
    /**
     * @var SkuInfoDto[] $skuInfos
     *
     * @JMS\Type("array<Simla\Model\Entity\Assortment\SkuInfoDto>")
     * @JMS\SerializedName("sku")
     */
    public $skuInfos;
    
    
    public function getFirstSku(): SkuInfoDto
    {
       return reset($this->skuInfos);
    }
    
    public function getSkuCode(): string
    {
       return $this->getFirstSku()->skuCode;
    }
}
