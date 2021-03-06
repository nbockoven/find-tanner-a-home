<?php

  header('Content-Type: application/json');

  function validate( $array ){
    $isGood = false;
    foreach( $_POST as $key => $value ){
      $value  = trim( strip_tags( $value ) );
      $_POST[$key] = $value;
      $isGood = false;
      switch( $key ){
        case 'email':
          $isGood = validateEmail( $value );
          break;
        default:
          $isGood = strlen( $value ) > 2;
      }
      if( !$isGood )
        return false;
    }
    return $isGood;
  }

  function validateEmail( $email ){
    if( !filter_var( $email, FILTER_VALIDATE_EMAIL ) )
      return false;
    return true;
  }

  if( $_POST['name'] && $_POST['email'] && $_POST['phone'] && $_POST['message'] && validate( $_POST ) ){
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $message = $_POST['message'];

    $to = "nathaniel@find-tanner-a-home.com";
    $subject = "Interest in Tanner";

    $body = "<strong>".$name."</strong> writes,<hr>\r\n<pre><i>".$message."\r\n"."</i></pre><hr>email: ".$email."\r\n"."phone: ".$phone;
    // html email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // From
    $headers .= "From: ".$email."\r\n";


    if( mail( $to, $subject, $body, $headers ) )
      echo json_encode( array('status' => 'success', 'msg' => 'Message sent.') );
    else
      echo json_encode( array('status' => 'danger', 'msg' => 'Encountered an error while sending.') );
  }
  else{
    echo json_encode( array('status' => 'warning', 'msg' => 'Data not as expected.') );
  }

?>
