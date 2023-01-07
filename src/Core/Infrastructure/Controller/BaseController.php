<?php

namespace App\Core\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class BaseController extends AbstractController
{

    protected function setOkResponse(array $data = [], string $message = "ok")
    {
        $result = ["info" => $data, "message" => $message];
        return (new Response())->setStatusCode(Response::HTTP_OK)->setContent(json_encode($result));
    }

    protected function setCreatedResponse(array $data = [], string $message = "created")
    {
        $result = ["info" => $data, "message" => $message];
        return (new Response())->setStatusCode(Response::HTTP_CREATED)->setContent(json_encode($result));
    }

    protected function setErrorResponse(string $message = "error")
    {
        return (new Response())->setStatusCode(Response::HTTP_BAD_REQUEST)->setContent($message);
    }

    protected function setNotFoundResponse()
    {
        return (new Response())->setStatusCode(Response::HTTP_NOT_FOUND)->setContent("NOT FOUND");
    }
}
