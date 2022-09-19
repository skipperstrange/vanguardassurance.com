<?php
define("ROUTES", [
//Example route format
//# controller:aztrasC view:index
['url'=>'@^home$@', 'controller'=>'index', 'view'=>'index'],

//# controller:aztrasC view:index
['url'=>'@^home\/$@', 'controller'=>'index', 'view'=>'index'],

//# controller:aztrasC view:index
['url'=>'@^$@', 'controller'=>'index', 'view'=>'index'],
['url'=>'@^contact-us/$@', 'controller'=>'contact-us', 'view'=>'contact-us'],
['url'=>'@^contact-us$@', 'controller'=>'contact-us', 'view'=>'contact-us'],
['url'=>'@^team/$@', 'controller'=>'team', 'view'=>'team'],
['url'=>'@^team$@', 'controller'=>'team', 'view'=>'team'],

//#Passing parameters through route - (?P<parameter-name>\w)
['url'=>'@^product/(?P<id>\d+)/$@', 'controller'=>'admin', 'view'=>'admin/index'],
//Strict for digits
//['url'=>'@^product/(?P<id>\w+)/$@', 'controller'=>'admin', 'view'=>'admin/index'],

#end of routes
]);

