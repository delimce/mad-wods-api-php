<?php

namespace App\Wods\Domain\Wod;

use App\Wods\Domain\Wod\Wod;

interface WodRepository
{
    public function getByName(string $name): Wod;
    public function list(): array;
}
