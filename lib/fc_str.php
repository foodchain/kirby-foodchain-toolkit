<?php

namespace FC;

use Str as KirbyToolkitStr;

/**
 * String
 *
 * A set of handy string methods to extend the core kirby methods
 *
 * @package   Kirby Foodchain Toolkit
 * @author    Paul Wagner <paulw@foodchain.com>
 * @link      https://github.com/foodchain
 * @copyright Paul Wagner
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

class Str extends KirbyToolkitStr {

  /**
   * makes a hashtag from a string
   * @param  string $string
   * @return string
   */
  public static function hashtagify($string) {
    $string = trim($string);
    $string = preg_replace("/[^A-Za-z0-9 ]/", '', $string);
    return '#' . self::collapse($string)  ;
  }

  /**
   * removes a hash from hashtag
   * @param  string $string
   * @return string
   */
  public static function unhashtagify($string) {
    $string = trim($string);
    return str_replace("#","", $string);;
  }

  /**
   * collapses a string while leaving case untouched
   * @param  string $string 
   * @return string
   */
  public static function collapse($string){
    $string = trim($string);
    return preg_replace('/\s+/', '', $string)  ;
  }

}

