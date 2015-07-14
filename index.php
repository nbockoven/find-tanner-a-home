<?php include './email.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="icon" type="image/ico" href="img/favicon.ico">

    <title>Find Tanner A Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600">
    <link rel="stylesheet" href="css/core-layout.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="mb-20">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <h1 class="mt-10 mb-10 pull-left">Find Tanner A Home</h1>
            <a href="#modal-message" data-toggle="modal" class="fa fa-envelope pull-right"></a>
          </div><!-- .col-lg-10 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </header>
    <div class="container mb-20">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">

          <div class="row">
            <div class="col-md-8">
              <img src="img/Tanner64.JPG" alt="Tanner" class="img-thumbnail img-responsive">
              <p class="text-justify">A sad day has come that I must give up my 10 year old, purebred, male Shiba Inu, Tanner. My wife is allergic to him.</p>
            </div><!-- .col-md-8 -->
            <div class="col-md-4">
              <?php include './sections/quick-facts.html';?>
            </div><!-- .col-md-4 -->
          </div><!-- .row -->

          <?php include './sections/background.html';?>

          <?php include './sections/likes.html';?>

          <?php include './sections/temperament.html';?>

          <?php include './sections/our-search.html';?>

          <?php include './sections/contact.html';?>

        </div><!-- .col-lg-10 -->
      </div><!-- .row -->
    </div><!-- .container -->

    <?php include './modals/contact.html';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/magic.js"></script>

  </body>
</html>
