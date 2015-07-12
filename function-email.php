<?php

  function validate( $array ){
    die( json_encode( $array ) );
  }

  if( validate( $_POST ) ){
    if( mail( $to, $subject, $message, $headers ) )
      die( json_encode( "I love you, Tanner." ) );
    else
      die( json_encode( "Did not send." ) );
  }
  else{
    die( json_encode( "Nope." ) );
  }

?>
