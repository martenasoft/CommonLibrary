<?php

namespace MartenaSoft\CommonLibrary\Event;

use MartenaSoft\CommonLibrary\Dto\ActiveSiteDto;
use MartenaSoft\CommonLibrary\Entity\Interfaces\PositionInterface;
use MartenaSoft\CommonLibrary\Manager\AdminManagerMoveInterface;
use Symfony\Contracts\EventDispatcher\Event;

class MoveItemEvent extends Event
{
    public const string NAME = 'moved_item.event';
    public function __construct(
        private PositionInterface $item,
        private ActiveSiteDto $activeSiteDto,
        private bool $isUp,
        private AdminManagerMoveInterface $adminManagerMove,
    ) {
    }

    public function getItem(): PositionInterface
    {
        return $this->item;
    }

    public function getActiveSiteDto(): ActiveSiteDto
    {
        return $this->activeSiteDto;
    }

    public function isUp(): bool
    {
        return $this->isUp;
    }

    public function getAdminManagerMove(): AdminManagerMoveInterface
    {
        return $this->adminManagerMove;
    }

}
