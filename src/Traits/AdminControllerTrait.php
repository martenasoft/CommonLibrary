<?php

namespace MartenaSoft\CommonLibrary\Traits;

use Symfony\Component\HttpFoundation\Request;

trait AdminControllerTrait
{
    protected function setReturnType(Request $request, array $data, string $key = 'return_to'): bool
    {
        if (!$request->hasSession()) {
            return false;
        }
        $request->getSession()->set($key, $data);
        return true;
    }

    protected function getReturnType(Request $request, string $key = 'return_to'): array|null
    {
        if (!$request->hasSession()) {
            return null;
        }
        return $request->getSession()->get($key);
    }

    protected function removeReturnType(Request $request, string $key = 'return_to'): bool
    {
        if (!$request->hasSession()) {
            return false;
        }
        $request->getSession()->remove($key);
        return true;
    }


}