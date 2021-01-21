CyclicChainDetector, conception notes
===============
2021-01-21



This util was designed to help me spot cyclic relationships, while re-creating the [Light_PluginInstaller](https://github.com/lingtalfi/Light_PluginInstaller) plugin, 
which needs to spot those dependencies if they occur between third party plugins that the user wants to install.



What's a cyclic dependency?


So for instance if "a" depends on "b", we have a simple dependency from "a" to "b".
We can represent it as a chain like this: a -> b.

A cyclic dependency is when one of the member  of the chain is repeated, so for instance:

- a -> b -> c: this chain does NOT contain a cyclic dependency
- a -> b -> c -> a: this chain contains a cyclic dependency, because "a" is repeated



Usage
----------
2021-01-21


Here is my test setup, we can use this as a quickstart:


```php


$u = new CyclicChainDetectorUtil();
$u->setCallback(function (Link $link) {
    $lastEndNode = $link->getLastEndNode();
    a("cyclic relationship detected with culprit $lastEndNode, in chain: " . implode(" -> ", CyclicChainDetectorHelper::linkAsArray($link)));

});


if (1) {

    $u->reset();
    $u->addDependency("a", 'b');
    $u->addDependency("a", 'c');
    $u->addDependency("b", 'c');

    CyclicChainDetectorHelper::debugLinks($u);


    // a -> b -> c
    // a -> c
}

if (1) {

    $u->reset();
    $u->addDependency("a", 'b');
    $u->addDependency("b", 'c');
    $u->addDependency("a", 'c');

    CyclicChainDetectorHelper::debugLinks($u);


    // a -> b -> c
    // a -> c

}

if (1) {

    $u->reset();
    $u->addDependency("a", 'c');
    $u->addDependency("a", 'b');
    $u->addDependency("b", 'c');
    CyclicChainDetectorHelper::debugLinks($u);


    // a -> c
    // a -> b -> c

}

if (1) {


    $u->reset();
    $u->addDependency("a", 'b');
    $u->addDependency("b", 'c');
    $u->addDependency("c", 'd');
    CyclicChainDetectorHelper::debugLinks($u);


    // a -> b -> c -> d

}


if (1) {

    $u->reset();
    $u->addDependency("a", 'b');
    $u->addDependency("b", 'c');
    $u->addDependency("c", 'a');
    CyclicChainDetectorHelper::debugLinks($u);


    // a -> b -> c -> a!

}


if (1) {
    $u->reset();
    $u->addDependency("a", 'b');
    $u->addDependency("b", 'c');
    $u->addDependency("c", 'd');
    $u->addDependency("c", 'e');
    $u->addDependency("b", 'e');


    CyclicChainDetectorHelper::debugLinks($u);


    // a -> b -> c -> d
    // c -> e
    // b -> e

}

if (1) {

    $u->reset();
    $u->addDependency("a", 'b');
    $u->addDependency("b", 'c');
    $u->addDependency("c", 'd');
    $u->addDependency("c", 'e');
    $u->addDependency("b", 'e');
    $u->addDependency("e", 'b');

    CyclicChainDetectorHelper::debugLinks($u);


    // a -> b -> c -> d
    // c -> e -> b
    // b -> e -> b!

}

```


The code above displayed this in my browser:

```html
----
a -> b -> c
a -> c
----
a -> b -> c
a -> c
----
a -> c
a -> b -> c
----
a -> b -> c -> d

string(71) "cyclic relationship detected with culprit a, in chain: a -> b -> c -> a"

----
a -> b -> c -> a
----
a -> b -> c -> d
c -> e
b -> e

string(66) "cyclic relationship detected with culprit b, in chain: b -> e -> b"

----
a -> b -> c -> d
c -> e -> b
b -> e -> b




```
