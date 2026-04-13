<?php

namespace MartenaSoft\CommonLibrary\Traits;

use Doctrine\ORM\EntityManagerInterface;
use MartenaSoft\CommonLibrary\Dto\ActiveSiteDto;
use MartenaSoft\CommonLibrary\Entity\Interfaces\PositionInterface;
use MartenaSoft\PageBundle\Entity\Page;
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