<?php

namespace MartenaSoft\CommonLibrary\Entity\Interfaces;

interface TemplateInterface
{
    public function getTemplate(): ?int;

    public function setTemplate(?int $template): self;
}