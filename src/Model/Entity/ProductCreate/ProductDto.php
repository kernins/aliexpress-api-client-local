<?php

namespace Simla\Model\Entity\ProductCreate;

use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ProductDto
 *
 * @category ProductDto
 * @package  Simla\Model\Entity\ProductCreate
 */
class ProductDto
{
    /**
     * @var int $categoryId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("aliexpress_category_id")
     */
    public $categoryId;
    
    /**
     * @var int $groupId   Currently ignored by AE
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("group_id")
     */
    public $groupId;
    
    /**
     * @var string $brandName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("brand_name")
     */
    public $brandName;
    
    
    /**
     * @var string $lang
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("language")
     */
    public $lang;
    
    /**
     * @var SingleLanguageTitleDto[] $title
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductCreate\SingleLanguageTitleDto>")
     * @JMS\SerializedName("multi_language_subject_list")
     */
    public $title;
    
    /**
     * @var SingleLanguageDescriptionDto[] $description
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductCreate\SingleLanguageDescriptionDto>")
     * @JMS\SerializedName("multi_language_description_list")
     */
    public $description;
    
    /**
     * @var string[] $images
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("main_image_urls_list")
     */
    public $images;
    
    
    /**
     * @var AttributeDto[] $attributes
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductCreate\AttributeDto>")
     * @JMS\SerializedName("attribute_list")
     */
    public $attributes;
    
    /**
     * @var SkuInfoDto[] $skuInfos
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductCreate\SkuInfoDto>")
     * @JMS\SerializedName("sku_info_list")
     */
    public $skuInfos;
    
    
    /**
     * @var int $pkgLengthCm
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("package_length")
     */
    public $pkgLengthCm;
    
    /**
     * @var int $pkgWidthCm
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("package_width")
     */
    public $pkgWidthCm;
    
    /**
     * @var int $pkgHeightCm
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("package_height")
     */
    public $pkgHeightCm;
    
    /**
     * @var float $pkgWeightKg
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("weight")
     */
    public $pkgWeightKg;
    
    /**
     * @var int $unit
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("product_unit")
     * @Assert\Choice(choices=Simla\Model\Enum\ProductUnits::UNITS_LIST, multiple=false)
     */
    public $unit;
    
    
    /**
     * @var string $inventoryDeductionStrategy
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("inventory_deduction_strategy")
     * @Assert\Choice(choices=Simla\Model\Enum\InventoryDeductionStrategies::STRATEGIES_LIST, multiple=false)
     */
    public $inventoryDeductionStrategy;
    
    /**
     * @var int $freightTemplateId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("freight_template_id")
     */
    public $freightTemplateId;
    
    /**
     * @var int $svcPolicyId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("service_policy_id")
     */
    public $svcPolicyId;
    
    /**
     * @var int $shippingLeadDays
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("shipping_lead_time")
     */
    public $shippingLeadDays;
    
    
    /**
     * @var int $sizeChartId
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("size_chart_id")
     */
    public $sizeChartId;
    
    /**
     * @var bool $isLot
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("package_type")
     */
    public $isLot;
    
    /**
     * @var int $lotQtty
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("lot_num")
     */
    public $lotQtty;
    
    
    /**
     * @var string $gtin
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("gtin")
     */
    public $gtin;
    
    /**
     * @var string[] $okpd2Codes
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("okpd2_codes")
     */
    public $okpd2Codes;
    
    /**
     * @var string[] $tnvedCodes
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("tnved_codes")
     */
    public $tnvedCodes;
    
    

    public static function newInstance(SingleLanguageTitleDto $title, SingleLanguageDescriptionDto $descr, string $brandName, int $categoryId, ?int $groupId=null): self
    {
       $inst = new static;
       $inst->lang = $title->lang;
       $inst->addTitle($title)->addDescription($descr);
       $inst->brandName = $brandName;
       $inst->categoryId = $categoryId;
       if($groupId !== null) $inst->groupId = $groupId;
       
       return $inst;
    }
    
    
    public function addTitle(SingleLanguageTitleDto $title): self
    {
       if(empty($this->title)) $this->title = [];
       $this->title[] = $title;
       return $this;
    }
    
    public function addDescription(SingleLanguageDescriptionDto $descr): self
    {
       if(empty($this->description)) $this->description = [];
       $this->description[] = $descr;
       return $this;
    }
    
    public function addAttribute(AttributeDto $attr): self
    {
       if(empty($this->attributes)) $this->attributes = [];
       $this->attributes[] = $attr;
       return $this;
    }
    
    public function addSkuInfo(SkuInfoDto $skuInfo): self
    {
       if(empty($this->skuInfos)) $this->skuInfos = [];
       $this->skuInfos[] = $skuInfo;
       return $this;
    }
 
    
    public function setMainImages(array $images): self
    {
       if(($cnt=count($images)) > 6) throw new \OutOfRangeException(
          'AE allows 6 images at most, '.$cnt.' given'
       );
       
       $this->images = $images;
       return $this;
    }
    
    public function setPackageInfo(int $lengthCm, int $widthCm, int $heightCm, float $weightKg): self
    {
       if($lengthCm <= 0) throw new \UnexpectedValueException('Package length must be >= 1cm');
       if($widthCm <= 0) throw new \UnexpectedValueException('Package width must be >= 1cm');
       if($heightCm <= 0) throw new \UnexpectedValueException('Package height must be >= 1cm');
       if($weightKg <= 0) throw new \UnexpectedValueException('Weight must be >= 0.01');
       
       $this->pkgLengthCm = $lengthCm;
       $this->pkgWidthCm = $widthCm;
       $this->pkgHeightCm = $heightCm;
       $this->pkgWeightKg = max(0.01, round($weightKg, 2));
       return $this;
    }
    
    public function setSellingParams(int $sellingUnit, string $invDeductStrategy, int $freightTplId, int $svcPolicyId, int $shipLeadDays): self
    {
       $this->unit = $sellingUnit;
       $this->inventoryDeductionStrategy = $invDeductStrategy;
       $this->freightTemplateId = $freightTplId;
       $this->svcPolicyId = $svcPolicyId;
       $this->shippingLeadDays = $shipLeadDays;
       return $this;
    }
}
