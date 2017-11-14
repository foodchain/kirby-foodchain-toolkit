# Kirby FoodChain Toolkit

A collection of classes to extend the kirby toolkit

## Requirements
This field has been tested with Kirby 2.5+, but it should probably work with earlier versions too.

## Installation
### Manually
[Download the files](https://github.com/foodchain/kirby-foodchain-toolkit/archive/master.zip) and place them inside `site/plugins/foodchain-toolkit`.

## Usage
Identical to the kirby toolkit with the caveate that it is namespaced into the fc namespace.  So for example instead of `str::upper('uppercaseme')` you would use `fc\str::upper('uppercaseme')`.  All classes inherit the kirby toolkit class of the same name and extend it with some aditional methods.  See source code to see the extended methods.  Currently extended kirby toolkit base classes are
 - str

## Version history
You can find the version history in the [changelog](changelog.md).

## License
[MIT License](http://www.opensource.org/licenses/mit-license.php)