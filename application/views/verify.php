  <? php 
  require_once ( 'recaptchalib.php' ); 
  $privatekey =  " 6Lci1wATAAAAAPPp3rOS6kVNq20-Fnibziae_DWY " ; 
  $resp = recaptcha_check_answer ( $privatekey , 
                                $_SERVER [ "REMOTE_ADDR" ], 
                                $_POST [ "recaptcha_challenge_field" ], 
                                $_POST [ "recaptcha_response_field" ]); 

  if  (! $resp -> is_valid )  { 
    // ¿Qué sucede cuando el CAPTCHA se equivoca al introducir 
    morir  ( "El reCAPTCHA no se ha introducido correctamente volver y probar otra vez.".  . 
         "(reCAPTCHA dijo:"  . $ resp -> error .  ")" ); 
  }  otro  { 
    / / Su código aquí para manejar una verificación exitosa 
  } 
  ?>