<?php

namespace Simla\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Simla\Model\Entity\ProductStockDto;
use Simla\Model\Response\TaskGroupResponse;

/**
 * Class SetStocksRequest
 *
 * @category SetStocksRequest
 * @package  Simla\Model\Request
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class SetStocksRequest extends BaseRequest implements \Countable
{
    protected const MAX_SIZE = 1000;
   
   
    /**
     * @var ProductStockDto[] $productsStock
     *
     * @JMS\Type("array<Simla\Model\Entity\ProductStockDto>")
     * @JMS\SerializedName("products")
     */
    public $productsStock = [];
    
    
    public function __construct(array $productStock=[])
    {
       parent::__construct();
       foreach($productStock as $ps) $this->addProductStock($ps);
    }
    
    public static function newInstance(ProductStockDto ...$productStock): self
    {
       $inst = new static;
       foreach($productStock as $ps) $inst->addProductStock($ps);
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
    
    
    public function addProductStock(ProductStockDto $prodStock): self
    {
        if($this->isFull()) throw new \LogicException(
            'Collection is full: max size of '.static::MAX_SIZE.' entries reached'
        );
       
        $this->productsStock[] = $prodStock;
        return $this;
    }
    
    public function isFull(): bool
    {
        return !empty(static::MAX_SIZE) && (count($this) >= static::MAX_SIZE);
    }
    
    public function count(): int
    {
        return count($this->productsStock);
    }
    

    public function getMethod(): string
    {
        return '/api/v1/product/update-sku-stock';
    }

    public function getExpectedResponse(): string
    {
        return TaskGroupResponse::class;
    }
}
