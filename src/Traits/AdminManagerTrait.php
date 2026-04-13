<?php

namespace MartenaSoft\CommonLibrary\Traits;

use Doctrine\ORM\EntityManagerInterface;
use MartenaSoft\CommonLibrary\Entity\Interfaces\PositionInterface;

trait AdminManagerTrait
{
    public function moveItem(
        array $items,
        PositionInterface $item,
        EntityManagerInterface $entityManager,
        bool $isUp
    ): void {
        $ln = count($items);

        if (empty($items)) {
            $item->setPosition(1);
            $this->entityManager->flush();
            return;
        }

        foreach ($items as $i => $item_) {
            if ($item_->getUuid()->toString() === $item->getUuid()->toString()) {
                $index = ($isUp? $i - 1 : $i + 1);
                if (!isset($items[$index])) {
                    $index = ($isUp ? $ln -1  : 0);
                }

                if (!isset($items[$index])) {
                    continue;
                }

                $position = $items[$index]->getPosition();
                $items[$index]->setPosition($item->getPosition());
                $item->setPosition($position);
                $entityManager->flush();
                return;
            }
        }
    }
}