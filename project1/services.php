<?php include("templates/header.php"); ?>
<div class="container">
  <h1 class="title">SERVICES</h1>
  <hr />
  <div class="service">
    <h2>Software Engineer <span><button type="button" id="softwareShow" class="btn show">SHOW DETAILS</button></span></h2>
    <div class="detailed-info" id="softwarePane">
      <?php
      $images = array(
        "Java" => "img/java.png",  //src: http://logodatabases.com/java-logo.html/java-logo-large
        "Python" => "img/python.png", //src: https://www.python.org/static/opengraph-icon-200x200.png
        "JavaScript" => "img/js.png", //src: https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/480px-Unofficial_JavaScript_logo_2.svg.png
        "HTML5" => "img/html5.png" //src: https://www.w3.org/html/logo/downloads/HTML5_Logo_256.png
      );
      foreach ($images as $imgName => $url) {
        echo $imgName.'<img class="skill-logo" src="'.$url.'" alt="'.$imgName.'" /> ';
      }
      ?>
      <br />
      <h3>Languages</h3>
      
    </div>
  </div>

  <hr />

  <div class="service">
    <h2>Pianist<span><button type="button" id="pianistShow" class="btn show">SHOW DETAILS</button></span></h2>
    <div class="detailed-info" id="pianistPane">
      <?php
      $images = array(
        "Classical" => "img/classical.jpeg", //src http://holykaw.alltop.com/wp-content/uploads/2013/09/sheet-music.jpg
        "Jazz" => "img/jazz.jpg", //src http://www.michaelasimos.com/wp-content/uploads/2015/12/jazz-music-1.jpg
        "Pop" => "img/pop.jpeg" //src https://www.timeshighereducation.com/sites/default/files/styles/the_breaking_news_image_style/public/Pictures/web/d/d/c/vinyl-record-lyrics-illustration.jpg?itok=xdsXRxkU
      );
      foreach ($images as $imgName => $url) {
        echo $imgName.'<img class="skill-logo" src="'.$url.'" alt="'.$imgName.'" /> ';
      }
      ?>
      <br />
      <h3>Playing Styles</h3>
    </div>
  </div>
</div>
<?php include("templates/footer.php"); ?>
