<?php

namespace MartenaSoft\CommonLibrary\Entity\Interfaces;

interface PositionInterface
{
    public function getPosition(): ?int;

    public function setPosition(int $position): static;
}