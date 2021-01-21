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
        $link = $this->getLinkByName($child);

        if (null === $link) {
            $childLink = new Link($child);
            $parentLink = new Link($parent);
            $childLink->addDependency($parentLink);
            $this->links[] = $childLink;
        } else {
//            if (false === $link->hasDependency($parent)) {
            $parentLink = new Link($parent);
            $link->addDependency($parentLink);
//            }
        }


        $this->checkCyclicRelationship();
    }


    /**
     * Adds the given dependencies as links.
     * The dependencies argument is an array of dependencyItems,
     * each of which being an array with the following structure:
     *
     * - 0: child
     * - 1: parent
     *
     *
     *
     * @param array $dependencies
     */
    public function addDependencies(array $dependencies)
    {
        foreach ($dependencies as $dependency) {
            list($child, $parent) = $dependency;
            $this->addDependency($child, $parent);
        }
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
     * Returns the link instance corresponding to the given parent, if it exists, or null otherwise.
     *
     * @param string $name
     * @return Link|null
     */
    private function getLinkByName(string $name): ?Link
    {
        foreach ($this->links as $link) {
            if ($name === $link->name) {
                return $link;
            }
            $childLink = $link->getDependencyByName($name, ['last' => true,]);
            if (null !== $childLink) {
                return $childLink;
            }
        }
        return null;
    }


    /**
     * Check if there is any cyclic relationship in any of the links of the chain.
     * If there is a cyclic relationship, triggers the callback, passing the culprit link.
     *
     */
    private function checkCyclicRelationship()
    {
        foreach ($this->links as $link) {

            CyclicChainDetectorHelper::each($link, function ($theLink) {
                $sources = CyclicChainDetectorHelper::getSourceNamesByLink($theLink);
                if (true === in_array($theLink->name, $sources, true)) {
                    if (null !== $this->callback) {
                        call_user_func($this->callback, $theLink);
                    }
                }
            });
        }
    }


}