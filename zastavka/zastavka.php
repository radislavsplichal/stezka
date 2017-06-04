<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<html>
<head>
  <meta charset="utf-8">
  <title>My Blog</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <script>
  $(".carousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});
  </script>
</head>
<body>





<div class="container">
  <div class="row">

      <div class="thumbnail">
        <img src="http://www.farnostzebetin.cz/wp-content/gallery/krizova-cesta-v-kostele-sv-bartolomeje/KC-04.jpg" alt="...">
        <div class="caption">
          <h3 class="text-center">Zastaveni 1.... whatevs'</h3>
        </div>
      </div>



      <div class="container">

        <div class="page-header">
          <h1>Bootstrap default carousel with swipe and touch gestures</h1>
          <p class="lead">How to add the swipes gesture to comand the Bootstrap carousel on mobile devices.</p>
          <p>Made by <strong>Andrea Rufo</strong>, more info and tutorial on <a href="http://www.orangedropdesign.com/"> OrangeDropDesign.com</a></p>
        </div>

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="http://www.farnostzebetin.cz/wp-content/gallery/krizova-cesta-v-kostele-sv-bartolomeje/KC-04.jpg">
          </div>
          <div class="item">
            <img src="http://www.farnostzebetin.cz/wp-content/gallery/krizova-cesta-v-kostele-sv-bartolomeje/KC-04.jpg">
          </div>
          <div class="item">
            <img src="http://www.farnostzebetin.cz/wp-content/gallery/krizova-cesta-v-kostele-sv-bartolomeje/KC-04.jpg">
          </div>
          <div class="item">
            <img src="http://www.farnostzebetin.cz/wp-content/gallery/krizova-cesta-v-kostele-sv-bartolomeje/KC-04.jpg">
          </div>
          <div class="item">
            <img src="http://www.farnostzebetin.cz/wp-content/gallery/krizova-cesta-v-kostele-sv-bartolomeje/KC-04.jpg">
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>




  </div>
</div>







</body>
</html>
