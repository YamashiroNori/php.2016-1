<?php

$sea_creatures = "cucumber;jellyfish, conger eel,shrimp, crab roe; bluefish";
// Break apart the string on a comma or semicolon
// followed by an optional space
$creature_list = preg_split('/[,;] ?/',$sea_creatures, 3);
print "Would you like some $creature_list[2]?";

var_dump($creature_list);