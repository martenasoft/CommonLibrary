<?php

namespace MartenaSoft\CommonLibrary\Manager;

use MartenaSoft\CommonLibrary\Dto\ActiveSiteDto;
use MartenaSoft\PageBundle\Entity\Page;

interface AdminManagerMoveInterface
{
    public function up(ActiveSiteDto $activeSiteDto, Page $page): void;

    public function down(ActiveSiteDto $activeSiteDto, Page $page): void;
}