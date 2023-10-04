<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait ExceptionTrait
{
    public function apiException($request, $e)
    {
        if ($this->isModel($e)) {
            return $this->ModelResponce($e);
        }
        if ($this->isHttp($e)) {
            return $this->HttpResponce($e);
        }

        return parent::render($request, $exception);
    }

    protected function isModel($e)
    {
        return $e instanceof ModelNotFoundException;
    }

    protected function isHttp($e)
    {
        return $e instanceof NotFoundHttpException;
    }

    protected function ModelResponce($e)
    {
        return response()->json(['errors' => 'Model not found!'], 404);
    }

    protected function HttpResponce($e)
    {
        return response()->json(['errors' => 'Incorrect route!'], 404);
    }
}
