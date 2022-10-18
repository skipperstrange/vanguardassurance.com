<?php
define("ROUTES", [
//Example route format
//# controller:aztrasC view:index
['url'=>'@^home$@', 'name'=>'home', 'controller'=>'index', 'view'=>'index'],

//# controller:aztrasC view:index
['url'=>'@^home\/$@', 'name'=>'home', 'controller'=>'index', 'view'=>'index'],

//# controller:aztrasC view:index
['url'=>'@^$@', 'name'=>'/', 'controller'=>'index', 'view'=>'index'],
['url'=>'@^contact-us/$@', 'name'=>'contact', 'controller'=>'contact-us', 'view'=>'contact-us'],
['url'=>'@^contact-us$@', 'name'=>'contact', 'controller'=>'contact-us', 'view'=>'contact-us'],

['url'=>'@^about-us$@', 'name'=>'about', 'controller'=>'about-us', 'view'=>'about-us'],
['url'=>'@^about-us/$@', 'name'=>'about', 'controller'=>'about-us', 'view'=>'about-us'],

['url'=>'@^team/$@', 'name'=>'team', 'controller'=>'team', 'view'=>'team'],
['url'=>'@^team$@', 'name'=>'team', 'controller'=>'team', 'view'=>'team'],

['url'=>'@^team#board/$@', 'name'=>'team-board', 'controller'=>'team', 'view'=>'team'],
['url'=>'@^team#board$@', 'name'=>'team-board', 'controller'=>'team', 'view'=>'team'],


['url'=>'@^api/$@', 'name'=>'api', 'controller'=>'api', 'view'=>''],
['url'=>'@^api$@', 'name'=>'api', 'controller'=>'api', 'view'=>''],


['url'=>'@^products/$@', 'name'=>'products', 'controller'=>'products', 'view'=>'products'],
['url'=>'@^products$@', 'name'=>'products', 'controller'=>'products', 'view'=>'products'],


['url'=>'@^news/(?P<id>\d+)/$@', 'name'=>'news-single', 'controller'=>'article', 'view'=>'article'],
['url'=>'@^news/(?P<id>\d+)$@', 'name'=>'news-single', 'controller'=>'article', 'view'=>'article'],


['url'=>'@^news/$@', 'name'=>'news', 'controller'=>'news', 'view'=>'news'],
['url'=>'@^news$@', 'name'=>'news', 'controller'=>'news', 'view'=>'news'],


['url'=>'@^categories/(?P<id>\d+)/$@', 'name'=>'categories', 'controller'=>'categories', 'view'=>'news'],
['url'=>'@^categories/(?P<id>\d+)$@', 'name'=>'categories', 'controller'=>'categories', 'view'=>'news'],

['url'=>'@^authors/(?P<id>\d+)/articles/$@', 'name'=>'users-news', 'controller'=>'users-news', 'view'=>'news'],
['url'=>'@^authors/(?P<id>\d+)/articles$@', 'name'=>'users-news', 'controller'=>'users-news', 'view'=>'news'],

//#Passing parameters through route - (?P<parameter-name>\w)
//['url'=>'@^products/(?P<id>\d+)/$@', 'name'=>'', 'controller'=>'admin', 'view'=>'admin/index'],
//Strict for digits
//['url'=>'@^product/(?P<id>\w+)/$@', 'name'=>'', 'controller'=>'admin', 'view'=>'admin/index'],

#end of routes
]);

