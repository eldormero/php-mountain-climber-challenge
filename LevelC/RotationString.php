<?php

namespace Hackathon\LevelC;

class RotationString
{
    /**
     * @TODO ! BAM
     *
     * @param $s1
     * @param $s2
     *
     * @return bool|int
     */
    public static function isRotation($s1, $s2)
    {
        /** @TODO */
        $i = 0;
        while ($i < strlen($s1) && $s1 != $s2) {
            $s1 = substr($s1, 1) . $s1[0];
            $i++;
        }
        return $i != strlen($s1) ? true : false;
    }

    public static function isSubString($s1, $s2)
    {
        $pos = strpos($s1, $s2);

        return $pos;
    }
}
