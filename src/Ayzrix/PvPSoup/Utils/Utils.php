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

namespace Ayzrix\PvPSoup\Utils;

use Ayzrix\PvPSoup\Main;

class Utils {
    
    public static $config;

    public static function loadConfig() {
        self::$config = Main::getInstance()->getConfig()->getAll();
    }

    /**
     * @param string $value
     * @return mixed
     */
    public static function getIntoConfig(string $value) {
        return self::$config[$value];
    }
}