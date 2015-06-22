<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CrunchOff</title>

    <!-- Bootstrap core CSS -->
    <link href=<?php echo base_url("assets/css/bootstrap.css"); ?> rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url("assets/css/landing.css"); ?> rel="stylesheet">

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">

          </div>

          <div class="inner cover">
            <h1 class="cover-heading">CrunchOff</h1>
            <p class="lead">CrunchOff is a tournament style site where you listen, vote, and contribute to the best new music on the web. Log in with SoundCloud to start listening!</p>
            <p class="lead">
              <a href=<?php echo base_url("index.php/soundcloud/authenticate"); ?> class="btn btn-lg btn-default">Log In</a>
            </p>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src=<?php echo base_url("assets/js/bootstrap.js"); ?>></script>
  </body>
</html>
