<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW M4 GT3</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/ac95f91c55cc591ecf37a4d136ff8031?family=BMWTypeNext+Pro+Regular" rel="stylesheet">
    <link rel="stylesheet" href="clase.css">
</head>
<body class="body">
    <div class=bg>
      <div class="bg image4">
          <?php include ('topnav.php') ?>
        <br><br><br>
        <h1 class="h1">BMW M4 GT3</h1>
      </div>
    </div>
    <?php include ('mcars.php') ?>
    <div class="text-bmw">
       With the BMW M4 GT3, the BMW M Motorsport product range has had a new figurehead since the start of the 2022 
       season. The new GT3 car succeeds the BMW M6 GT3 and offers BMW M Motorsport teams and drivers all over the 
       world the opportunity to challenge for victories and titles in a GT3 model based on the latest generation of 
       BMW M4. The biggest improvements compared to the BMW M6 GT3, are in three areas: driveability, cost 
       efficiency and operation. The BMW M4 GT3’s handling and cockpit equipment are more comfortable for amateur 
       drivers, while the car is easier on the tyres and offers greater consistency. Far lower lifecycle costs and 
       longer maintenance intervals for the engine and transmission are vital economic factors. The new BMW M4 
       Competition provides the perfect basis for the new top model from BMW M Motorsport (fuel consumption 
       (combined): 9.8 l/100 km acc. WLTP; combined CO2 emissions: 224 – 223 g/km acc. WLTP), whose engine was 
       designed from the outset for use at the racetrack. This underlines how road car and race car development 
       always go hand in hand at BMW M GmbH. As well as private outings in top-class racing series around the world 
       and endurance classics, the BMW M4 GT3 also goes up against international GT3 competition in the new GTD-PRO 
       class in the IMSA series.
    </div>
    <div class="spec-cars">
      <img src="img/m4gt3spec.png" alt="BMWM4GT3spec" style="width:450px;height:500px;">
      <div class="text">
        <p style="font-size:26px;margin-bottom: 30px;">TECHNICAL DATA OF THE BMW M4 GT3:</p>
        <p><b>P58 3.0l straight six engine</b><br>
        <b>Capacity:</b> 2,993 cc<br>
        <b>No. cylinders:</b> 6<br>
        <b>Combustion Engine:</b> Piston<br>
        <b>Fuel:</b> Petrol<br>
        <b>Tank Volume:</b> 120 L<br>
        <b>Engine speed: max.</b> 180 mph<br>
        <b>Output (regulated):</b> up to 503 hp<br>
        <b>Chassis:</b> Coupe<br>
        <b>Engine Placement:</b> Front<br>
        <b>Material:</b> Alcantara | Carbon<br>
        <b>Torque:</b> 600 Nm<br>
        </p>  
      </div>
    </div>
    <div class="galery">
      <div>
        <img class="galery-photo1" src="img/m4gt31.png" alt="photo1" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
        <img class="galery-photo1" src="img/m4gt33.png" alt="photo3" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
      </div>
      <div>
        <img class="galery-photo2" src="img/m4gt32.png" alt="photo2" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
        <img class="galery-photo3" src="img/m4gt34.png" alt="photo4" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
        <img class="galery-photo3" src="img/m4gt35.png" alt="photo5" onmouseover="IndepartareIn(this)" onmouseout="IndepartareOut(this)">
      </div>
    </div>
    <?php include ('footer.php') ?>
    <script src="animatii.js"></script>
</body>
</html>