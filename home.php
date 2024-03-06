<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BMW Motorsport</title>
        <link rel="icon" type="image/x-icon" href="img/icon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://db.onlinewebfonts.com/c/ac95f91c55cc591ecf37a4d136ff8031?family=BMWTypeNext+Pro+Regular" rel="stylesheet">
        <link rel="stylesheet" href="clase.css">
    </head>
    <body class="body">
      <div class=bg>
        <div class="bg image1">
          <?php include ('topnav.php') ?>
        <br><br><br>
        <h1 class="h1">BMW M MOTORSPORT</h1>
        </div>
      </div>
    <div >
        <div class="text-bmw">
        In the vibrant tapestry of motorsport history, BMW Motorsport stands as a bold and dynamic thread, 
        weaving innovation, precision, and speed. The 1970s marked a pivotal era for the brand, as BMW's racing 
        prowess came to the forefront. From the asphalt of Formula 1 to the endurance trials of the 24 Hours of 
        Le Mans, BMW's commitment to performance and cutting-edge engineering shone brightly. The era witnessed 
        the birth of iconic racing cars, each a testament to the brand's relentless pursuit of excellence.
        </div>
    </div>
    <div class="racecarstext">
      <p style="margin-bottom: 15px;">BMW M MOTORSPORT RACECARS</p>
    </div> 
    <div class="racecars" >
        <div class="bmw-M-Hibryd" >
          <div class="zoom-container">
              <img  src="img/bmwMHibridV8.png" alt="Bmw Hybrid V8" class="img-racecars" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
          </div>
          <div class="container-button">
            <a href="bmwMHibridV8.php">
              <button class="button"><span class="span">&#10132 BMW M Hybrid V8</span></button>
            </a>
          </div>
        </div>
        <div class="bmw-M-Hibryd">
          <div class="zoom-container">
            <img  src="img/BMWM4GT4.png" alt="Bmw M4 GT4" class="img-racecars" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
          </div>
          <div class="container-button">
            <a href="bmwM4GT4.php">
              <button class="button"><span class="span">&#10132 BMW M4 GT4</span></button>
            </a>
          </div>
        </div>
        <div class="bmw-M-Hibryd">
          <div class="zoom-container" >
            <img src="img/m4gt3.png" alt="Bmw M4 GT3" class="img-racecars" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
          </div>
          <div class="container-button">
            <a href="bmwM4GT3.php">
              <button class="button"><span class="span">&#10132 BMW M4 GT3</span></button>
            </a>
          </div>
        </div>
        <div class="bmw-M-Hibryd">
          <div class="zoom-container" >
            <img  src="img/bmwm2csracing.png" alt="Bmw M2 CSRacing" class="img-racecars" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
          </div>
          <div class="container-button">
            <a href="bmwM2cs.php">
              <button class="button"><span class="span">&#10132 BMW M2 CS Racing</span></button>
            </a>
          </div>
        </div>
      </div> 
    <?php include ('footer.php') ?> 
    <script src="animatii.js"></script>
    </body> 
</html>  