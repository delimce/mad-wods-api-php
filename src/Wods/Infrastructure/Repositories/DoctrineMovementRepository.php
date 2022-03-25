<?php

declare(strict_types=1);

namespace App\Wods\Infrastructure\Repositories;

use App\Core\Infrastructure\Repository\DoctrineBaseRepository;
use App\Wods\Domain\Entity\Movement;
use App\Wods\Domain\Repository\MovementRepository;

class DoctrineMovementRepository extends DoctrineBaseRepository implements MovementRepository
{
    protected static function entityClass(): string
    {
        return Movement::class;
    }

    public function findById(int $id): ?Movement
    {
        return $this->objectRepository->find($id);
    }
}
