<?php

namespace FC;

use Cache as KirbyToolkitCache;

/**
 * Cache
 *
 * Cache wrapper to extend the core kirby methods of
 * all available drivers
 * 
 * @package   Kirby Foodchain Toolkit
 * @author    Paul Wagner <paulw@foodchain.com>
 * @link      https://github.com/foodchain
 * @copyright Paul Wagner
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

class Cache extends KirbyToolkitCache {

  /**
   * remove a cache key if its older than a certian amount
   * @param  Page    $page      [description]
   * @param  integer $olderThan [description]
   * @return [type]             [description]
   */
   public static function removeIf($page, $olderThan = 3600) {
        //$cacheId is created the same way kirby does it
        //in around line 603 in the kirby/kirby.php core file
        $cacheId = md5(url::current() . $page->representation());
        if (time() - cache::created($cacheId) > $olderThan) {
          cache::remove($cacheId);
        }
  }

}

