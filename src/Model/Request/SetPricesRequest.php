<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\ProductPriceDto;
use Simla\Model\Response\TaskGroupResponse;

/**
 * Class SetPricesRequest
 *
 * @category SetPricesRequest
 * @package  Simla\Model\Request
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class SetPricesRequest extends BaseRequest implements \Countable
{
    protected const MAX_SIZE = 1000;
    
   
    /**
     * @var ProductPriceDto[] $productsPrices
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductPriceDto>")
     * @JMS\SerializedName("products")
     */
    public $productsPrices = [];
    
    
    
    public function __construct(array $productsPrices=[])
    {
       parent::__construct();
       foreach($productsPrices as $pp) $this->addProductPrice($pp);
    }
    
    public static function newInstance(ProductPriceDto ...$productsPrices): self
    {
       $inst = new static;
       foreach($productsPrices as $pp) $inst->addProductPrice($pp);
       return $inst;
    }
    
    public static function instancesForEntries(array $entries): array
    {
       $instances = [];
       foreach(empty(static::MAX_SIZE)? [$entries] : array_chunk($entries, static::MAX_SIZE) as $chunk)
         {
            $instances[] = new static($chunk);
         }
       return $instances;
    }
    
    
    public function addProductPrice(ProductPriceDto $prodPrice): self
    {
        if($this->isFull()) throw new \LogicException(
            'Collection is full: max size of '.static::MAX_SIZE.' entries reached'
        );
        
        $this->productsPrices[] = $prodPrice;
        return $this;
    }
    
    public function isFull(): bool
    {
        return !empty(static::MAX_SIZE) && (count($this) >= static::MAX_SIZE);
    }
    
    public function count(): int
    {
        return count($this->productsPrices);
    }
    

    public function getMethod(): string
    {
        return '/api/v1/product/update-sku-price';
    }

    public function getExpectedResponse(): string
    {
        return TaskGroupResponse::class;
    }
}
