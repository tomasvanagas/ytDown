<?php
/**
 * nextcloud - ytDownloader
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the LICENSE file.
 *
 * @author Athlon1600 <https://github.com/Athlon1600>
 * @copyright 2020 Athlon1600
 */

namespace OCA\YtDownloader\YouTube;

class Utils
{
    public static function extractVideoId($str)
    {
        // TODO
    }

    public static function arrayGet($array, $key, $default = null)
    {
        foreach (explode('.', $key) as $segment) {

            if (is_array($array) && array_key_exists($segment, $array)) {
                $array = $array[$segment];
            } else {
                $array = $default;
                break;
            }
        }

        return $array;
    }
}