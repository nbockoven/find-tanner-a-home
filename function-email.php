<?php

  function validate( $array ){
    foreach( $_POST as $key => $value ){
      $value  = trim( $value );
      $_POST[$key] = $value;
      $isGood = false;
      switch( $key ){
        case 'email':
          $isGood = validateEmail( $value );
          break;
        case 'phone':
          $isGood = validatePhone( $value );
          break;
        default:
          $isGood = strlen( $value ) > 2;
      }
    }
  }

  if( $_POST['name'] && $_POST['email'] && $_POST['phone'] && $_POST['message'] && validate( $_POST ) ){
    if( mail( $to, $subject, $message, $headers ) )
      die( json_encode( "I love you, Tanner." ) );
    else
      die( json_encode( "Did not send." ) );
  }
  else{
    die( json_encode( "Nope." ) );
  }

?>
