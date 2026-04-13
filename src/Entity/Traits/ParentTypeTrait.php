<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait ParentTypeTrait
{
    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $parentType = null;

    public function getParentType(): ?int
    {
        return $this->parentType;
    }

    public function setParentType(?int $parentType): self
    {
        $this->parentType = $parentType;
        return $this;
    }
}
