<?php

declare(strict_types=1);

namespace App\Wods\Application\Movement\Retrieve;

use App\Wods\Domain\Movement\MovementRepository;

class MovementRetriever
{

    function __construct(
        private MovementRepository $movementRepository
    ) {
    }

    /**
     * @return array
     */
    public function list(): array
    {
        return array_map(function ($movement) {
            return [
                'id' => $movement->getId(),
                'name' => $movement->getName(),
                'created_at' => $movement->getCreatedAt()->format('Y-m-d H:i:s'),
            ];
        }, $this->movementRepository->list());
    }
}
