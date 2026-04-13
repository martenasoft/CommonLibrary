<?php

namespace MartenaSoft\CommonLibrary\Manager;

use MartenaSoft\CommonLibrary\Dto\ActiveSiteDto;
use MartenaSoft\CommonLibrary\Entity\Interfaces\AdminEntityInterface;

interface AdminManagerInterface
{
    public function save(AdminEntityInterface $entity, ActiveSiteDto $activeSiteDto): void;
    public function getMessages(): ?array;


    public function getLoggerPrefix(): string;

}