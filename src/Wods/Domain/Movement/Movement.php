<?php

declare(strict_types=1);

namespace App\Wods\Domain\Movement;

use App\Core\Domain\Entity\BaseEntity;

class Movement extends BaseEntity
{
    function __construct(
        private string $name
    ) {
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


 
}
