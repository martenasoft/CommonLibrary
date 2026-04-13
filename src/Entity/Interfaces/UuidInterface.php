<?php

namespace MartenaSoft\CommonLibrary\Entity\Interfaces;

use Symfony\Component\Uid\Uuid;

interface UuidInterface
{
    public function getUuid(): ?Uuid;
    public function setUuid(?Uuid $uuid): self;
}