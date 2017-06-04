<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<html>
<head>
  <meta charset="utf-8">
  <title>Zastaveni</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width,height=device-height,minimum-scale=1,maximum-scale=1"/>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>


<script>
$(document).on('swipeleft', '.ui-page', function(event){
    if(event.handled !== true) // This will prevent event triggering more then once
    {
        var nextpage = $.mobile.activePage.next('[data-role="page"]');
        // swipe using id of next page if exists
        if (nextpage.length > 0) {
            $.mobile.changePage(nextpage, {transition: "slide", reverse: false}, true, true);
        }
        event.handled = true;
    }
    return false;
});

$(document).on('swiperight', '.ui-page', function(event){
    if(event.handled !== true) // This will prevent event triggering more then once
    {
        var prevpage = $(this).prev('[data-role="page"]');
        if (prevpage.length > 0) {
            $.mobile.changePage(prevpage, {transition: "slide", reverse: true}, true, true);
        }
        event.handled = true;
    }
    return false;
});

</script>
</head>


<body>
  <div data-role="page" id="article1">
    <div data-role="header" data-theme="b" data-position="fixed" data-id="footer">
      <h1>Zastavka 1</h1>
    </div>
    <div data-role="content">
      <p>
        <div class="thumbnail zoom">
          <img src="http://www.farnostzebetin.cz/wp-content/gallery/krizova-cesta-v-kostele-sv-bartolomeje/KC-04.jpg" alt="...">
          <div class="caption">
            <h3 class="text-center">Zastaveni 1.... whatevs'</h3>
          </div>
        </div>
      </p>
    </div>
  </div>


  <div data-role="page" id="article2">
    <div data-role="header" data-theme="b" data-position="fixed" data-id="footer">
      <a href="#article1" data-icon="home" data-iconpos="notext">Home</a>
      <h1>Zastaveni prvni: sadba stromu, ze ktereho byl vyroben kriz</h1>
    </div>
    <div data-role="content">
      <p>Huehuehue</p>
    </div>
  </div>

</body>
</html>
