<?php

namespace App\Entity\Admin;

use App\Entity\Category;
use App\Entity\DeliveryTime;
use App\Entity\SousCategory;

class ProposalSearchProperty
{
    /**
     * @var DeliveryTime|null
     */
    private $deliveryTime;
    /**
     * @var Category|null
     */
    private $category;
    /**
     * @var SousCategory|null
     */
    private $subcategory;
    /**
     * @var float|null
     */
    private $max_price;

    /**
     * @return DeliveryTime|null
     */
    public function getDeliveryTime(): ?DeliveryTime
    {
        return $this->deliveryTime;
    }

    /**
     * @param DeliveryTime|null $deliveryTime
     */
    public function setDeliveryTime(?DeliveryTime $deliveryTime): void
    {
        $this->deliveryTime = $deliveryTime;
    }

    /**
     * @return Category|null
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

    /**
     * @param Category|null $category
     */
    public function setCategory(?Category $category): void
    {
        $this->category = $category;
    }

    /**
     * @return float|null
     */
    public function getMaxPrice(): ?float
    {
        return $this->max_price;
    }

    /**
     * @param float|null $max_price
     */
    public function setMaxPrice(?float $max_price): void
    {
        $this->max_price = $max_price;
    }

    /**
     * @return SousCategory|null
     */
    public function getSubcategory(): ?SousCategory
    {
        return $this->subcategory;
    }

    /**
     * @param SousCategory|null $subcategory
     */
    public function setSubcategory(?SousCategory $subcategory): void
    {
        $this->subcategory = $subcategory;
    }



}
