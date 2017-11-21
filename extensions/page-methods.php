<?php 
//$cacheId is created the same way kirby does it
//in around line 603 in the kirby/kirby.php core file
//this is a companion to help with the fc\cache::removeIf() method
page::$methods['cacheId'] = function($page){
	return md5(url::current() . $page->representation());
};
     