<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait ParentsArrayTrait
{
    #[ORM\Column(nullable: true)]
    private ?array $parents = null;
    public function getParents(): ?array
    {
        return $this->parents;
    }

    public function setParents(?array $parents): static
    {
        $this->parents = $parents;

        return $this;
    }
}