<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IsDeletedTrait
{
    #[ORM\Column(options: ['default' => 'false'])]
    private ?bool $isDeleted = false;

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(?bool $isDeleted): IsDeletedTrait
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }

}
