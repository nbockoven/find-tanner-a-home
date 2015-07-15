<?php

  if(
    $_POST['pass'] == "tracyisabitch" &&
    !empty($_POST['generated']) == $_POST['confirmation'] &&
    strlen( trim( $_POST['generated'] ) )
  ){
    $msg = shell_exec( "cd ~/public_html/find-tanner-a-home.com; git checkout master; git fetch --all; git reset --hard origin/master; find . -type d -exec chmod 755 {} \; find . -type f -exec chmod 644 {} \; chmod 755 update.php;" );
  }
  else{
    $rand = rand(1000, 9999);
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css">
    <link rel="stylesheet" href="css/core-layout.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form method="POST" class="col-sm-4 col-sm-offset-4">
          <h1>Update</h1>
          <?php if( $msg ){ ?>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              Update successful.
              <pre><?=$msg?></pre>
            </div><!-- .alert -->
          <?php  } ?>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon pl-0">password</span>
              <input type="password" class="form-control" name="pass" autofocus>
            </div><!-- .input-group -->
          </div><!-- .form-group -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon pl-0">generated</span>
              <input type="number" class="form-control" min="0" name="generated" value="<?=$rand?>" readonly>
            </div><!-- .input-group -->
          </div><!-- .form-group -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon pl-0">confirm</span>
              <input type="number" class="form-control" min="0" name="confirmation">
            </div><!-- .input-group -->
          </div><!-- .form-group -->
          <input type="submit" class="btn btn-primary btn-block" value="update">
        </form>
      </div><!-- .row -->
    </div><!-- .container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
