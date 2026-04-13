<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits\ForType;

trait FileTrait
{
    private mixed $file = null;
    private array $fileIsMain = [];

    public function getFile(): mixed
    {
        return $this->file;
    }

    public function setFile(mixed $file): self
    {
        $this->file = $file;
        return $this;
    }

    public function getFileIsMain(): array
    {
        return $this->fileIsMain;
    }

    public function setFileIsMain(array $fileIsMain): FileTrait
    {
        $this->fileIsMain = $fileIsMain;
        return $this;
    }
}
