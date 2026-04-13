<?php

namespace MartenaSoft\CommonLibrary\Dto;

class ActiveSiteDto
{
    public int $id;
    public string $name;
    public string $host;
    public string|int $status;
    public array $activeByIps = [];
    public string $templatePath = '';
    public string $timeZone = '';
    public string $timeFormat= '';

    public array $languages = [];
    public string $defaultLanguage = '';

    public array $routes = [];
    public int $previewOnMainLimit;
}
