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

namespace Ayzrix\PvPSoup;

use Ayzrix\PvPSoup\Events\Listeners\PlayerListener;
use Ayzrix\PvPSoup\Utils\Utils;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase {
    use SingletonTrait;

    public function onLoad() {
        self::setInstance($this);
    }

    public function onEnable() {
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents(new PlayerListener($this), $this);
        Utils::loadConfig();
    }
}