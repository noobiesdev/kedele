<?php
namespace App\Helpers;

class PriceHelper {
  public static function clear($price) {
      $replace = [' ', ',', '-', '.'];
      $price = str_replace($replace, '', $price);

      if( !preg_match('/[^0-9]/', trim($price)) ) {
          $price;
      }
      return $price;
  }

}
