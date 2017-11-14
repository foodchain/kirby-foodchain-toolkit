<?php

namespace FC;

use F as KirbyToolkitF;

/**
 * File
 *
 * Low level file handling utilities to extend the core kirby methods
 *
 * @package   Kirby Foodchain Toolkit
 * @author    Paul Wagner <paulw@foodchain.com>
 * @link      https://github.com/foodchain
 * @copyright Paul Wagner
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

class F extends KirbyToolkitF {

  /**
   * get a remote url with caching for better performance
   * NOTE: this always works independently of the global caching settings
   * 
   * @param  string  $url
   * @param  integer $expires  seconds cache is valid
   * @return string
   */
   public static function readCached($url, $expires = 3600) {

    // Don't redeclare $kirby unless we need to
    if (!isset($kirby)) $kirby = kirby();

    $namespace = str::slug($kirby->page()->uri()) . '__' . url::host($url) . '-';

    // Define path to cached file
    $cachePath = $kirby->roots()->cache() . DS . 'get-cached__' . $namespace . md5($url);
    // Check for valid cached file
    if (f::isReadable($cachePath) and ((time() - f::modified($cachePath)) < $expires)) {
      return f::read($cachePath);
    }
    // Cached file is expired or doesn't exist; pull content from original source and save a new cache
    $content = f::read($url);
    f::write($cachePath, $content);
    return $content;
  }

}

