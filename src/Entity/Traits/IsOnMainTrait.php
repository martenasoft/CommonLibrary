<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IsOnMainTrait
{
    #[ORM\Column]
    private ?bool $isOnMain = false;

    public function isOnMain(): ?bool
    {
        return $this->isOnMain;
    }

    public function setIsOnMain(bool $isOnMain): static
    {
        $this->isOnMain = $isOnMain;

        return $this;
    }
}
