<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
$(document).on("pagecreate","#pageone",function(){
$(".oZastavce").hide();
  $(".obrazek").on("swiperight",function(){
    $(this).hide();
    $(".oZastavce").show();
  });
  $(".oZastavce").on("swipeleft",function(){
    $(this).hide();
    $(".obrazek").show();
  });
});
</script>
</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>Zastaveni IV</h1>
  </div>

  <div data-role="main" class="ui-content">

      <div data-role="content">
          <div class="thumbnail">
            <img id="obrazek" src="http://www.farnostzebetin.cz/wp-content/gallery/krizova-cesta-v-kostele-sv-bartolomeje/KC-04.jpg" alt="...">
          </div>
      </div>

    <div data-role="page">
      </div>
      <div data-role="content">
        <p  id="oZastavce">Huehuehue</p>
      </div>
    </div>




    <p class="obrazek">If you swipe me, I will disappear.</p>
    <p class="oZastavce">picture</p>
    <p>Swipe me away!</p>
    <p>Swipe me too!</p>
  </div>

</div>

</body>
</html>
