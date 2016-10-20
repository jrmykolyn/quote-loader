<?php
require_once './functions.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- VENDOR STYLES -->  
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:500,600,700|Raleway:500,500i,700,700i" rel="stylesheet">
    <!-- PROJECT STYLES -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- VENDOR SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/vendor/jquery-ui.min.js"></script>
    <!-- PROJECT SCRIPTS -->
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body class="<?= getBodyClass(); ?>">
    <header class="header-wrap">
      <nav class="nav-wrap js--nav">
        <div class="nav-wrap__inner">
          <span class="nav-toggle js--nav-toggle"></span>
        </div>
      </nav><!-- .nav-wrap -->
    </header>
    <main class="main-content">
      <section class="quote-wrap">
      <?php
        $data = file_get_contents( './data/quotes.csv' );
        $data_arr = array_filter( explode( "\n", $data ), strlen );

        $quote_index = rand( 0, ( count($data_arr) - 1 ) );
        $quote = $data_arr[$quote_index];
        $quote_arr = explode( '|||' , $quote );

        include_once( './includes/quote/_quote.php' );
      ?>
      </section><!-- .quote-wrap -->
    </main><!-- .main-content-->
    <footer class="footer-wrap"></footer>
    <div class="obstruct"></div>
  </body>
</html>
