<?php
require_once './functions.php';

$accent = getAccentColor();
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
  <body class="<?= getBgClass( $accent ); ?>">
    <header class="header-wrap">
      <? /* include_once './includes/nav/_nav.php'; */ ?>
    </header>
    <main class="main-content">
      <section class="quote-wrap">
      <?php
        getRandomQuoteElem();
        getRandomQuoteElem( array( 'hide' => true ) );
      ?>
      </section><!-- .quote-wrap -->
    </main><!-- .main-content-->
    <footer class="footer-wrap"></footer>
    <div class="quote-spinner">
      <div class="quote-spinner__elem <?= getBgClass( getAccentColor() ); ?>"></div>
    </div>
    <div class="obstruct"></div>
  </body>
</html>
