<?php

declare(strict_types=1);

namespace App\Wods\Infrastructure\Repositories;

use App\Wods\Domain\Movement\Movement;
use App\Wods\Domain\Movement\MovementRepository;
use App\Core\Infrastructure\Repository\DoctrineBaseRepository;

class DoctrineMovementRepository extends DoctrineBaseRepository implements MovementRepository
{
    /**
     * @return string
     */
    protected static function entityClass(): string
    {
        return Movement::class;
    }

    /**
     * @param int $id
     * @return Movement|null
     */
    public function findById(int $id): ?Movement
    {
        return $this->objectRepository->find($id);
    }

    public function list():array
    {
        return $this->objectRepository->findAll();
    }
}
