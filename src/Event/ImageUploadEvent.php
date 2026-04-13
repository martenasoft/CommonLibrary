<?php

namespace MartenaSoft\CommonLibrary\Event;

use MartenaSoft\CommonLibrary\Dto\ActiveSiteDto;
use MartenaSoft\CommonLibrary\Entity\Interfaces\UuidInterface;
use Symfony\Contracts\EventDispatcher\Event;

class ImageUploadEvent extends Event
{
    public const string NAME = "image.upload";

    public function __construct(
        private array $files,
        private ActiveSiteDto $activeSiteDto,
        private string $uuid,
    )
    {
    }
    public function getFiles(): array
    {
        return $this->files;
    }

    public function getActiveSiteDto(): ActiveSiteDto
    {
        return $this->activeSiteDto;
    }
}