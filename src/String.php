<?php
/*
 * Yes, this is a joke based on the NPM debacle
 * http://www.haneycodes.net/npm-left-pad-have-we-forgotten-how-to-program/
 */

namespace StringUtils;

class String {

  public static function leftPad($string, $length, $pad_string = ' ') {
    return str_pad($string, $length, $pad_string, STR_PAD_LEFT);
  }

  public static function rightPad($string, $length, $pad_string = ' ') {
    return str_pad($string, $length, $pad_string);
  }

}
