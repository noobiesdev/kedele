<?php
namespace App\Helpers;

class PhoneHelper {
  public static function make($phone) {
      $replace = [' ', ',', '-', '.', '(', ')', '+'];
      $phone = str_replace($replace, '', $phone);

      if( !preg_match('/[^0-9]/', trim($phone)) ) {
          if(substr(trim ($phone), 0, 2) == '62') {
            if(substr(trim ($phone), 0, 3) == '620') {
              $phone =  '62'.substr(trim($phone), 3);
            }
            $phone = trim($phone);
          }else if ( substr(trim ($phone), 0, 2) == '08') {
            $phone =  '62'.substr(trim($phone), 1);
          }else{
            $phone =  '628'.substr(trim($phone), 2);
          }
      }
      return $phone;
  }

  public static function validate($phone) {
      if( !preg_match('/[^0-9]/', trim($phone)) ) {
          if(substr(trim ($phone), 0, 2) == '62') {
            $result = true;
          }else if ( substr(trim ($phone), 0, 2) == '08') {
            $result = false;
          }else{
            $result = false;
          }
      }else{
        $result = false;
      }
      if($result) {
        return $phone;
      }else{
        return PhoneHelper::make($phone);
      }
  }

}
