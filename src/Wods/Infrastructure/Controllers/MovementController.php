<?php

declare(strict_types=1);

namespace App\Wods\Infrastructure\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\Core\Infrastructure\Controller\BaseController;
use App\Wods\Application\Movement\Retrieve\MovementRetriever;

class MovementController extends BaseController
{
    public function __construct(
        private MovementRetriever $movementRetriever
    ) {
        
    }

    public function list(Request $request)
    {
        $this->setOkResponse($this->movementRetriever->list())->send();
    }
}
