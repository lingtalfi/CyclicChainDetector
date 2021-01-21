<?php


namespace Ling\CyclicChainDetector;


/**
 * The Link class.
 * Represents a unidirectional dependency.
 */
class Link
{

    /**
     * The name of the start node.
     * @var string
     */
    public $start;

    /**
     * The name of the end node.
     * @var string
     */
    public $end;

    /**
     * The child link, if any.
     * @var Link|null
     */
    protected $child;


    /**
     * Builds the Link instance.
     * @param string $start
     * @param string $end
     */
    public function __construct(string $start, string $end)
    {
        $this->start = $start;
        $this->end = $end;
        $this->child = null;
    }

    /**
     * Sets the child link.
     *
     * @param Link $link
     */
    public function setChild(Link $link)
    {
        $this->child = $link;
    }

    /**
     * Returns the child of this instance.
     *
     * @return Link|null
     */
    public function getChild(): ?Link
    {
        return $this->child;
    }


    /**
     * Appends a new child link with the given end name.
     *
     * @param string $end
     */
    public function appendChildByEndNode(string $end)
    {
        $link = $this;
        while (null !== ($child = $link->getChild())) {
            $link = $child;
        }
        $childLink = new Link($link->end, $end);
        $link->setChild($childLink);
    }


    /**
     * Returns the last end node name for this link.
     * @return string
     */
    public function getLastEndNode(): string
    {
        $link = $this;
        while (null !== ($newLink = $link->getChild())) {
            $link = $newLink;
        }
        return $link->end;
    }


}