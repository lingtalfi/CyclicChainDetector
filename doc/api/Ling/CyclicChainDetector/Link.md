[Back to the Ling/CyclicChainDetector api](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector.md)



The Link class
================
2021-01-21 --> 2021-01-21






Introduction
============

The Link class.
Represents a unidirectional dependency.



Class synopsis
==============


class <span class="pl-k">Link</span>  {

- Properties
    - public string [$start](#property-start) ;
    - public string [$end](#property-end) ;
    - protected [Ling\CyclicChainDetector\Link](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link.md)|null [$child](#property-child) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/__construct.md)(string $start, string $end) : void
    - public [setChild](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/setChild.md)([Ling\CyclicChainDetector\Link](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link.md) $link) : void
    - public [getChild](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/getChild.md)() : [Link](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link.md) | null
    - public [appendChildByEndNode](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/appendChildByEndNode.md)(string $end) : void
    - public [getLastEndNode](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/getLastEndNode.md)() : string

}




Properties
=============

- <span id="property-start"><b>start</b></span>

    The name of the start node.
    
    

- <span id="property-end"><b>end</b></span>

    The name of the end node.
    
    

- <span id="property-child"><b>child</b></span>

    The child link, if any.
    
    



Methods
==============

- [Link::__construct](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/__construct.md) &ndash; Builds the Link instance.
- [Link::setChild](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/setChild.md) &ndash; Sets the child link.
- [Link::getChild](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/getChild.md) &ndash; Returns the child of this instance.
- [Link::appendChildByEndNode](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/appendChildByEndNode.md) &ndash; Appends a new child link with the given end name.
- [Link::getLastEndNode](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/getLastEndNode.md) &ndash; Returns the last end node name for this link.





Location
=============
Ling\CyclicChainDetector\Link<br>
See the source code of [Ling\CyclicChainDetector\Link](https://github.com/lingtalfi/CyclicChainDetector/blob/master/Link.php)



SeeAlso
==============
Previous class: [CyclicChainDetectorHelper](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Helper/CyclicChainDetectorHelper.md)<br>
