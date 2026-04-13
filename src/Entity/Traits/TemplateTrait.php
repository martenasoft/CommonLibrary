<?php

// src/Common/Entity/Field/NameTrait.php
namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait TemplateTrait
{
    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $template = null;

    public function getTemplate(): ?int
    {
        return $this->template;
    }

    public function setTemplate(?int $template): self
    {
        $this->template = $template;
        return $this;
    }
}

