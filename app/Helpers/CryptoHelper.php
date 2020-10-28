<?php
namespace App\Helpers;

class CryptoHelper {
  public static function config() {
    return [
        "times"   => 5,
        "salt"    => 905,
        "range"   => ["min"=>2000, "max"=>22000],
        "lim_hex" => 2
      ];
  }
  public static function compose($num) {
      $config = CryptoHelper::config();
      $num    = ($config['times'] * $num) + $config['salt'];
      $crypt  = dechex ( $num );
      $crypt  = strrev( $crypt );
      $random = rand ( $config["range"]["min"] , $config["range"]["max"] );
      $salt   = dechex ( $random );
      $result = substr($salt, 0, $config['lim_hex']);
      $crypt  = $result.$crypt;
      $crypt  = CryptoHelper::hypenate($crypt);
      return $crypt;
  }

  public static function decompose($crypt) {
      $config = CryptoHelper::config();
      $crypt = str_replace("-", "", $crypt);
      $crypt = substr($crypt, $config['lim_hex'], 100);
      $crypt = strrev( $crypt );
      $num = hexdec($crypt);
      $num = ($num - $config['salt']) / $config['times'];
      return $num;
  }

  public static function hypenate($str) {
      $config = CryptoHelper::config();
      return wordwrap($str, $config['lim_hex'], '-', true);
  }

}
