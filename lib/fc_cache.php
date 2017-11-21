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
  * remove cache key if older than a specified age in seconds
  * @param  string $cacheId    id of cache item to delete;
  * @param  integer $olderThan age to expire if
  * @return void
  */
  public static function removeIf($cacheId, $olderThan = 3600) {
        if (time() - cache::created($cacheId) > $olderThan) {
          cache::remove($cacheId);
        }
  }

}

