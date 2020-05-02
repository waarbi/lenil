<?php

namespace App\Entity\Admin;

use App\Entity\Category;
use App\Entity\DeliveryTime;
use App\Entity\SousCategory;

class UserSearchProperty
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }


}
