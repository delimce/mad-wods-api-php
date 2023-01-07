<?php

declare(strict_types=1);

namespace App\Wods\Domain\Movement;

use App\Wods\Domain\Movement\Movement;

interface MovementRepository
{
    /*     public function findByParams(array $params): array; */
    public function list(): array;
    public function findById(int $id): ?Movement;
}
