<?php


namespace Ling\CyclicChainDetector;

use Ling\CyclicChainDetector\Helper\CyclicChainDetectorHelper;

/**
 * The CyclicChainDetectorUtil class.
 */
class CyclicChainDetectorUtil
{

    /**
     * The callback to call when a cyclic dependency is detected.
     * It takes one argument: the link which contains the cyclic dependency.
     *
     *
     * @var callable
     */
    protected $callback;


    /**
     * Array of links.
     *
     * @var Link[]
     */
    protected $links;


    /**
     * Builds the CyclicChainDetectorUtil instance.
     */
    public function __construct()
    {
        $this->callback = null;
        $this->links = [];
    }

    /**
     * Sets the callback.
     *
     * @param callable $callback
     */
    public function setCallback(callable $callback)
    {
        $this->callback = $callback;
    }


    /**
     * Adds a dependency link.
     *
     * @param string $child
     * @param string $parent
     */
    public function addDependency(string $child, string $parent)
    {
        $links = $this->getLinksByEndNode($child);

        if ($links) {
            foreach ($links as $link) {
                $link->appendChildByEndNode($parent);
            }
        } else {
            $link = new Link($child, $parent);
            $this->links[] = $link;
        }


        $this->checkCyclicRelationship();
    }

    /**
     * Returns the links of this instance.
     *
     * @return Link[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }


    /**
     * Removes all the links from the chain.
     */
    public function reset()
    {
        $this->links = [];
    }



    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Returns the link instances corresponding to the given parent, if it exists, or null otherwise.
     * @param string $parent
     * @return Link[]
     *
     */
    private function getLinksByEndNode(string $parent): array
    {
        $ret = [];
        foreach ($this->links as $link) {
            $end = $link->getLastEndNode();
            if ($parent === $end) {
                $ret[] = $link;
            }
        }
        return $ret;
    }


    /**
     * Check if there is any cyclic relationship in any of the links of the chain.
     * If there is a cyclic relationship, triggers the callback, passing the culprit link.
     *
     */
    private function checkCyclicRelationship()
    {

        foreach ($this->links as $link) {
            $arr = CyclicChainDetectorHelper::linkAsArray($link);

            $memory = [];
            while (null !== ($node = array_pop($arr))) {
                if (false === in_array($node, $memory, true)) {
                    $memory[] = $node;
                } else {
                    if (null !== $this->callback) {
                        call_user_func($this->callback, $link);
                    }
                }
            }
        }
    }
}