<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait IsPreviewOnMainTrait
{
    #[ORM\Column]
    private ?bool $isPreviewOnMain = false;

    public function isPreviewOnMain(): ?bool
    {
        return $this->isPreviewOnMain;
    }

    public function setIsPreviewOnMain(bool $isPreviewOnMain): static
    {
        $this->isPreviewOnMain = $isPreviewOnMain;

        return $this;
    }
}
