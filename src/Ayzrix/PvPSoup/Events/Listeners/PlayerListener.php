<?php

/***
 *      _____        _____   _____
 *     |  __ \      |  __ \ / ____|
 *     | |__) |_   _| |__) | (___   ___  _   _ _ __
 *     |  ___/\ \ / /  ___/ \___ \ / _ \| | | | '_ \
 *     | |     \ V /| |     ____) | (_) | |_| | |_) |
 *     |_|      \_/ |_|    |_____/ \___/ \__,_| .__/
 *                                            | |
 *                                            |_|
 */

namespace Ayzrix\PvPSoup\Events\Listeners;

use Ayzrix\PvPSoup\Utils\Utils;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;

class PlayerListener implements Listener {

    public function onPlayerInteract(PlayerInteractEvent $event) {
        if (!$event->isCancelled()) {
            $player = $event->getPlayer();
            $item = $player->getInventory()->getItemInHand();
            if (isset(Utils::getIntoConfig("items")[$item->getId() . ":" . $item->getDamage()])) {
                $values = Utils::getIntoConfig("items")[$item->getId() . ":" . $item->getDamage()];
                $heal = (int)$values["heal"];
                $m_type = (string)$values["m_type"];
                $message = (string)$values["message"];

                if ($player->getHealth() >= $player->getMaxHealth()) return;
                if ($player->getHealth() + $heal >= $player->getMaxHealth()) {
                    $player->setHealth($player->getMaxHealth());
                } else $player->setHealth($player->getHealth() + $heal);

                switch (strtolower($m_type)) {
                    case "tip":
                        $player->sendTip($message);
                        break;
                    case "popup":
                        $player->sendPopup($message);
                        break;
                    case "message":
                        $player->sendMessage($message);
                        break;
                    case "title":
                        $player->sendTitle($message);
                        break;
                }
                $item->setCount($item->getCount() -1);
                $player->getInventory()->setItemInHand($item);
            }
        }
    }
}