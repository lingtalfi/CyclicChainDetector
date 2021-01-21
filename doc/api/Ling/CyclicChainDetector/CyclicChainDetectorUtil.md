[Back to the Ling/CyclicChainDetector api](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector.md)



The CyclicChainDetectorUtil class
================
2021-01-21 --> 2021-01-21






Introduction
============

The CyclicChainDetectorUtil class.



Class synopsis
==============


class <span class="pl-k">CyclicChainDetectorUtil</span>  {

- Properties
    - protected callable [$callback](#property-callback) ;
    - protected [Ling\CyclicChainDetector\Link[]](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link.md) [$links](#property-links) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/__construct.md)() : void
    - public [setCallback](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/setCallback.md)(callable $callback) : void
    - public [addDependency](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/addDependency.md)(string $child, string $parent) : void
    - public [getLinks](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/getLinks.md)() : [Link](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link.md)
    - public [reset](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/reset.md)() : void
    - private [getLinksByEndNode](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/getLinksByEndNode.md)(string $parent) : [Link](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link.md)
    - private [checkCyclicRelationship](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/checkCyclicRelationship.md)() : void

}




Properties
=============

- <span id="property-callback"><b>callback</b></span>

    The callback to call when a cyclic dependency is detected.
    It takes one argument: the link which contains the cyclic dependency.
    
    

- <span id="property-links"><b>links</b></span>

    Array of links.
    
    



Methods
==============

- [CyclicChainDetectorUtil::__construct](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/__construct.md) &ndash; Builds the CyclicChainDetectorUtil instance.
- [CyclicChainDetectorUtil::setCallback](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/setCallback.md) &ndash; Sets the callback.
- [CyclicChainDetectorUtil::addDependency](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/addDependency.md) &ndash; Adds a dependency link.
- [CyclicChainDetectorUtil::getLinks](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/getLinks.md) &ndash; Returns the links of this instance.
- [CyclicChainDetectorUtil::reset](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/reset.md) &ndash; Removes all the links from the chain.
- [CyclicChainDetectorUtil::getLinksByEndNode](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/getLinksByEndNode.md) &ndash; Returns the link instances corresponding to the given parent, if it exists, or null otherwise.
- [CyclicChainDetectorUtil::checkCyclicRelationship](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/checkCyclicRelationship.md) &ndash; Check if there is any cyclic relationship in any of the links of the chain.





Location
=============
Ling\CyclicChainDetector\CyclicChainDetectorUtil<br>
See the source code of [Ling\CyclicChainDetector\CyclicChainDetectorUtil](https://github.com/lingtalfi/CyclicChainDetector/blob/master/CyclicChainDetectorUtil.php)



SeeAlso
==============
Next class: [CyclicChainDetectorHelper](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Helper/CyclicChainDetectorHelper.md)<br>
