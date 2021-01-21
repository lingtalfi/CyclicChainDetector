Ling/CyclicChainDetector
================
2021-01-21 --> 2021-01-21




Table of contents
===========

- [CyclicChainDetectorUtil](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil.md) &ndash; The CyclicChainDetectorUtil class.
    - [CyclicChainDetectorUtil::__construct](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/__construct.md) &ndash; Builds the CyclicChainDetectorUtil instance.
    - [CyclicChainDetectorUtil::setCallback](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/setCallback.md) &ndash; Sets the callback.
    - [CyclicChainDetectorUtil::addDependency](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/addDependency.md) &ndash; Adds a dependency link.
    - [CyclicChainDetectorUtil::getLinks](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/getLinks.md) &ndash; Returns the links of this instance.
    - [CyclicChainDetectorUtil::reset](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/CyclicChainDetectorUtil/reset.md) &ndash; Removes all the links from the chain.
- [CyclicChainDetectorHelper](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Helper/CyclicChainDetectorHelper.md) &ndash; The CyclicChainDetectorHelper class.
    - [CyclicChainDetectorHelper::debugLinks](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Helper/CyclicChainDetectorHelper/debugLinks.md) &ndash; Prints a human readable version of the links contained in the given chain.
    - [CyclicChainDetectorHelper::linkAsArray](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Helper/CyclicChainDetectorHelper/linkAsArray.md) &ndash; Returns all link's members, ordered by decreasing age (i.e.
    - [CyclicChainDetectorHelper::chainAsArray](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Helper/CyclicChainDetectorHelper/chainAsArray.md) &ndash; Returns an array of all chain's members, grouped by links, and ordered by decreasing age (i.e.
- [Link](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link.md) &ndash; The Link class.
    - [Link::__construct](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/__construct.md) &ndash; Builds the Link instance.
    - [Link::setChild](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/setChild.md) &ndash; Sets the child link.
    - [Link::getChild](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/getChild.md) &ndash; Returns the child of this instance.
    - [Link::appendChildByEndNode](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/appendChildByEndNode.md) &ndash; Appends a new child link with the given end name.
    - [Link::getLastEndNode](https://github.com/lingtalfi/CyclicChainDetector/blob/master/doc/api/Ling/CyclicChainDetector/Link/getLastEndNode.md) &ndash; Returns the last end node name for this link.


Dependencies
============
- [Bat](https://github.com/lingtalfi/Bat)


