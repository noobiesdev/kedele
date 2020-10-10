<?php
namespace App\Helpers;

class CryptoHelper {
  private $times   = 5;
  private $salt    = 905;
  private $range   = [2000, 22000];
  private $lim_hex = 4;
  public static function compose($num) {
      $num    = ($this->times * $num) + $this->salt;
      $crypt  = dechex ( $num );
      $crypt  = strrev( $crypt );
      $random = rand ( $this->range[0] , $this->range[1] );
      $salt   = dechex ( $random );
      $result = substr($salt, 0, $this->lim_hex);
      $crypt  = $result.$crypt;
      $crypt  = self::hypenate($crypt);
      return $crypt;
  }

  public static function decompose($crypt) {
      $crypt = str_replace("-", "", $crypt);
      $crypt = substr($crypt, $this->lim_hex, 100);
      $crypt = strrev( $crypt );
      $num = hexdec($crypt);
      $num = ($num - $this->salt) / $this->times;
      return $num;
  }

  public static function hypenate($str) {
      return wordwrap($str, $this->lim_hex, '-', true);
  }

}
