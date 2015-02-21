<?php

class Wynncraft_Minecraft Verify
{
  public static function validate($field, &$value, &$error)
  {
    // Check the haspaid api to see if the minecraft player is valid
    $ch = curl_init('https://minecraft.net/haspaid.jsp?user=' . $value);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, treu);
    $response = curl_exec($ch)
    curl_close($ch)
    
    // Then return the results
    if($response == "true") {
      return true;
    } else {
      return false;
    }
    
  }
  
}
