<?php

declare(strict_types=1);

namespace App\Wods\Domain\Wod;

use App\Core\Domain\Entity\BaseEntity;

class Wod extends BaseEntity
{
    public function __construct(
        private string $name
    ) {
    }
}
