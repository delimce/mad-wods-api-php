<?php

declare(strict_types=1);

namespace App\Wods\Application\Movement\Retrieve;

use App\Wods\Infrastructure\Repositories\DoctrineMovementRepository;

class MovementRetriever
{

    function __construct(
        private DoctrineMovementRepository $movementRepository
    ) {
    }

    /**
     * @return array
     */
    public function list(): array
    {
        return $this->movementRepository->list();
    }
}
