<?php


namespace Ling\CyclicChainDetector\Helper;

use Ling\Bat\CurrentProcessTool;
use Ling\CyclicChainDetector\CyclicChainDetectorUtil;
use Ling\CyclicChainDetector\Link;

/**
 * The CyclicChainDetectorHelper class.
 */
class CyclicChainDetectorHelper
{


    /**
     * Prints a human readable version of the links contained in the given chain.
     *
     * @param CyclicChainDetectorUtil $util
     */
    public static function debugLinks(CyclicChainDetectorUtil $util)
    {


        $br = (true === CurrentProcessTool::isCli()) ? PHP_EOL : '<br>';

        echo "----" . $br;


        $links = $util->getLinks();
        foreach ($links as $link) {

            echo $link->start;
            echo " -> ";
            echo $link->end;

            while (null !== ($child = $link->getChild())) {
                $link = $child;
                echo " -> ";
                echo $link->end;
            }

            echo $br;
        }
    }


    /**
     * Returns all link's members, ordered by decreasing age (i.e. oldest first).
     *
     * @param Link $link
     * @return array
     */
    public static function linkAsArray(Link $link): array
    {
        $ret = [];
        $ret[] = $link->start;
        $ret[] = $link->end;
        while (null !== ($child = $link->getChild())) {
            $link = $child;
            $ret[] = $link->end;
        }
        return $ret;
    }


    /**
     * Returns an array of all chain's members, grouped by links, and ordered by decreasing age (i.e. oldest first).
     * It's an array of linkItem (one for each link of the chain), each of which is an array being the result of the linkAsArray method.
     *
     *
     * @param CyclicChainDetectorUtil $util
     * @return array
     */
    public static function chainAsArray(CyclicChainDetectorUtil $util): array
    {
        $ret = [];
        $links = $util->getLinks();
        foreach ($links as $link) {
            $ret[] = self::linkAsArray($link);
        }
        return $ret;
    }
}