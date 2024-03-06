<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW M2 CS Racing</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/ac95f91c55cc591ecf37a4d136ff8031?family=BMWTypeNext+Pro+Regular" rel="stylesheet">
    <link rel="stylesheet" href="clase.css">
</head>
<body class="body">
    <div class=bg>
      <div class="bg image5">
          <?php include ('topnav.php') ?>
        <br><br><br>
        <h1 class="h1">BMW M2 CS Racing</h1>
      </div>
    </div>
    <?php include ('mcars.php') ?>
    <div class="text-bmw">
        With the BMW M2 CS Racing, BMW M Motorsport continues its tradition of close-to-production vehicles. Like its 
        two predecessors, the BMW M235i Racing and the BMW M240i Racing, it paves the way for ambitious teams and 
        drivers to get involved in motorsport. The BMW M2 CS Racing boasts impressive driving figures and offers the 
        performance of a pedigree race car at a competitive price. The BMW M2 CS, a BMW M GmbH special edition, is the 
        perfect base for the new entry-level model.  In close collaboration with BMW M GmbH colleagues, BMW Motorsport 
        engineers used many of the insights from the development of the BMW M4 GT4 to set totally new standards in the 
        entry-level class with the BMW M2 CS Racing. Motorsport-specific driving aids, such as ABS and DSC, guarantee 
        that newcomers will be able to handle the car safely. A mechanical limited slip differential with pre-load and 
        separate cooling also comes as standard, as do specially manufactured drive shafts. Like its production 
        counterpart, the roof is also made of carbon. 
    </div>
    <div class="spec-cars">
      <img src="img/CSracingspec.png" alt="BMWM2CSracingspec" style="width:450px;height:350px;">
      <div class="text">
        <p style="font-size:26px;margin-bottom: 30px;">TECHNICAL DATA OF THE BMW M2 CS Racing:</p>
        <p><b>Six-cylinder in-line, four valves</b><br>
        <b>Capacity:</b> 2,979 cc<br>
        <b>No. cylinders:</b> 6<br>
        <b>Combustion Engine:</b> Piston<br>
        <b>Fuel:</b> Petrol<br>
        <b>Tank Volume:</b> 84 L<br>
        <b>Engine speed: max.</b> 250 km / h<br>
        <b>Output (regulated):</b> up to 450 hp<br>
        <b>Chassis:</b> Coupe<br>
        <b>Engine Placement:</b> Front<br>
        <b>Hub:</b> 89.6 mm<br>
        <b>Bore:</b> 84.0 mm<br>
        </p>  
      </div>
    </div>
    <div class="galery">
      <div>
        <img class="galery-photo1" src="img/CS1.png" alt="photo1" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
        <img class="galery-photo1" src="img/CS3.png" alt="photo3" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
      </div>
      <div>
        <img class="galery-photo2" src="img/CS2.png" alt="photo2" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
        <img class="galery-photo3" src="img/CS4.png" alt="photo4" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
        <img class="galery-photo3" src="img/CS5.png" alt="photo5" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
      </div>
    </div>
    <?php include ('footer.php') ?>
    <script src="animatii.js"></script>
</body>
</html>