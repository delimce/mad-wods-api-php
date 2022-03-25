<?php

declare(strict_types=1);

namespace App\Wods\Infrastructure\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\Core\Infrastructure\Controller\BaseController;

class MovementController extends BaseController
{
    public function list(Request $request)
    {
        $response = $this->setOkResponse(["total"=>123]);

        $response->send();
    }
}
