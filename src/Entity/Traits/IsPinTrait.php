<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IsPinTrait
{
    #[ORM\Column]
    private ?bool $isPin = false;

    public function getIsPin(): ?bool
    {
        return $this->isPin;
    }

    public function setIsPin(?bool $isPin): self
    {
        $this->isPin = $isPin;
        return $this;
    }
}
